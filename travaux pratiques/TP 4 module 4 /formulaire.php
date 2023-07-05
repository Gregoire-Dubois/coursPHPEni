<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Résultat du formulaire</title>
</head>
<body>
    <h1>Résultat TTC</h1>
    <form>
        <fieldset><legend>Résultat du calcul de l'impôt</legend>
            <label>Prix hors taxes : <?php echo $_POST['prixHt'];?></label><br>
            <label>Taux de la TVA : <?php echo $_POST['txTva']; ?></label><br>
            <label>Montant de la TVA : <?php echo $montantTva=($_POST['prixHt'] * $_POST['txTva']) /100; ?></label><br>
            <label>Montant TTC : <?php echo $_POST['prixHt'] + $montantTva;?></label><br>
        </fieldset>

    </form>

</body>
</html>
