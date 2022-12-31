<?php
    include("../connexion.php");
    function getAllReservations(): array {
        include("../connexion.php");
        $req = "SELECT * FROM RESERVATION";

        $res = $db->prepare($req);

        $res->execute();

        $reservations = $res->fetchAll(PDO::FETCH_ASSOC);

        return $reservations;
    }
?>