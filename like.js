<!-- Created & Modified & Implemeneted & Scripted by Eibil Yousibe https://www.youtube.com/@ItzCrqical -->

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

  <!-- Created & Modified & Implemeneted & Scripted by Eibil Yousibe https://www.youtube.com/@ItzCrqical -->