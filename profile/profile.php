<?php session_start();
include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');
include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

if($_SESSION["userProfile"]["view"] !== 1){
  $_SESSION["message"]["errorLogin"] = "Invalid entry. Log in.";
   header("Location: /index.php");
}


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <style>
    a:link { 
      text-decoration: none; 
       color:black;
    }
  a:visited { 
    text-decoration: none; 
     color:pink;
  }
    
  a:hover { 
    text-decoration: none;
     color:lightgrey;
  }
  a:active { 
    text-decoration: none; 
    color:white;
  }
  </style> 
    
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
            <p class="text-muted mb-4">@occupation  <span class="mx-2">|</span>
              
              <a href="/profile/edit.php">edit</a></p>
                <p><?php echo   $_SESSION["userProfile"]["bio"]?></p>
            <form>
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              <a href="/message/message.php">Message</a>
            </button>
              </form>
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
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
