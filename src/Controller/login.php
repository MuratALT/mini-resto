<?php
    include_once("../Model/user.php");

    if(isset($_POST["submit"])) {
        if(checkUser($_POST["email"], $_POST["password"])) {
            header("Location: ../View/home.view.php");
        } else {
            echo "Connexion échouée";
        }
    }

    include_once("../View/login.view.php");
?>