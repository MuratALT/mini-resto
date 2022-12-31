<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout d'une table</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Ajout d'une table</header>

        <form action="../Controller/add_table.php" method="POST" id="form">
            <fieldset>
                <legend>Informations générales</legend>

                <section>
                    <div>
                        <label for="text">Nom de la table</label>
                        <input type="text" name="name_table" id="name_table" placeholder="Table ronde n°1" required>
                    </div>
                </section>
            </fieldset>

            <input type="submit" id="submit_btn" name="submit_btn" value="Valider" disabled>
        </form>

        <script src="../Controller/JavaScript/add_table.js"></script>
    </body>
</html>