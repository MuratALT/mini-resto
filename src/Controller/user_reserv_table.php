<?php
    session_start();
    include_once("../Model/reservation.php");
    include_once("../Model/table.php");
    include_once("../Model/user.php");

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $table = getTableById($id);
        $user = getUserById($_SESSION["id"]);
        if(haveTableForUser($user["id"])) {
            echo "<p style=\"background-color: red; text-align: center; padding: 10px\">Vous avez déjà réservé une table</p>";
        } else {
            addReservationToUser($table["ref"], $user["id"]);
            echo "<p style=\"background-color: green; color: white; text-align: center; padding: 10px;\">Vous avez réservé la table : <strong>" . $table["libelle"] . "</strong></p>";
        }
    }

    $tables = getAllTables();

    include("../View/user_reserv_table.view.php");
?>

