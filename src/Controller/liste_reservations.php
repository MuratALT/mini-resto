<?php
    include_once("../Model/reservation.php");
    include_once("../Model/table.php");
    include_once("../Model/user.php");

    $reservations = getAllReservations();

    include("../View/liste_reservations.view.php");
?>

