<?php session_start();


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require __DIR__ '/vendor/autoload.php';


// $mail = new PHPMailer(true);

// try {
// 	$mail->SMTPDebug = 2;									
// 	$mail->isSMTP();											
// 	$mail->Host	 = 'smtp.gfg.com;';					
// 	$mail->SMTPAuth = true;							
// 	$mail->Username = 'user@gfg.com';				
// 	$mail->Password = 'password';						
// 	$mail->SMTPSecure = 'tls';							
// 	$mail->Port	 = 587;

// 	$mail->setFrom('from@gfg.com', 'Name');		
// 	$mail->addAddress('receiver1@gfg.com');
// 	$mail->addAddress('receiver2@gfg.com', 'Name');
	
// 	$mail->isHTML(true);								
// 	$mail->Subject = 'Subject';
// 	$mail->Body = 'HTML message body in <b>bold</b> ';
// 	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
// 	$mail->send();
// 	echo "Mail has been sent successfully!";
// } catch (Exception $e) {
// 	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
 ?>



    

    

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
      <div class="row mt-5">
        <div class="col">
         
        </div>
        <div class="col">

          <?php 
            if (isset($_SESSION["message"]["errorLogin"])){
              echo '
                <div class="alert alert-danger" role="alert">
                  '.$_SESSION["message"]["errorLogin"].'
                </div>

              ';
              unset($_SESSION["message"]["errorLogin"]);
              
            }

    // echo '<pre>';
    // var_dump($_SESSION);
    // echo '</pre>';






          ?>





          

    <form action="/redirects/registerRedirect.php" method="post">


            <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" name="username" class="form-control" required/>
        <label class="form-label" for="username">Username</label>
      </div>
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" name="email" class="form-control" required/>
        <label class="form-label" for="email">Email Address</label>
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="pword" class="form-control" required/>
        <label class="form-label" for="pword">Password</label>
      </div>
         <!-- Password reenter -->
      <div class="form-outline mb-4">
        <input type="password" name="pword2" class="form-control" required/>
        <label class="form-label" for="pword2">Verify Password</label>
      </div>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" value = "Submit" >Register</button>
        
      <!-- Register buttons -->
      <div class="text-center">
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>
    
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
    </form>
        </div>
        <div class="col">
         
        </div>
      </div>
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>