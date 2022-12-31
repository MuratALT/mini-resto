<?php
    include_once("../connexion.php");
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
        include("../connexion.php");

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

    function getIdByMail($email): int {
        include("../connexion.php");

        $select = "SELECT id FROM UTILISATEUR WHERE mail = :mail";
        
        $res = $db->prepare($select);
        $res->bindValue(":mail", $email);
        $res->execute();

        $user = $res->fetch();

        return $user["id"];
    }

    function getUserById($id): array {
        include("../connexion.php");

        $select = "SELECT * FROM UTILISATEUR WHERE id = :id";
        
        $res = $db->prepare($select);
        $res->bindValue(":id", $id);
        $res->execute();

        $user = $res->fetch();

        return $user;
    }
?>