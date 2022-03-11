<!DOCTYPE html>
<html>
    <head>
        <title>Clinique Le CHATELET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="sources/favicon.jpg">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/main.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
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
            <form class="w3-container w3-animate-top" id="loginForm">
                <label for="login">Login</label>
                <input id="login" class="w3-input" type="text">

                <div class="space10"></div>
                <label for="passwd">Password</label>
                <input id="passwd" class="w3-input" type="password">
                <input class="w3-check" type="checkbox" onclick="showPwd()"> Show Password </input>

                <div class="space10"></div>
                <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                <div class="space10"></div>
                <button class="g-recaptcha w3-btn w3-border w3-border-white" 
                    data-sitekey="6Lf8BNAeAAAAAHM4kRwRz1GNaKN_eENB103lKkhr" 
                    data-callback='onLogin' 
                    data-action='submit'>
                    Login
                </button>
            </form>
            <!-- <p class="w3-jumbo w3-animate-top">COMING SOON</p>
            <hr class="w3-border-grey w3-animate-top" style="margin:auto;width:40%">
            <p class="w3-large w3-center w3-animate-top">35 days left</p> -->
        </div>
        <div class="w3-display-bottomleft w3-padding-large">
           Créer par Timothé VALLIER, Cédric MANSART, Lucas VAVON, Anthony CARRER, Loïc BRISON. 
        </div>
    </div>

    </body>
</html>
