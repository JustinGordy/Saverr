<?php session_start();
//bootstrap profile https://mdbootstrap.com/docs/standard/extended/profiles/
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

//uidUsers, first, last, email.
  $sql = "SELECT * FROM users WHERE uidUser = '".$_GET['uid']."' ";
  $result = $conn->query($sql);
  foreach($result as $row){
   
  }

//uses UID to get profile values 
  $sqlProfile = "SELECT * FROM profiles WHERE uidUser = '".$_GET['uid']."' ";
  $resultProfile = $conn->query($sqlProfile);
 foreach($resultProfile as $rowProfile){
   
  }

$canView = 0;
$canEdit = 0;

  if($_SESSION['user']['uidUser'] != NULL){
    $canView = 1;

    if($_SESSION['user']['uidUser'] == $_GET['uid']){
      $canEdit = 1;
    }
    
  } else {
    $_SESSION["message"]["errorLogin"] = "try again";
     header("Location: /index.php");
  }

// echo "Yes profile. edit it;$canEdit ";






  $_SESSION["userProfile"]["view"]= $canView;
  $_SESSION["userProfile"]["edit"]= $canEdit;
  $_SESSION["userProfile"]["fName"]= $row['fName'];
  $_SESSION["userProfile"]["lName"]= $row['lName'];
  $_SESSION["userProfile"]["email"]= $row['email'];
  $_SESSION["userProfile"]["favx"]= $rowProfile['favx'];
  $_SESSION["userProfile"]["grade"]= $rowProfile['grade'];
  $_SESSION["userProfile"]["bio"]= $rowProfile['bio'];
  $_SESSION["userProfile"]["profileImg"]= $rowProfile['profileImg'];


    if ($rowProfile['gender'] == 0){
      $gender = 'Male';
    } elseif ($rowProfile['gender'] == 1){
      $gender = 'Female';
    }else {
      $gender = 'Nonbinary';
}
$_SESSION["userProfile"]["gender"] = $gender;


header("Location: /profile/profile.php");
  // echo '<pre>';
  // var_dump($rowProfile);
  // echo '</pre>';

?>