<?php 
session_start();
  if($_POST['pword'] != $_POST['pword2']){
    $_SESSION["message"]["errorLogin"] = "Passwords do not match"; 
      header("Location: /register.php");
  }

if(strlen($_POST['username']) <= 5 ||preg_match('/\d/',  $_POST['username'])==0){
    $_SESSION["message"]["errorLogin"] = "Username needs to be at least 5 characters long and contain a number"; 
      header("Location: /register.php");
  }
// strlen($_POST['username']);




include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

  
$sql = "SELECT * FROM users ";
$result = $conn->query($sql);

  foreach($result as $row){
   if(strtolower($row['username'])==strtolower($_POST['username'])){
     $_SESSION["message"]["errorLogin"] = "This username is already in use"; 
      header("Location: /register.php");
   }

   if(strtolower($row['email'])==strtolower($_POST['email'])){
     $_SESSION["message"]["errorLogin"] = "This email is already in use"; 
      header("Location: /register.php");
   }  
  }


     // echo "APPROVED"."<br>";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pword'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

  try {
    $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$hashed_password')";
    // use exec() because no results are returned
    $conn->exec($sql);
      $last_id = $conn->lastInsertId();
     $_SESSION["message"]["errorLogin"] = "Congrats, you now have an account! Please verify your email address in the email sent to your account."; 
    header("Location: /index.php");
  } catch(PDOException $e) {
         $_SESSION["message"]["errorLogin"] = "An unexpected error occured". $sql . "<br>" . $e->getMessage();
     header("Location: /index.php");
  }

  try {
    $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO profiles (uidUser)
    VALUES ('$last_id')";
    // use exec() because no results are returned
    $conn->exec($sql);
     $_SESSION["message"]["errorLogin"] = "Congrats, you now have an account! Please verify your email address in the email sent to your account."; 
    header("Location: /loginRegister/login.php");
  } catch(PDOException $e) {
         $_SESSION["message"]["errorLogin"] = "Password, username and/or email already exsist". $sql . "<br>" . $e->getMessage();
     header("Location: /loginRegister/login.php");
  }
  $conn = null;








?>