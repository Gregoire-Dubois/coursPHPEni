<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de redirection</title>
</head>
<body>
    <p>Dans la perspective de la création d un site d une agence immobilière, créer un formulaire
        comprenant trois boutons de soumission nommés « Acheter », « Vendre » et « Louer ».
        En fonction du choix effectué par le visiteur, le rediriger vers la page spécialisée
        correspondante.</p>
        <p>Cet exercice est là pour apprendre à maîtriser les formulaires et les redirections. Dans «
        la vraie vie », il serait préférable d utiliser une balise de lien hypertexte.</p>

    <form action="formulaire.php" method="post">
        <fieldset>
            <button class="achat" type="submit" name="choix" value="Acheter" id="achat">Acheter</button>
            <button class="vente" type="submit" name="choix" value="Vendre" id="vente">Vendre</button>
            <button class="loc" type="submit" name="choix" value="Louer" id="loc">Louer</button>
        </fieldset>
    </form>
</body>
</html>
