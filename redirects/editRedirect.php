<?php 
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE profiles SET 
      gender='".$_POST['gender']."',
      bio='".$_POST['bio']."' ,
      age='".$_POST['age']."'
   

      WHERE uidUser=".$_SESSION['user']['uidUser']."";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  // echo $sql . "<br>" . $e->getMessage();
}

try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE users SET 
      fName='".$_POST['fName']."',
      lName='".$_POST['lName']."',
      interests='".$_POST['interest']."'

      WHERE uidUser=".$_SESSION['user']['uidUser']."";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  // echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

$_SESSION["userProfile"]["fName"] = $_POST['fName'];
$_SESSION["userProfile"]["lName"] = $_POST['lName'];
$_SESSION["userProfile"]["email"] = $_POST['email'];
$_SESSION["userProfile"]["grade"] = $_POST['grade'];
$_SESSION["userProfile"]["gender"] = $_POST['gender'];
$_SESSION["userProfile"]["interests"] = $_POST['interests'];
$_SESSION["userProfile"]["bio"] = $_POST['bio'];

// Check the value of the gender and set the corresponding variable
if($_POST['gender'] == 0){
  $gender= 'Male' ;
}elseif($_POST['gender'] == 1){
   $gender= 'Female';
}else{
  $gender= 'Nonbinary' ;
}
 $_SESSION["userProfile"]["gender"] = $gender;



if($_POST['age'] == 0){
  $age="14";
}elseif($_POST['age'] == 1){
   $age="15";
}elseif($_POST['age'] == 2){
  $age="16";
}elseif($_POST['age'] == 3){
  $age="17";
}else{
  $age="18";
}
        
 $_SESSION["userProfile"]["age"] = $age;


if (isset($_POST['submit'])) {
  if (isset($_POST['interests'])) {
    $interests = $_POST['interests'];
    $interestsStr = implode(',', $interests); // convert the array to comma-separated string

    // update the database with the new interests
    $userId = $_SESSION["user"]["uidUser"]; // get the user's ID
    $sql = "UPDATE users SET interests='$interestsStr' WHERE id=$userId";
    // execute the SQL statement using your database connection

    $_SESSION["userProfile"]["interests"] = $interestsStr; // update the user's session data
  }
}
// Redirect the user to their profile page
header("Location: /profile/profile.php?uid=" . $_SESSION["user"]["uidUser"]);
exit();


