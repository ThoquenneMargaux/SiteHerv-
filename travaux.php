<?php


include("head.php");
include("header.php");
include("nav.php");



?>
<div class="gallery">
    <div class="mySlides">
		<div class="numbertext">1 / 6</div>
		  <img src="img/image.jpg" >
	</div>
	<div class="mySlides">
		<div class="numbertext">2 / 6</div>
		  <img src="img/images.jpg" >
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	<div class="row">
		<div class="column">
		  <img class="demo cursor" src="img/image.jpg"  onclick="currentSlide(1)" alt="The Woods">
		</div>
		<div class="column"> 
		  <img class="demo cursor" src="img/images.jpg"  onclick="currentSlide(2)" alt="Cinque Terre">
		</div>
	</div>
</div>
<script>
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>