<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="../assets/styles/index.css">
    </head>

    <body id="body_register">
        <header>Inscription</header>

        <form action="../Controller/register.php" method="POST" id="form">
            <fieldset>
                <legend>Vos informations</legend>

                <section>
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="DUPONT" required>

                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Jean" required>
                    </div>

                    <div>
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" name="date_naissance" id="date_naissance" max="2004-01-01" required>
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="abcd@gmail.com" required>

                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" placeholder="********" required>
                    </div>

                    <input type="submit" id="submit_btn" name="submit" value="S'inscrire" disabled>
                </section>
            </fieldset>
        </form>

        <script src="../Controller/JavaScript/register.js"></script>
    </body>
</html>