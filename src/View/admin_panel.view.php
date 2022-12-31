<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Admin panel</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_admin">
        <nav>
            <ul>
                <li><a href="../Controller/admin_panel.php">Panel administrateur</a></li>
                <li>Mes réservations</li>
                <li>Réserver une table</li>
            </ul>
        </nav>


        <header>Admin panel</header>

        <section id="section_admin_view">
            <div id="admin_reservation">
                <h1>Réservations</h1>

                <a href="../Controller/liste_reservations.php">Liste des réservations</a>
            </div>

            <div id="admin_tables">
                <h1>Tables</h1>

                <a href="../Controller/liste_table.php">Liste des tables</a>
                <a href="../Controller/add_table.php">Ajouter une table</a>
            </div>
        </section>


    </body>
</html>