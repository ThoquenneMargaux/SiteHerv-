<section id="container">
	<div class="bloc bleuF ">
		<h1 class="title-bloc">Le debut des travaux </h1>
		<div class="gallery">
			<div class="mySlides">
				
				<img src="img/La_cabane_a_cochon/014_hd.jpg" style ="width: 300px; height: 200px;" >
				
			</div>
			<div class="mySlides">
				
				<img src="img/Accueil/001_ld.jpg" style ="width: 300px; height: 200px;">
				
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			
		</div>
	</div>
	<div class="bloc bleu">
		<h1 class="title-bloc ">Les compagnons</h1>
		
	</div>
	<div class="bloc turquoise">
		<h1 class="title-bloc ">truc</h1>
		
	</div>
</section>	
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