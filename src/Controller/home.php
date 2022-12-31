<?php
    session_start();
    include_once("../Model/user.php");
    $user = getUserById($_SESSION["id"]);
    var_dump($_SESSION);
    $role = $user["role"];

    include_once("../View/home.view.php");
?>