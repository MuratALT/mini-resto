<?php
    include_once("../Model/user.php");

    if(isset($_POST["submit"])) {
        addUser($_POST["nom"], $_POST["prenom"], $_POST["date_naissance"], $_POST["email"], $_POST["password"]);
    }

    include_once("../View/register.view.php");
?>