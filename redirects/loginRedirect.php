<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

// Use prepared statements to avoid SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $_POST['uname']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $dbUsername =  $row['username'];
    $dbPassword =  $row['password'];

    $submittedUsername = $_POST['uname'];
    $submittedPassword = $_POST['pword'];

    if ($submittedUsername == $dbUsername && password_verify($submittedPassword, $dbPassword)){
        $_SESSION["user"]["uidUser"] = $row['uidUser'];
        $_SESSION["user"]["fName"] = $row['fName'];;
        $_SESSION["user"]["lName"] = $row['lName'];;
        $_SESSION["user"]["username"] = $dbUsername;
        $_SESSION["user"]["email"] = $row['email'];
        unset($_SESSION["message"]["errorLogin"]);

        header("Location: /redirects/profileRedirect.php?uid=".$row['uidUser']);
    } else {
        $_SESSION["message"]["errorLogin"] = "Your username and/or password do not match our records";
        header("Location: /login.php");
    }
} else {
    $_SESSION["message"]["errorLogin"] = "Your username and/or password do not match our records";
    header("Location: /login.php");
}

$stmt->close();
$conn->close();
?>
