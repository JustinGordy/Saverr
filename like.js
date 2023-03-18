const likeButton = document.getElementById("like-button");
const dislikeButton = document.getElementById("dislike-button");
const likeCountSpan = document.getElementById("like-count");
const dislikeCountSpan = document.getElementById("dislike-count");

let likeCount = 0;
let dislikeCount = 0;

likeButton.addEventListener("click", function() {
  likeCount++;
  likeCountSpan.innerHTML = likeCount;
});

dislikeButton.addEventListener("click", function() {
  dislikeCount++;
  dislikeCountSpan.innerHTML = dislikeCount;
});
