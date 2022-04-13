<?php
    session_start();
   
    include("config.php");

    if(isset($_POST['code'])){
        $sql = "SELECT code FROM Utilisateurs WHERE login = '".$_SESSION['login']."' and mdp = '".$_SESSION['mdp']."' and codeTime > DATE_SUB(NOW(), INTERVAL 15 MINUTE) ;";
        
        $result =  $db->query($sql);
        if ($result != "") {

            if ($result->num_rows >= 1) {
                // output data of each row
                $row = $result->fetch_assoc();

                if($_POST['code'] == $row['code']){
                    header('location: https://localhost/index.html');
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
    $db->close();
?>