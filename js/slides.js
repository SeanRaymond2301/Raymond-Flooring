// 	//I will leave this here, I am going to write one that automatically goes, and loops through as well. I will show my dad both and figure out which one he likes.
// var slideIndex = 1;
// showSlides(slideIndex);
//
// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }
//
// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }
//
// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }
//
function showSlide(n) {
		//Instantiate the variables
	var slides = document.getElementsByClassName("mySlides"),
		curSlide = slides[n],
		dots = document.getElementsByClassName("dot");

		//Begin creating cases for showing cards

		if (n >= 0) {
			curSlide.style.dipsplay = "block";
		}

}