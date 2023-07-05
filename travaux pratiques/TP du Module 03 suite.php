

<?php
/*
* Exercice 5
Créer une classe nommée Form représentant un formulaire HTML.
Le constructeur doit créer le code d en t ête du formulaire
en utilisant les éléments < et < fieldset>. Une méthode setT ext() doit permettre d ajouter une zone de texte.
Une méthode setSubmit() doit permettre d ajouter un bouton d envoi. Les paramètres de ces méthodes doivent correspondre
aux attributs des éléments HTML correspondants.

La méthode getForm() doit retourner tout le code HTML de création du formulaire.
Créer des objets Form et y ajouter deux zones de texte et un bouton d envoi.
Tester l'affichage obtenu.

sécuriser les données avec :
    - htmlspecialchars($str)
    - htmlentities($str)
*/
class FormSimple {

    protected $formulaire;

    public function __construct($nom, $action, $methode = 'POST') {
        $this->formulaire = '<form action="' . $action . '" method="' .
            $methode . '"><fieldset><legend>' . $nom . '</legend>';
    }

    public function setText($label, $nom) {
        $this->formulaire .= '<label for="' . $nom . '">' . $label . ' : </label>';
        $this->formulaire .= '<input id="' . $nom . '" name="' . $nom . '"><br>';
    }

    public function setSubmit($nom) {
        $this->formulaire .= '<input type="submit" name="' . $nom . '" value="' . $nom . '">';
    }

    public function getForm() {
        return $this->formulaire . '</fieldset></form>';
    }
}