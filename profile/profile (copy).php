<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

if($_SESSION["userProfile"]["view"] !== 1){
  $_SESSION["message"]["errorLogin"] = "Invalid entry. Log in.";
   header("Location: /index.php");
}
  
  if(isset($_SESSION['uidUser'])) {
    // Change login button to logout
  echo '<a href="logout.php">Log Out</a>';

}

  // Logout script
  if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
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
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';?>
        <!-- Masthead-->

        <!-- Services-->


<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 1px;">
          <div class="card-body text-center">
            <div class="mt-1 mb-1">
              <img src=" <?php echo $_SESSION["userProfile"]["profileImg"] ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
            </div>
            <h5> <?php echo $_SESSION["userProfile"]["fName"]." ".$_SESSION["userProfile"]["lName"]?></h5>
            
            <p class="text-muted mb-4">@occupation  <span class="mx-2">|</span> 
              <?php 
              if( $_SESSION["userProfile"]["edit"] == 1){
                echo "<a href='/profile/edit.php'>Edit profile</a>";
              }
                ?>
                <p> <?php $_SESSION["userProfile"]["bio"]?></p>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">Gender</p>
                <p class="text-muted"><?php $_SESSION["userProfile"]["gender"]?></p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">Interest</p>
                <p class="text-muted"> <?php $_SESSION["userProfile"]["interest"]?></p>
              </div>
              <div>
                <p class="mb-2 h5">Age</p>
                <p class="text-muted"> <?php $_SESSION["userProfile"]["age"]?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

  
      
      

       <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
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
