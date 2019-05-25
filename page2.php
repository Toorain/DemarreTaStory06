<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Démarre Ta Story 06</title>
        <link rel="stylesheet" href="ressources/styles/style2.css">
        <link rel="author" href="humans.txt">
        <link href="ressources/styles.php" rel="stylesheet" type="text/css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <section id="mainForm">
            <form action="ressources/php/formulaire.php" method="POST">
                <div class="formulaire">
                    <label>Nom/Société <span class="all">*</span> <br> 
                        <input name="Nom" class="nom" type="text" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Prénom <br>
                        <input name="Prenom" class="prenom" type="text">
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Téléphone <span class="all">*</span> <br>
                        <input name="Tel" class="tel" type="tel" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" maxlength="14" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>eMail <span class="all">*</span> <br>
                        <input name="Mail" class="mail" type="email" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Adresse <span class="all">*</span> <br>
                        <input name="Adresse" class="adresse" type="text" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Code Postal <span class="all">*</span> <br>
                        <input name="Cp" class="cp" type="tel" maxlength="5" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Ville <span class="all">*</span> <br>
                        <input name="Ville" class="ville" type="text" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <div class="formulaire">
                    <label>Message : <span class="all">*</span> <br>
                        <input name="Message" class="message" type="textarea" height="200px" required>
                    </label><img src="ressources/img/error.png" alt="error img" class="error"><img src="ressources/img/valid.png" alt="valid img" class="valid">
                </div>
                <section class="buttons-section">
                    <div>
                        <input name="Submit" class="button send" type="submit" value="Envoyer">                
                    </div>
                    <div>
                        <input name="Reset" class="button reset" type="reset" value="Reset">                
                    </div>
                </section>
            </form>
        </section>
        <script src="ressources/js/main2.js"></script>
    </body>
</html>
