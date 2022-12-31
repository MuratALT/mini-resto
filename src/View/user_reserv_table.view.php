<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste des réservations</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Liste des tables disponibles</header>

        <table>
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Libellé</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($tables as $table) {
                        $isreserved = isReserved($table["ref"]);

                        if($isreserved) {
                            echo "
                                <tr style='background-color: green;'>
                                    <td>" . $table['ref'] . "</td>
                                    <td>" . $table['libelle'] . "</td>
                                    <td style='color: black; text-align: center'>
                                        Non disponible
                                    </td>
                                </tr>";
                        } else {
                            echo "
                                <tr>
                                    <td>" . $table['ref'] . "</td>
                                    <td>" . $table['libelle'] . "</td>
                                    <td>
                                        <a id=\"button_reserv\" href='../Controller/user_reserv_table.php?id=".$table["ref"]."'>Réserver</a>
                                    </td>
                                </tr>";
                            }
                        }
                ?>
            </tbody>
        </table>
    </body>
</html>