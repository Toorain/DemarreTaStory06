<?php 

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$telephone = $_POST['Tel'];
$mail = $_POST['Mail'];
$adresse = $_POST['Adresse'];
$cp = $_POST['Cp'];
$ville = $_POST['Ville'];
$message = $_POST['Message'];
//$button = $_POST['Button'];
$re = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
$space = '/\s/g';
$retreiveInfo = [];                  				    		
// $send = header('Location: ../index.html');       		

// Colorer en rouge les cases non conformes au formulaire. Le faire en JS potentiellement. 
	    	if (strlen($nom) < 3 && strlen($nom) >= 0) {
	    		echo "Erreur, nom trop court!<br>";	
	    	} else{
	    		$retreiveInfo[] = $nom;
	    	}
	    	if (preg_match('/\d/', $nom)) {
	    		echo "Un nom avec des chiffres, pour vrai ?<br>";
	    	}
	    	if (preg_match('/\d/', $prenom)) { 
	    		echo "Un prénom avec des chiffres, pour vrai ?<br>";
	    	} else{
	    		$retreiveInfo[] = $prenom;
	    	}
	    	if (strlen($adresse) < 3 && strlen($adresse) >= 0) {
	    		echo "error adresse!<br>";
	    	} else{
	    		$retreiveInfo[] = $adresse;
	    	}
	    	if (strlen($ville) < 3 && strlen($ville) >= 0) {
	    		echo "error ville!<br>";
	    	} else{
	    		$retreiveInfo[] = $ville;
	    	}
	    	$te = preg_match($re, $mail);	    	
	    	if ($te == false) {
	    		echo "Merci d'entrer un mail valide<br>";
	    	} else{
	    		$retreiveInfo[] = $mail;
	    	}
	    	$lengthMessage = strlen($message);
	    	if ($lengthMessage < 10) {
	    		echo "Pas assez de mots...<br>";
	    	} else{
	    		$retreiveInfo[] = $message;
	    	}

echo "<pre>";
print_r($retreiveInfo);


