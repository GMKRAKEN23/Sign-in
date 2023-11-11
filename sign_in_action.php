<?php

if(isset($_POST['submit'])){

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $error_Msg = "";

    if(empty($pseudo) || empty($first_name) || empty($last_name) || empty($email) || empty($password)){
        $error_Msg = "Veuillez remplir tout les champs";
    }else{
        if(strlen($pseudo) < 5 || !preg_match('/[0-9]/', $pseudo)){
            $error_Msg = "Pseudo invalide";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_Msg = "Email invalide";
        }elseif(strlen($password) < 8 || !preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password)){
            $error_Msg = "Password invalide";   
        }else{
            $stmt = $con->prepare("INSERT INTO users (pseudo, first_name, last_name, email, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $pseudo, $first_name, $last_name, $email, $password);

            if($stmt->execute()){
                echo "Inscription réussie";
            }else{
                $error_Msg = "Echec lors de l'inscription";
            }

            $stmt->close();
        }
    }

    if(!empty($error_Msg)){
        echo $error_Msg;
    }
}

?>