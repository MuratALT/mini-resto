<?php
    function addUser($nom, $prenom, $date_naissance, $email, $password) {
        include_once("../connexion.php");
        $req = "INSERT INTO UTILISATEUR (nom, prenom, date_naissance, mail, password) VALUES (:nom, :prenom, :date_naissance, :mail, :password)";

        $res = $db->prepare($req);

        $res->bindValue(":nom", strtoupper($nom));
        $res->bindValue(":prenom", ucfirst($prenom));
        $res->bindValue(":date_naissance", $date_naissance);
        $res->bindValue(":mail", $email);
        $res->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));

        $res->execute();
    }
?>