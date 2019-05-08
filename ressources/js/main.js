// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

// Retournement des cartes
var cartes = document.getElementsByClassName('flip-card');
var r = 0;
for (var i = 0; i < cartes.length; i++){
	cartes[i].addEventListener('click', function(){
		if (r == 0){
			r = 180;
		} else if (r == 180) {
			r = 0;
		}
		this.firstChild.nextSibling.style.transform = "rotateX(" + r + "deg)";
	});
}