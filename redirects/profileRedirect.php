<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

 
$sql = "SELECT *
        FROM users
        JOIN profiles ON users.uidUser = profiles.uidUser
        WHERE users.uidUser = '".$_GET['uid']."'";
$result = $conn->query($sql);

 



$canView = 0;
$canEdit = 0;

  
if($_SESSION['user']['uidUser'] != NULL){
  $canView = 1;
  if($_SESSION["user"]["uidUser"] == $_GET['uid']){
    $canEdit = 1;
  }
}else{
  $_SESSION["message"]["errorLogin"] = "You must be logged in to view this page. Login and try again!";

  header("Location: /index.php");

  
}
// echo "Show Profile; Yes Can Edit;$canEdit;";








// echo '<pre>';
//   var_dump($_SESSION);
// echo'</pre>';

  $_SESSION["userProfile"]["view"]= $canView;
  $_SESSION["userProfile"]["edit"]= $canEdit;
  $_SESSION["userProfile"]["fName"]= $row['fName'];
  $_SESSION["userProfile"]["lName"]= $row['lName'];
  $_SESSION["userProfile"]["email"]= $row['email'];
  $_SESSION["userProfile"]["age"]= $rowProfile['age'];
  $_SESSION["userProfile"]["gender"]= $rowProfile['gender'];  
  $_SESSION["userProfile"]["interest"]= $rowProfile['interest']; 
  $_SESSION["userProfile"]["grade"]= $rowProfile['grade'];
  $_SESSION["userProfile"]["bio"]= $rowProfile['bio'];
  $_SESSION["userProfile"]["profileImg"]= $rowProfile['profileImg'];

if($rowProfile['gender']==0){
  $gender="Male";
}elseif($rowProfile['gender']==1){
   $gender="Female";
}else{
  $gender="Nonbinary";
}



if($rowProfile['age'] == 0){
  $age="14";
}elseif($rowProfile['age'] == 1){
   $age="15";
}elseif($rowProfile['age'] == 2){
  $age="16";
}elseif($rowProfile['age'] == 3){
  $age="17";
}else{
  $age="18";
}
 $_SESSION["userProfile"]["age"]=$age;


if (isset($_POST['submit'])) {
  if (isset($_POST['interests'])) {
    $interests = $_POST['interests'];
    $interestsStr = implode(',', $interests); // convert the array to comma-separated string

    $_SESSION["userProfile"]["interest"] = $interestsStr;
  }
}

// Code for displaying the selected interests in the form
$interestsArr = explode(',', $_SESSION["userProfile"]["interest"]); // convert the string to an array
$interestsSet = array_flip($interestsArr); // convert the array to a set for faster lookup


  header("Location: /profile/profile.php?uid=".$_SESSION["user"]["uidUser"]."");




?>