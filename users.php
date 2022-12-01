<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">


    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
  <div class="row" id="nav">
    <div class="col">
      <?php echo "$mainNav"?>
    </div>
  </div>
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
             <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src=" '.$row["profileImg"].'" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">'. $row["username"].'</h5>
                    <p class="card-text">'. $row["fName"].' '. $row["lName"].''. $row["bio"].'</p>
                    <a href="/redirectProfile.php?uid='. $row["uidUser"].'" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
       ';     
            
            
            // echo "username: " . $row["username"]. "<br>";
            // echo "Email: " . $row["email"]. "<br>";
            // echo "Password: " . $row["password"]. "<br>";
            // echo "<hr>";


          }
        } else {
          echo "0 results";
        }
       
        mysqli_close($conn);
       
      ?>
   
  </div>

      <div class="row" id="foot">
        <div class="col">
          Footer
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




