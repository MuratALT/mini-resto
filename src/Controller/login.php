<?php
    if(!isset($_SESSION)) session_start();
    include_once("../Model/user.php");

    if(isset($_POST["submit"])) {
        if(checkUser($_POST["email"], $_POST["password"])) {
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["id"] = getIdByMail($_POST["email"]);
            $_SESSION["user"] = getUserById($_SESSION["id"]);
            header("Location: ../View/home.view.php");
        } else {
            echo "Connexion échouée";
        }
    }

    include_once("../View/login.view.php");
?>