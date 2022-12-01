<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

 
$sql = "SELECT * FROM users WHERE username = '".$_POST['username']."' ";
$result = $conn->query($sql);
 
  foreach($result as $row){
    // $row['username'];
    // $row['password'];


  }

$dbUsername =  $row['username'];
$dbPassword =  $row['password'];

$submittedUsername = $_POST['username'];
$submittedPassword = $_POST['pword'];






if($submittedUsername == $dbUsername && password_verify($submittedPassword, $dbPassword)){
 
    $_SESSION["user"]["uidUser"] = $row['uidUser'];
    $_SESSION["user"]["fName"] = $row['fName'];;
    $_SESSION["user"]["lName"] = $row['lName'];;
    $_SESSION["user"]["username"] = $dbUsername;
    $_SESSION["user"]["email"] = $row['email'];
    unset($_SESSION["message"]["errorLogin"]);

   header("Location: /redirects/profileRedirect.php?uid=".$row['uidUser']);
  // echo '<pre>';
  //   var_dump($_SESSION);
  // echo '</pre>';

}else{

  $_SESSION["message"]["errorLogin"] = "Your username and/or password do not match our records";

  header("Location: /loginRegister/login.php");

}






?>