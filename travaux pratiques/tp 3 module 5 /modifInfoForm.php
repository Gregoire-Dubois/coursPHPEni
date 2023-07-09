<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Modifier vos données personnelles</h1>
    <form action="modificationBdd.php" method="post">
        <fieldset>
            <legend>Modification de vos données</legend>
            <label>Nom de famille : </label><br>
            <input type="text" id="nom" name="nom"><br>

            <label>Prénom : </label><br>
            <input type="text" id="prenom" name="prenom"><br>

            <label>Adresse : </label><br>
            <input type="text" id="adresse" name="adresse"><br>

            <label>Code postal :</label><br>
            <input type="text" id="cp" name="cp"><br>

            <label>Ville : </label>
            <input type="text" id="ville" name="ville"><br>

            <input type="submit" value="Modifier vos données">
        </fieldset>

    </form>

</body>
</html>