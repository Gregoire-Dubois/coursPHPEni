<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification d'une base de données via une page HTML</title>
</head>
<body>

    <h1>Exercice 3</h1>

        <p>Donner la possibilité à un utilisateur de modifier les informations le concernant (données
        présentes dans la table proprietaires ). Il faut bien sûr que l'utilisateur s'authentifie auparavant
        en indiquant son numéro d'identification et son nom de famille.</p>

        <form action="authentification.php" method="post">
            <fieldset>
                <legend>Accédez à vos informations</legend>
                <label>Numéro d'identification :</label><br>
                <input type="number" id="refClient" name="refClient"><br>
                <label>Nom de famille : </label><br>
                <input type="text" id="nom" name="nom"><br>
                <input type="submit" value="Connexion">
            </fieldset>
        </form>

</body>
</html>