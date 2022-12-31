<?php
    include_once("../connexion.php");
    function addTable($name): void {
        include("../connexion.php");
        $req = "INSERT INTO TABLE_ROND (libelle) VALUES (:name)";

        $res = $db->prepare($req);

        $res->bindValue(":name", $name);

        $res->execute();
    }

    function getAllTables(): array {
        include("../connexion.php");
        $req = "SELECT * FROM TABLE_ROND";

        $res = $db->prepare($req);

        $res->execute();

        $tables = $res->fetchAll(PDO::FETCH_ASSOC);

        return $tables;
    }

    function getTableById($id): array {
        include("../connexion.php");
        $req = "SELECT * FROM TABLE_ROND WHERE ref = :id";

        $res = $db->prepare($req);

        $res->bindValue(":id", $id);

        $res->execute();

        $table = $res->fetch(PDO::FETCH_ASSOC);

        return $table;
    }
?>