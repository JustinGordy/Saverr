<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

if($_SESSION["userProfile"]["view"] !== 1){
  $_SESSION["message"]["errorLogin"] = "Invalid entry. Log in.";
   header("Location: /index.php");
}
?>

<!DOCTYPE html>
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
    <body id="page-top">
        <!-- Navigation-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';?>
          <header> 
          <div class="container">
            </div>
            </header>
              <br>
            <br>
          <br>
        <br>
      <br>
  <div class="container mt-5">
    <div class="row">
      <div class="col-3">
        <form action="" method="post">
          <input type="text" name="search" class="form-control" placeholder="Search...">
          <button type="submit" name="submit" class="btn btn-primary mt-3">Search</button>
        </form>
      </div>
      <div class="col-9">
        <div class="row">
          <?php

            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $search = "";

            if(isset($_POST['submit'])){
              $search = $_POST['search'];
            }

            $sql = "SELECT users.uidUser, users.username, profiles.bio, profiles.profileImg
                    FROM users
                    INNER JOIN profiles ON users.uidUser=profiles.uidUser
                    WHERE users.username LIKE '%$search%'
                    OR profiles.bio LIKE '%$search%';";

            $result = mysqli_query($conn, $sql);

            //if there is more than 0 rows
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-4 mb-3">
                  <div class="card">
                    <img src="'.$row["profileImg"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$row["username"].'</h5>
                      <p class="card-text">'.$row["bio"].'</p>
                      <a href="/redirects/profileRedirect.php?uid='.$row["uidUser"].'" class="btn btn-primary">See Profile</a>
                    </div>
                  </div>
                </div>';
              }
            } else {
              echo "<p>No results found</p>";
            }
   

            mysqli_close($conn);
          ?>
        </div>
      </div>
    </div>
  </div>
             <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
