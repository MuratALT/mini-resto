<?php
    include_once("../Model/table.php");

    if(isset($_POST["submit_btn"])) {
        addTable($_POST["name_table"]);
        header("Location: ../Controller/admin_panel.php");
    }

    include("../View/add_table.view.php");
?>