<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');


try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE profiles SET 
      like='".$_POST['like']."',
      dislike='".$_POST['dislike']."'




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

if($_POST['like'] == 1){
  $like= 'true';
}else{
  $like='false';
}
if($_POST['dislike'] == 0){
  $dislike= 'true';
}else{
  $dislike='false';
}

   $_SESSION["userProfile"]["like"]=$like;
    $_SESSION["userProfile"]["dislike"]=$dislike;


header("Location:/home.php?uid=".$_SESSION["user"]["uidUser"]. "");

?>