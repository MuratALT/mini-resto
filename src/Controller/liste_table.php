<?php
    include_once("../Model/table.php");

    $tables = getAllTables();

    include("../View/liste_table.view.php");
?>