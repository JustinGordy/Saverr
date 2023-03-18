<?php session_start();
  include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');
$target_dir = $_SERVER['DOCUMENT_ROOT']."/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    $profilePicPath = "/uploads/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    // echo $profilePicPath;
   

try {
$conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE profiles SET 
      profileimg='".$profilePicPath."' 
    
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



    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


header("Location: /redirects/profileRedirect.php?uid=".$_SESSION['user']['uidUser']);
?>
