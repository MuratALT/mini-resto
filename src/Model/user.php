<?php
    function addUser($nom, $prenom, $date_naissance, $email, $password): void {
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

    function checkUser($email, $password): bool {
        include_once("../connexion.php");

        $select = "SELECT * FROM UTILISATEUR WHERE mail = :mail";
        
        $res = $db->prepare($select);
        $res->bindValue(":mail", $email);
        $res->execute();

        $user = $res->fetch();

        $password_same = password_verify($password, $user["password"]);

        if($password_same) {
            return true;
        } else {
            return false;
        }
    }
?>