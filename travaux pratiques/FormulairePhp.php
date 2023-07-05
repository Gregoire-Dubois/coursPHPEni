<html>
<body>

    <h1>Formulaire de traitement HTML à part du fichier PHP</h1>
    <form>
        <fieldset><legend>Résultat du submit</legend>
            <label>Nom : <?php echo $_POST["nom"]; ?></label><br>
           <label>prénom : <?php echo $_POST["prenom"]; ?></label><br>
           <label>adresse : <?php echo $_POST['adresse']; ?></label> <br>
            <label><?php echo $_POST['cp'];?></label> cp : <br>
            <label>ville : <?php echo $_POST['ville']; ?></label><br>
        </fieldset>
    </form>
</body>
</html>