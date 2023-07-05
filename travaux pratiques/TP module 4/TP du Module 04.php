<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>

    <title>Traitement de formulaire en PHP</title>
</head>
<body>
<h1>Formulaire de traitement HTML à part du fichier PHP</h1>

<form action="FormulairePhp.php" method="post">
    <fieldset>
        <label for="nom">Nom :</label><input type="text" name="nom" id="nom"><br>
        <label for="prenom">prénom :</label><input type="text" name="prenom" id="prenom"><br>
        <label for="adresse">Adresse :</label><input type="text" name="adresse" id="adresse"><br>
        <label for="cp">Code postal :</label><input type="text" name="cp" id="cp"><br>
        <label for="ville">Ville :</label><input type="text" name="ville" id="ville"><br>
        <button class="btnValidate" type="submit" id="btnsubmit">Soumettre</button>
    </fieldset>
</form>
</body>
</html>

