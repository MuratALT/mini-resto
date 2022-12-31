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

    function addReservationToUser($id_table, $id_user) {
        include("../connexion.php");
        $req = "INSERT INTO RESERVATION (table_id, user_id) VALUES (:id_table, :id_user)";

        $res = $db->prepare($req);

        $res->bindValue(":id_table", $id_table);
        $res->bindValue(":id_user", $id_user);

        $res->execute();
    }

    function isReserved($id_table): bool {
        include("../connexion.php");
        $req = "SELECT * FROM RESERVATION WHERE table_id = :id_table";

        $res = $db->prepare($req);

        $res->bindValue(":id_table", $id_table);

        $res->execute();

        $reservation = $res->fetch(PDO::FETCH_ASSOC);

        if($reservation) {
            return true;
        } else {
            return false;
        }
    }

    function haveTableForUser($id_user): bool {
        include("../connexion.php");
        $req = "SELECT * FROM RESERVATION WHERE user_id = :id_user";

        $res = $db->prepare($req);

        $res->bindValue(":id_user", $id_user);

        $res->execute();

        $reservation = $res->fetch(PDO::FETCH_ASSOC);

        if($reservation) {
            return true;
        } else {
            return false;
        }
    }

    function getTableIdByUser($id_user): array {
        include("../connexion.php");
        $req = "SELECT table_id FROM RESERVATION WHERE user_id = :id_user";

        $res = $db->prepare($req);

        $res->bindValue(":id_user", $id_user);

        $res->execute();

        $reservation = $res->fetch(PDO::FETCH_ASSOC);

        return $reservation;
    }
?>