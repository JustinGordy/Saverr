<?php 
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/functions/dbInfo.php');

  if(isset($_SESSION['uidUser'])) {
    // Change login button to logout
  echo '<a href="logout.php">Log Out</a>';

}

  // Logout script
  if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
}
if (isset($_POST['unset_session'])) { // check if unset_session button was clicked
    session_unset(); // unset all session variables
    session_destroy(); // destroy the session
                                     exit(); // stop script execution after redirect
}

echo'

 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/home.php?uid='.$_SESSION["user"]["uidUser"].'">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="/profile/profile.php?uid='.$_SESSION["user"]["uidUser"].'">Profile</a></li> 
                        <li class="nav-item"><a class="nav-link" href="/users.php?uid='.$_SESSION["user"]["uidUser"].'">Users</a></li> 
                        <li class="nav-item"><a class="nav-link" name="unset_session" value="Unset Session" href="/index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>




'


?>