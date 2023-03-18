<?php session_start();
session_destroy();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');
header("Location: login.php");
?>
