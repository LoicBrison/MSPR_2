<?php
    session_start();
   
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'sk4m');
    define('DB_PASSWORD', '1894');
    define('DB_DATABASE', 'MSPR_2');
    $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(isset($_POST['code'])){
        $sql = "SELECT code FROM Utilisateurs WHERE login = '".$_SESSION['login']."' and mdp = '".$_SESSION['mdp']."' and codeTime > DATE_SUB(NOW(), INTERVAL 15 MINUTE) ;";
        
        $result =  $db->query($sql);
        if ($result != "") {

            if ($result->num_rows >= 1) {
                // output data of each row
                $row = $result->fetch_assoc();

                if($_POST['code'] == $row['code']){
                    header('location: https://google.com');
                }
                else{
                    header('location: http://localhost');
                }
            }
            else{
                header('location: http://localhost');
            }
        }
    }
?>