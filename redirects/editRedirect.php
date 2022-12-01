<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');


try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE profiles SET 
gender='".$_POST['gender']."',
grade='".$_POST['grade']."',
bio='".$_POST['bio']."',
favx='".$_POST['favx']."'

WHERE uidUser=".$_SESSION['user']['uidUser']."";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE users SET 
fName='".$_POST['fName']."',
lName='".$_POST['lName']."',
email='".$_POST['email']."'


WHERE uidUser=".$_SESSION['user']['uidUser']."";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}




$conn = null;


  $_SESSION["userProfile"]["fName"]= $_POST['fName'];
  $_SESSION["userProfile"]["lName"]= $_POST['lName'];
  $_SESSION["userProfile"]["email"]= $_POST['email'];
  $_SESSION["userProfile"]["favx"]= $_POST['favx'];
  $_SESSION["userProfile"]["grade"]= $_POST['grade'];
  $_SESSION["userProfile"]["bio"]= $_POST['bio'];

if($_POST['gender']==0){
  $gender="Male";
}elseif($_POST['gender']==1){
   $gender="Female";
}else{
  $gender="Nonbinary";
}
 $_SESSION["userProfile"]["gender"]=$gender;



header("Location: /profile/profile.php");
// echo '<pre>';
// var_dump($_SESSION);
// echo'</pre>';
?>