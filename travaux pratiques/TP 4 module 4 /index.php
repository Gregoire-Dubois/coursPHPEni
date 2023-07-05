<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js" defer></script>
    <title>Calcul de TVA</title>
</head>
<body>

<form action="formulaire.php" method="post">
    <fieldset>
        <label for="prixHt"> Prix HT :</label><input type="number" name="prixHt" id="prixHt" required><br>
        <label for="txTva"> Taux de TVA : </label><input type="number" name="txTva" id="txTva" required><br>
        <button class="btnValidate" type="submit" id="btnValidate">Calculer</button>
    </fieldset>

</form>

</body>
</html>
