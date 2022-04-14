<?php
    // session_start();
    // function sendCode($myusername,$mypassword){
    //     include("config.php");
    //     $result='';
    //     $code = rand(1000,9999);
    //     $sql = "UPDATE Utilisateurs SET code=".$code.", codeTime=CURRENT_TIMESTAMP() WHERE login = '".$myusername."' and mdp = '".$mypassword."';";
        
    //     if (mysqli_query($db,$sql) === TRUE) {
    //         $result = "success";

    //         $sql = "SELECT mail FROM Utilisateurs WHERE login = '".$myusername."' and mdp = '".$mypassword."';";
    //         $result = mysqli_query($db,$sql);
    //         mysqli_close($db);

    //         if ($result->num_rows >= 1) {
    //             $row = $result->fetch_assoc();
    //             $message = "Votre code est: ".$code." Il n'est valide que 5 minutes";
    //             mail($row['mail'], 'Code LE CHATELET', $message);
    //             $result="success";
                
    //         } else {
    //             $result = "Error: " . $sql . "<br>" . $db->error;
    //         }

            

    //     } else {
    //         $result = "Error: " . $sql . "<br>" . $db->error;
           
    //     }

    //     return $result;
    // }
    

    // include("config.php");
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // username and password sent from form 
    //     $login = $_POST['login'];
    //     $passwd = $_POST['passwd'];

    //     $myusername = mysqli_real_escape_string($db,$login);
    //     $mypassword = mysqli_real_escape_string($db,$passwd); 

    //     $sql = "SELECT id,mail FROM Utilisateurs WHERE login = '".$myusername."' and mdp = '".$mypassword."';";
    //     $result = mysqli_query($db,$sql);
    //     $row = $result->fetch_assoc();

    //     $count = mysqli_num_rows($result);

    //     // If result matched $myusername and $mypassword, table row must be 1 row
    //     if($count == 1) {
    //         $result = "success";
    //         $result=sendCode($myusername,$mypassword);

    //         // $ch = curl_init();
    //         // curl_setopt($ch, CURLOPT_URL, 'https://api.zenlogin.co/v1/applications/appldu2ijb1k1uzk/logins/checks');
    //         // $postData = array();
    //         // $postData['identity_key'] = $row['id'];
    //         // $postData['identity_email_address'] = $row['mail'];
    //         // $postData['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    //         // $postData['ip_address'] = $_SERVER['REMOTE_ADDR'];
    //         // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    //         // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         // 'X_API_SECRET_KEY: sk_live_q0u7d2pwsrfwpcabtqxyjbcptd4hnx2m'
    //         // ));
    //         // $response = curl_exec($ch);
    //         // $response = json_decode($response, true);
    //         // curl_close($ch);


    //         $_SESSION['login']= $myusername;
    //         $_SESSION['mdp']= $mypassword;
    //         echo json_encode($result);
    //     }else {
    //         $result = "error";
    //         echo json_encode($result);
    //     }
    // }
    echo "test";
    
?>