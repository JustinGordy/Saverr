<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

 
$sql = "SELECT * FROM users WHERE uidUser = '".$_GET['uid']."' ";
$result = $conn->query($sql);
  foreach($result as $row){
    // $row['username'];

  }

$sqlProfile = "SELECT * FROM profiles WHERE uidUser = '".$_GET['uid']."' ";
$resultProfile = $conn->query($sqlProfile);
  foreach($resultProfile as $rowProfile){
    // $row['username'];

  }



$canView = 0;
$canEdit = 0;

  
if($_SESSION['user']['uidUser'] !=NULL){
  $canView = 1;
  if($_SESSION["user"]["uidUser"]==$_GET['uid']){
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
  $_SESSION["userProfile"]["favx"]= $rowProfile['favx'];
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
 $_SESSION["userProfile"]["gender"]=$gender;
if($rowProfile['pronoun']==0){
  $pronoun="He/Him";
}elseif($rowProfile['pronoun']==1){
   $pronoun="She/Her";
}else{
  $pronoun="They/Them";
}
 $_SESSION["userProfile"]["pronoun"]=$pronoun;

if($rowProfile['age']==0){
  $age="14";
}elseif($rowProfile['age']==1){
   $age="15";
}elseif($rowProfile['age']==2){
  $age="16";
}elseif($rowProfile['age']==3){
  $age="17";
}else{
  $age="18";
}
 $_SESSION["userProfile"]["age"]=$age;

  header("Location: /home.php?uid=".$_SESSION["user"]["uidUser"]."");




?>