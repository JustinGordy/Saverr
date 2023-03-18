<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

if($_SESSION["userProfile"]["view"] !== 1){
  $_SESSION["message"]["errorLogin"] = "Invalid entry. Log in.";
   header("Location: /index.php");
}
?>
<!doctype html>
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
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';?>
   <div class="container">
     
  <div class="row" id="con">

        
       <?php
        // Create connection
      
       
        $sql = "SELECT users.uidUser, users.username, profiles.bio, profiles.profileImg
            FROM users
            INNER JOIN profiles ON users.uidUser=profiles.uidUser;";
        $result = mysqli_query($conn, $sql);
          //if their is more than 0 rows

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
         
           echo'
  
       <div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
        <img src=" '.$row["profileImg"].'" class="card-img-top" width= "286px" height="150px" >
        <div class="card-body">
            <h5 class="card-title">'. $row["username"].'</h5>
            <p class="card-text">'. $row["bio"].'</p>
            <a href="/redirects/profileRedirect.php?uid='. $row["uidUser"].'" class="btn btn-primary">See Profile</a>

        </div>
    </div>
</div>



       ';     
            



          }
        } else {
          echo "0 results";
        }
       
        mysqli_close($conn);
       
      ?>
   
  </div>

      <div class="row" id="foot">
        <div class="col">
          
        </div>
      </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



