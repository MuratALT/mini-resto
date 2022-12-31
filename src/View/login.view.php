<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Connexion</header>

        <form action="../Controller/login.php" method="POST" id="form">
            <fieldset>
                <legend>Vos informations</legend>

                <section>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="abcd@gmail.com" required>

                        <br />

                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" placeholder="********" required>
                    </div>
                </section>
            </fieldset>

            <input type="submit" id="submit_btn" name="submit" value="S'inscrire" disabled>
        </form>

        <script src="../Controller/JavaScript/login.js"></script>
    </body>
</html>