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

-->  <body>

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
                    <span>Dating </span>
                    <i class="bi-heart brand-icon"></i>
                    <span>Website</span>
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
    </head>
    
    <body>








      


<!-- Add the like/dislike buttons and the profile information in the HTML -->
<section class="about-section section-padding" id="section_2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-12">
        <div class="section-title-wrap mb-5">
          <h2 class="section-title">My Profile</h2>
          <div class="section-title-bottom">
            <span class="section-title-line"></span>
            <i class="section-title-icon bi-heart-fill"></i>
            <span class="section-title-line"></span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="image-hover-thumb">
          <img id="profile-image" src="/web/images/vertical-shot-beautiful-smiling-girl.jpg" class="about-image img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="about-info-wrap d-flex flex-column">
          <div class="about-info-title d-flex align-items-center my-3">
            <h4 id="profile-name">ChatGPT</h4>
            <span class="about-tag ms-2">AI Language Model</span>
          </div>
          <p id="profile-bio">I am ChatGPT, a large language model trained by OpenAI. I was based on the GPT-3.5 architecture and my knowledge cutoff is September 2021.</p>
          <div class="social-icon-wrap mt-auto">
            <ul class="social-icon ms-auto" id="profile-social">
              <li class="social-icon-item"><a href="#" class="social-icon-link bi-facebook"></a></li>
              <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>
              <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>
              <li class="social-icon-item"><a href="#" class="social-icon-link bi-whatsapp"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12 col-12 mt-4">
          <div class="d-flex justify-content-center">
            <button id="like-button" class="btn btn-lg btn-outline-danger mx-2"><i class="bi bi-heart-fill"></i></button>
            <button id="dislike-button" class="btn btn-lg btn-outline-dark mx-2"><i class="bi bi-x-circle-fill"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
// Define a function to show another profile
function showAnotherProfile() {
  // Get a random profile from an array of profiles
  var profiles = [
    {
      name: "John",
      image: "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/78ca9a205c94864ac1f666e0855004c6~c5_720x720.jpeg?x-expires=1679140800&x-signature=DV0X1hVfTYOnfKQFJaF6%2F0AwICE%3D",
      bio: "I love hiking and exploring new places.",
      social: {
        facebook: "https://www.facebook.com/john",
        twitter: "https://www.twitter.com/john",
        instagram: "https://www.instagram.com/john",
        whatsapp: "https://wa.me/1234567890"
      }
    },
    {
      name: "Emily",
      image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7Sp-XFqz0RTLlFXCaytZrKSmSuWRhN1U1iV5M1Vp5zg&usqp=CAU&ec=48600113",
      bio: "I'm a foodie and love trying out new restaurants.",
      social: {
        facebook: "https://www.facebook.com/emily",
        twitter: "https://www.twitter.com/emily",
        instagram: "https://www.instagram.com/emily",
        whatsapp: "https://wa.me/1234567890"
      }
    },
    {
      name: "David",
      image: "https://i.ytimg.com/vi/qFmCXBL_4n8/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGEAgRyh_MA8=&rs=AOn4CLDBBlnvp8WKLkh93MGp00MEmkfRqQ",
      bio: "I enjoy playing sports and staying active.",
      social: {
        facebook: "https://www.facebook.com/david",
        twitter: "https://www.twitter.com/david",
        instagram: "https://www.instagram.com/david",
        whatsapp: "https://wa.me/1234567890"
      }
    }
  ];
  var randomIndex = Math.floor(Math.random() * profiles.length);
  var profile = profiles[randomIndex];

  // Update the profile information in the HTML
  var nameElement = document.getElementById("profile-name");
  nameElement.innerText = profile.name;

  var imageElement = document.getElementById("profile-image");
  imageElement.src = profile.image;

  var bioElement = document.getElementById("profile-bio");
  bioElement.innerText = profile.bio;

  var socialElement = document.getElementById("profile-social");
  socialElement.innerHTML = "";
  for (var key in profile.social) {
    var link = profile.social[key];
    var icon = "bi-" + key;
    var html = '<li class="social-icon-item"><a href="' + link + '" class="social-icon-link ' + icon + '"></a></li>';
    socialElement.innerHTML += html;
  }
}

// Attach event listeners to the like/dislike buttons
var likeButton = document.getElementById("like-button");
likeButton.addEventListener("click", function() {
  showAnotherProfile();
});

var dislikeButton = document.getElementById("dislike-button");
dislikeButton.addEventListener("click", function() {
  showAnotherProfile();
});
</script>


      


         

           


          

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
        </footer>

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
