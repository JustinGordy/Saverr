<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->

        <!-- Header-->
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
        <!-- Section-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 1px;">
          <div class="card-body text-center">
            <div class="mt-1 mb-1">
              <img src="<?php echo   $_SESSION["userProfile"]["profileImg"]?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />0
            </div>
            <h4 class="mb-2"><?php echo   $_SESSION["userProfile"]["fName"]." ".  $_SESSION["userProfile"]["lName"]; ?></h4>
            <p class="text-muted mb-4">occupation
                         
                <p><?php echo   $_SESSION["userProfile"]["bio"]?></p>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">gender</p>
                <p class="text-muted mb-0">This person's gender is #</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">pronouns</p>
                <p class="text-muted mb-0">This person's pronouns are #</p>
              </div>
              <div>
                <p class="mb-2 h5">Age</p>
                <p class="text-muted mb-0">This person is # years old</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
    </div>
    <div class="carousel-item">
      <section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 1px;">
          <div class="card-body text-center">
            <div class="mt-1 mb-1">
              <img src="<?php echo   $_SESSION["userProfile"]["profileImg"]?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />0
            </div>
            <h4 class="mb-2"><?php echo   $_SESSION["userProfile"]["fName"]." ".  $_SESSION["userProfile"]["lName"]; ?></h4>
            <p class="text-muted mb-4">occupation
              
                <p><?php echo   $_SESSION["userProfile"]["bio"]?></p>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">gender</p>
                <p class="text-muted mb-0">This person's gender is a pickle butter</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">pronouns</p>
                <p class="text-muted mb-0">This person's pronouns are #</p>
              </div>
              <div>
                <p class="mb-2 h5">Age</p>
                <p class="text-muted mb-0">This person is # years old</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
    </div>
    <div class="carousel-item">
      <section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 1px;">
          <div class="card-body text-center">
            <div class="mt-1 mb-1">
              <img src="<?php echo   $_SESSION["userProfile"]["profileImg"]?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />0
            </div>
            <h4 class="mb-2"><?php echo   $_SESSION["userProfile"]["fName"]." ".  $_SESSION["userProfile"]["lName"]; ?></h4>
            <p class="text-muted mb-4">occupation
              
                <p><?php echo   $_SESSION["userProfile"]["bio"]?></p>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">gender</p>
                <p class="text-muted mb-0">This person's gender is a pickle butter</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">pronouns</p>
                <p class="text-muted mb-0">This person's pronouns are #</p>
              </div>
              <div>
                <p class="mb-2 h5">Age</p>
                <p class="text-muted mb-0">This person is # years old</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
