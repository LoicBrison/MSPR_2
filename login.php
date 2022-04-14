<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Clinique Le CHATELET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="sources/favicon.jpg">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="css/style.css">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </head>
    <body>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
            <img src="sources/logo.png"  width="150" height="150">
        </div>
        <div class="w3-display-topmiddle w3-center tittle">
            <hr class="w3-border-grey w3-animate-top" style="margin:auto;width:90%">
            <h1>Bienvenue sur le portail de la clinique</h1>
            <h1>LE CHATELET</h1>
            <hr class="w3-border-grey w3-animate-top" style="margin:auto;width:90%">
        </div>
        <div class="w3-display-middle login">
            <form class="w3-container w3-animate-top" id="loginForm" action="./php/loginScript.php" method="POST" >
                <p id="warning" style="color: red;"></p>
                <label for="login">Identifiant</label>
                <input id="login" name="login" class="w3-input" type="text" required>

                <div class="space10"></div>
                <label for="passwd">Mot de passe</label>
                <input id="passwd" name="passwd" class="w3-input" type="password" required>
                <input class="w3-check" type="checkbox" onclick="showPwd()"> Montrer le mot de passe </input>

                <div class="space10"></div>
                <div id="g-recaptcha-error" class="g-recaptcha-error" style="color:red;"></div>
                <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LefBNEeAAAAAIPBJoV70qh8s3-_tC4w3ctxrMsT"  data-callback="verifyCaptcha"></div>

                <div class="space10"></div>
                <input class="w3-btn w3-border w3-border-white" type="button" onclick="checkRecaptcha()" value="Connexion" ></input>
            </form>
            <form class="w3-container w3-animate-top" id="authForm" action="./php/2oAuth.php" method="POST" hidden>
                <p id="warningCode">Un code vous à était envoyé par mail, valide 15 min.</p>

                <div class="space10"></div>
                <label for="code">Code</label>
                <input id="code" name="code" class="w3-input" type="password" required>

                <div class="space10"></div>
                <input class="w3-btn w3-border w3-border-white" type="submit" value="Connexion" ></input>
            </form>
        </div>
        <div class="w3-display-bottomleft w3-padding-large">
           Créer par Timothé VALLIER, Cédric MANSART, Lucas VAVON, Anthony CARRER, Loïc BRISON. 
        </div>
    </div>

    </body>
</html>
