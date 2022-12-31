<?php
    session_start();
    include_once("../Model/reservation.php");
    include_once("../Model/table.php");

    $reservation = getTableIdByUser($_SESSION["user"]["id"]);
    $table = getTableById($reservation["table_id"]);

    include("../View/user_liste_reserv.view.php");
?>

