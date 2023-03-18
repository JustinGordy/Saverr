<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

// Fetch all user profiles except for the logged-in user in a random order
$query = "SELECT * FROM `users` WHERE `uidUser` != '".$_SESSION['user']['uidUser']."' ORDER BY RAND()";
$result = mysqli_query($conn, $query);
$query2 = "SELECT * FROM `profiles` WHERE `uidUser` != '".$_SESSION['user']['uidUser']."' ORDER BY RAND()";
$result2 = mysqli_query($conn, $query2);


?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Buddies </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top" >
    <!-- Navigation-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';?>
    <!-- Masthead-->

    <?php
    // Loop through all user profiles and display them
    while ($row = mysqli_fetch_assoc($result) && $row2 = mysqli_fetch_assoc($result2)) {
        echo '
            <div class="card-body text-center">
                <div class="mt-5 mb-1">
                    <img src="'.$row2['profileImg'].'" alt="Avatar" class="img-fluid my-5" style="width: 120px;" />
                </div>
                <h5> '.$row['fName'].' '.$row['lName'].'</h5>
                <p> '.$row['bio'].'</p>
                <form action="/redirects/likeRedirect.php" method="post">
                    <input type="hidden" name="profileId" value="'.$row['id'].'">
                    <button type="submit" name="like" value="1" class="btn btn-success"><i class="far fa-thumbs-up"></i></button>
                    <button type="submit" name="like" value="0" class="btn btn-danger"><i class="far fa-thumbs-down"></i></button>
                </form>
                <div class="d-flex justify-content-between text-center mt-5 mb-2">
                    <div>
                        <p class="mb-2 h5">Gender</p>
                        <p class="text-muted"> '.($row2['gender'] == 0 ? "male" : ($row2['gender'] == 1 ? "female" : "other")).'</p>
                    </div>
                    <div class="px-3">
                        <p class="mb-2 h5">Age</p>
            <p class="text-muted"> '.($row2['age'] == 0 ? "14" : ($row2['age'] == 2 ? "15" : ($row2['age'] == 3 ? "16" : ($row2['age'] == 4 ? "17" : "18")))).'</p>                        
                          </div>
                          <div>
                          <p class="mb-2 h5">Intrest</p>
                          <p class="text-muted"> '.$row['location'].'</p>
                          </div>
                          </div>
                          </div>
                          <hr class="my-5">
                          ';
    }
    ?>
    <!-- Footer-->
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';?>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" crossorigin="anonymous"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
