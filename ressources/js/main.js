// Retournement des cartes
var cartes = document.getElementsByClassName('flip-card');
var status;
var r = 0;
for (var i = 0; i < cartes.length; i++){
	cartes[i].addEventListener('click', function(){
		status = this.classList.contains("isreturned");
		if (status === "false"){
			r = 180;
			this.classList.add("isreturned");
		} else{
			r = 0;
			this.classList.remove("isreturned");
		}
		this.firstChild.nextSibling.style.transform = "rotateX(" + r + "deg)";
	});
}

var slides = document.getElementsByClassName("mySlides");  // la div qui contient la dic qui contient img
var slideIndex = 1;
var timer = 3000;
showSlides(slideIndex);

var timedSlider = setInterval(function () {
  slideIndex++;
  showSlides(slideIndex);
}, timer);


// Next/previous controls
function plusSlides(n) {
  clearInterval(timedSlider);

  showSlides(slideIndex += n);

  timedSlider = setInterval(function () {
    slideIndex++;
    showSlides(slideIndex);
  }, timer);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var dots = document.getElementsByClassName("dot");  // la classe des span des points sous les images 
  if (n > slides.length) {
    slideIndex = 1;
  }  // reboot de la variable "n" si "n" est plus grand que le nombre de div>img
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}