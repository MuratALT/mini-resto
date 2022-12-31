<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_home">
        <nav>
            <ul>
                <?php
                    if($role == "U") {
                        echo "<li><a href=\"#\">Panel administrateur</a></li>";
                    }
                ?>
                <li><a href="../Controller/admin_panel.php">Panel administrateur</a></li>
                <li>Mes réservations</li>
                <li><a href="../Controller/user_reserv_table.php">Réserver une table</a></li>
            </ul>
        </nav>


        <header>Accueil</header>

        <section>
            <div>
                <h1>Bienvenue sur le site du resto</h1>
            </div>
        </section>


    </body>
</html>