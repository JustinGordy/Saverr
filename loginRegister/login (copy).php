<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


<div class="container">
  <div class="row mt-5">
    <?php 
      if(isset($_SESSION["message"]["errorLogin"])){
        echo'
          <div class="alert alert-danger" role="alert">
          '.$_SESSION["message"]["errorLogin"].'
          </div>
        ';
         unset($_SESSION["message"]["errorLogin"]);
      }

    ?>

    
    <div class="col">
<form action="/redirects/loginRedirect.php" method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name="username" class="form-control" required/>
    <label class="form-label" for="username">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="pword" class="form-control" required />
    <label class="form-label" for="pword">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" value="Submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Don't have an account? <a href="/loginRegister/register.php">Start Today</a></p>
 
</form>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>







    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>