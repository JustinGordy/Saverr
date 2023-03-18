<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php'); ?>
<!-- Created & Modified & Implemeneted & Scripted by Eibil Yousibe https://www.youtube.com/@ItzCrqical -->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Wedding Lite - Free Bootstrap 5 HTML Template</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Playfair+Display&display=swap" rel="stylesheet">

        <link href="/web/csss/bootstrap.min.css" rel="stylesheet">

        <link href="/web/csss/bootstrap-icons.css" rel="stylesheet">

        <link href="/web/csss/magnific-popup.css" rel="stylesheet">

        <link href="/web/csss/tooplate-wedding-lite.css" rel="stylesheet">
        
<!--

Tooplate 2131 Wedding Lite

https://www.tooplate.com/view/2131-wedding-lite

Free Bootstrap 5 HTML Template

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                    <span>Bratt</span>
                    <i class="bi-heart brand-icon"></i>
                    <span>Jolie</span>
                </a>

                    <ul class="navbar-nav ms-auto">
                                       <li class="nav-item">
  <a class="nav-link " onclick="location.href='index.php';">Home</a>
</li>
                <li class="nav-item">
  <a class="nav-link " onclick="location.href='about.php';">About</a>
</li>
                <li class="nav-item">
  <a class="nav-link " onclick="location.href='people.php';">Users</a>
</li>
                <li class="nav-item">
  <a class="nav-link" onclick="location.href='profile.php';">Profile</a>
</li>

                    </ul>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero-section d-flex" id="section_1">
                <div class="hero-container container d-flex flex-column justify-content-end">
                    <div class="row h-100">

                        <div class="col-lg-6 col-12 my-auto">
                            <h2>👋 Hi there, You're invited</h2>

                            <h1 class="text-white hero-title mb-4">We're getting married</h1>

                            <p class="text-white mb-2">
                                <i class="bi-check-circle-fill custom-icon me-1"></i>
                                Wedding HTML Template
                            </p>

                            <p class="text-white">
                                <i class="bi-check-circle-fill custom-icon me-1"></i>
                                Bootstrap v5.1.3 Layout
                            </p>

                            <a href="#section_2" class="custom-link custom-btn btn mt-4">Discover More</a>
                        </div>

                        <div class="col-lg-3 col-12 save-the-date-wrap mt-auto ms-lg-auto">
                            <div class="save-the-date-thumb">
                                <h4 class="save-the-date-title">Save the date</h4>

                                <div class="save-the-date-body">
                                    <span class="date">14th October 2024</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        
            <section class="people-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h2 class="section-title">Users</h2>

                                <div class="section-title-bottom">
                                    <span class="section-title-line"></span>
                                    <i class="section-title-icon bi-heart-fill"></i>
                                    <span class="section-title-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-12 me-auto">
                            <nav>
                                <div class="nav nav-tabs flex-lg-column align-items-baseline" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-groomsmen-tab" data-bs-toggle="tab" data-bs-target="#nav-groomsmen" type="button" role="tab" aria-controls="nav-groomsmen" aria-selected="true">
                                        <h3>Male</h3>
                                    </button>

                                    <button class="nav-link" id="nav-bridesmaid-tab" data-bs-toggle="tab" data-bs-target="#nav-bridesmaid" type="button" role="tab" aria-controls="nav-bridesmaid" aria-selected="false">
                                        <h3>Female</h3>
                                    </button>
                                </div>
                            </nav>
                        </div>



                      

                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-groomsmen" role="tabpanel" aria-labelledby="nav-groomsmen-tab">
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

$sql = "SELECT users.uidUser, users.username, profiles.bio, profiles.profileImg, profiles.gender
        FROM users
        INNER JOIN profiles ON users.uidUser=profiles.uidUser
        WHERE users.username LIKE '%$search%'
        OR profiles.bio LIKE '%$search%';";


            $result = mysqli_query($conn, $sql);

            //if there is more than 0 rows
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                 if ($row['gender'] == "1"){
                echo '
                     <div class="col-lg-6 col-12">
                                            <div class="people-thumb image-hover-thumb">
                                                <img src="'.$row["profileImg"].'" width="200px" height="100px" class="people-image img-fluid" alt="">
                                            </div>
                                       </div> 

                                       <div class="col-lg-6 col-12">
                                            <div class="section-block">
                                                <div class="d-flex align-items-center my-3">
                                                    <h4 class="mb-0">'.$row["username"].'</h4>

                                                    <span class="about-tag ms-2">Cousin</span>
                                                </div>

                                                <p>Wedding Lite is free HTML template provided by Tooplate website. It is based on Bootstrap v5.1.3 CSS layout. You are free to use it for your wedding.</p>
                                            </div>
                                       </div> ';
              } }
            } else {
              echo "<p>No results found</p>";
            }


            mysqli_close($conn);
          ?>






                                      

                                 

                                      
                                      

                                      





                                      

                              
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="nav-bridesmaid" role="tabpanel" aria-labelledby="nav-bridesmaid-tab">
                                    <div class="row">



 <?php
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $search = "";

            if(isset($_POST['submit'])){
              $search = $_POST['search'];
            }

$sql = "SELECT users.uidUser, users.username, profiles.bio, profiles.profileImg, profiles.gender
        FROM users
        INNER JOIN profiles ON users.uidUser=profiles.uidUser
        WHERE users.username LIKE '%$search%'
        OR profiles.bio LIKE '%$search%';";


            $result = mysqli_query($conn, $sql);

            //if there is more than 0 rows
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                 if ($row['gender'] == "2"){
                echo '
                     <div class="col-lg-6 col-12">
                                            <div class="people-thumb image-hover-thumb">
                                                <img src="'.$row["profileImg"].'" class="people-image img-fluid" alt="">
                                            </div>
                                       </div> 

                                       <div class="col-lg-6 col-12">
                                            <div class="section-block">
                                                <div class="d-flex align-items-center my-3">
                                                    <h4 class="mb-0">'.$row["username"].'</h4>

                                                    <span class="about-tag ms-2">Cousin</span>
                                                </div>

                                                <p>Wedding Lite is free HTML template provided by Tooplate website. It is based on Bootstrap v5.1.3 CSS layout. You are free to use it for your wedding.</p>
                                            </div>
                                       </div> ';
              } }
            } else {
              echo "<p>No results found</p>";
            }


            mysqli_close($conn);
          ?>




                                      
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </section>

         

           
        </main>

       <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mx-auto">
                        <a href="index.html" class="navbar-brand mx-auto mx-lg-0">
                                   <section class="contact-section section-bg section-padding" id="section_7">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h2 class="section-title">Dating Website</h2>

                                <div class="section-title-bottom">
                                    <span class="section-title-line"></span>
                                    <i class="section-title-icon bi-heart-fill"></i>
                                    <span class="section-title-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <h4 class="mb-4">Visit Us</h4>

                            <p> 5th Avenue at, Central Park S, 
                            <br> New York, NY 10019, United States</p>
                        </div>

                    
              
            </section>
        <!-- JAVASCRIPT FILES -->
        <script src="/web/js/jquery.min.js"></script>
        <script src="/web/js/bootstrap.min.js"></script>
        <script src="/web/js/jquery.sticky.js"></script>
        <script src="/web/js/click-scroll.js"></script>
        <script src="/web/js/jquery.magnific-popup.min.js"></script>
        <script src="/web/js/magnific-popup-options.js"></script>
        <script src="/web/js/custom.js"></script>

    </body>
</html>
<!-- Created & Modified & Implemeneted & Scripted by Eibil Yousibe https://www.youtube.com/@ItzCrqical -->
