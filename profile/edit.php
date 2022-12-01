<!doctype html>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
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

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2">A username that actually works</h4>
            <p class="text-muted mb-4">@student  <span class="mx-2">|</span>
              
               Already editing</p>
            <div class="mb-4 pb-2">
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-facebook-f fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-twitter fa-lg"></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-skype fa-lg"></i>
              </button>
            </div>
            <form>
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              <a href="/profile/profile.php">Save</a>
            </button>
              </form>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">gender</p>
                 <?php echo "
                              <select name='gender'>
                                <option value='0'>Male</option>
                                 <option value='1'>Female</option>
                                 <option value='2'>Nonbinary</option>
                              </select>


                        ";?>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">pronouns</p>
                 <?php echo "
                              <select name='pronouns'>
                                <option value='He/Him'>He/Him</option>
                                 <option value='She/Her'>She/Her</option>
                                 <option value='They/Them'>They/Them</option>
                              </select>


                        ";?>
              </div>
              <div>
                <p class="mb-2 h5">Age</p>
                 <?php echo "
                              <select name='age'>
                                <option value='14'>14</option>
                                 <option value='15'>15</option>
                                 <option value='16'>16</option>
                                 <option value='17'>17</option>
                                 <option value='18'>18</option>
                              </select>


                        ";?>
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
