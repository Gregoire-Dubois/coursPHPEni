<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Résultat du traitement du formulaire en PHP</title>
</head>
<body>
        <h1>Formulaire de traitement HTML à part du fichier PHP</h1>
        <form>
            <fieldset><legend>Résultat du submit</legend>
                <label>Nom : <?php echo $_POST["nom"]; ?></label><br>
                <label>prénom : <?php echo $_POST["prenom"]; ?></label><br>
                <label>adresse : <?php echo $_POST['adresse']; ?></label> <br>
                <label>Code postal : <?php echo $_POST['cp'];?></label><br>
                <label>ville : <?php echo $_POST['ville']; ?></label><br>
                <label>Mail :<?php echo $_POST['email']; ?></label>
                <label>navigateur : <?php echo getenv('HTTP_USER_AGENT'); ?></label>
            </fieldset>
        </form>
</body>
</html>