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