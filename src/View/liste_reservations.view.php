<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste des réservations</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Liste des réservations</header>

        <table>
            <thead>
                <tr>
                    <th>Réservations</th>
                    <th colspan="3">Client</th>
                    <th colspan="2">Table</th>
                </tr>

                <tr>
                    <th>N° réservation</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mail</th>
                    <th>Référence de table</th>
                    <th>Libellé de la table</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach ($reservations as $reservation) {
                        $client = getUserById($reservation['user_id']);
                        $table_ronde = getTableById($reservation['table_id']);
                        echo "
                            <tr>
                                <td>". $reservation['num_reserv']."</td>
                                <td>". $client['nom'] ."</td>
                                <td>". $client['prenom'] ."</td>
                                <td>". $client['mail'] ."</td>
                                <td>". $table_ronde['ref'] ."</td>
                                <td>". $table_ronde['libelle'] ."</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>