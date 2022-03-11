<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];

        $myusername = mysqli_real_escape_string($db,$login);
        $mypassword = mysqli_real_escape_string($db,$passwd); 

        $sql = "SELECT id FROM Utilisateurs WHERE login = '".$myusername."' and mdp = '".$mypassword."';";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        // Clé captcha
        //6LefBNEeAAAAANIqWnvakKdGBh8U-TCBF41XweQ2

        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count == 1) {
            $_SESSION['login_user'] = $myusername;

            header("location: https://www.google.fr/");
        }else {
            $error = "Your Login Name or Password is invalid";
            header("location: ../login.html");
        }
    }
?>