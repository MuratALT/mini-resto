<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste d'une table</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Liste des tables</header>

        <table>
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Libellé</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($tables as $table) {
                        echo "
                            <tr>
                                <td>" . $table['ref'] . "</td>
                                <td>" . $table['libelle'] . "</td>
                            </tr>";
                        }
                ?>
            </tbody>
        </table>
    </body>
</html>