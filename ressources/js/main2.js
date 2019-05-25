$(document).ready(function(){

    var nom = $('.nom'),
        prenom = $('.prenom'),
        telephone = $('.telephone'),
        mail = $('.mail'),
        adresse = $('.adresse'),
        cp = $('.cp'),
        ville = $('.ville'),
        message = $('.message'),
        button = $('.button'),
        re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        space = /\s/g;        
        
        	$('.send').click(function(event) {        				    	
	    	if (nom.val().length < 3 && nom.val().length >= 0) {
	    		// alert("error nom!");
	    	}
	    	if (nom.val().match(/\d/)) {
	    		// alert("Un nom avec des chiffres, pour vrai ?");
	    	}
	    	if (prenom.val().match(/\d/)) {
	    		// alert("Un prénom avec des chiffres, pour vrai ?");
	    	}
	    	if (adresse.val().length < 3 && adresse.val().length >= 0) {
	    		// alert("error adresse!");
	    	}
	    	if (ville.val().length < 3 && ville.val().length >= 0) {
	    		// alert("error ville!");
	    	}
	    	var te = re.test(mail.val());	    	
	    	if (te == false) {
	    		// alert("Merci d'entrer un mail valide");
	    	} 
	    	var lengthMessage = message.val().length;
	    	console.log(lengthMessage);
	    	if (lengthMessage < 10) {
	    		// alert("Pas assez de mots...");
	    	} else if (message.val().match(space).length < 2) {
	    		// alert("Pas assez de mot ENCULE");
	    	}
        });
               
});

