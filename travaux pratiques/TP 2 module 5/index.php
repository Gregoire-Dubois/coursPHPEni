<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP 2 module 5</title>
</head>
<body>
    <h2>Créer un formulaire permettant l'insertion de nouvelles données dans la table modeles</h2>

    <form action="traitementFormulaire.php" method="post">
        <fieldset><legend>Ajouter un nouveau modèle</legend>
            <label for="identifiant">Identifiant</label>
            <input name="identifiant" id="identifiant" required><br>

            <label for="marque">Marque</label>
            <input name="marque" id="marque" required><br>

            <label for="modele">Modèle</label>
            <input name="modele" id="modele" required><br>

            <div>
                <input type="radio" id="choice1"
                       name="energy" value="essence">
                <label for="choice1">Essence</label>

                <input type="radio" id="choice2"
                       name="energy" value="diesel">
                <label for="choice2">Diesel</label>

                <input type="radio" id="choice3"
                       name="energy" value="electrique">
                <label for="choice3">Electrique</label>

                <input type="radio" id="choice4"
                       name="energy" value="GPL">
                <label for="choice4">GPL</label>
            </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>

        </fieldset>
    </form>
</body>
</html>