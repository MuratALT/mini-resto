<?php
    try {
        $db = new PDO('mysql:host=localhost;port=3306;dbname=mini-resto','kali','Murat57',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
    } catch(Exception $exception) {
        echo "Connexion échouée <br/>";
        die($exception->getMessage());
    }
?>