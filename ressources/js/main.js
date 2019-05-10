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