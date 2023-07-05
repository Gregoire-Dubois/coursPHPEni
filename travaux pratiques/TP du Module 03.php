<?php

/*
Exercice 1
Écrire une classe représentant une ville. Elle doit avoir les méthodes setNom() et setDépartement() et une méthode
affichant « la ville X est dans le département Y ». Cette classe n'a pas de constructeur.
Créer des instances de Ville, affecter leurs propriétés et utiliser la méthode d'affichage.
 *
 */

class Ville
{

    private $nom= '';
    private  $departement= '';

    public function setNom($nom)
    {
        $this -> nom = $nom;
    }

    public function setDepartement($departement)
    {
        $this -> departement = $departement;
    }

    public function __toString()
    {
        return strtolower( $this->nom .' ' .$this->departement);
    }
}

$city = new Ville();
$city -> setNom('Brest');
$city -> setDepartement('Finistère');

echo $city;


$city2 = new Ville();
$city2 -> setNom('Lyon');
$city2 -> setDepartement('Rhône');

echo $city2;

$city3 = new Ville();
$city3 ->setNom('Paris');
$city3 ->setDepartement('Paris');

echo $city3;


/*
Exercice 2
Créer une autre classe représentant une ville mais sans les accesseurs et avec un constructeur à la place.
Réaliser les mêmes opérations de création d'instances et d affichage.
 */

class Ville2{

    protected $nom = '';
    protected $departement = '';

    public function __construct($nom, $departement)
    {
        $this -> nom = $nom;
        $this -> departement = $departement;
    }

    public function __toString(){
        return $this -> nom. ' ' . $this->departement;
    }
}

$cite = new Ville2('Nice', 'Alpes-Maritimes');
echo $cite;


/*
Exercice 3
Créer une classe nommée VilleAvecRegion héritant de la classe Ville affichant « la ville X est dans
le département Y de la région Z ».
 */

class VilleAvecRegion extends Ville2 {

    private $region = '';

    public function __construct($nom, $departement, $region)
    {
        parent::__construct($nom, $departement);
        $this ->region = $region;
    }

    public function __toString()
    {
        return 'La ville ' . $this->nom . ' est dans le département ' . $this->departement . ' de la région ' . $this->region;
    }

}

$annecy = new VilleAvecRegion("Annecy", "Haute Savoie", "c");
echo $annecy;

/*
Exercice 4
Modifier la classe Ville2 avec constructeur pour que l'on puisse connaître la ville ayant le nom le plus long
 */

class Ville3{

    private $ville1 = '';
    private $departement1 = '';

    private $ville2 = '';
    private $departement2 = '';

    public function __construct($ville1, $departement1, $ville2, $departement2 ){

        $this -> ville1 = $ville1;
        $this -> departement1 = $departement1;

        $this -> ville2 = $ville2;

    }

    public function compareSizeNameCity(){

        if (strlen($this->ville1) > strlen($this->ville2)){
            echo 'La ville de ' . $this ->ville1 . ' a un nom plus long que celui de la ville de ' . $this -> ville2;
        }else{
            echo 'La ville de ' . $this ->ville2 . ' a un nom plus long que celui de la ville de ' . $this -> ville1;

        }
    }
}

$compareCitys = new Ville3('Lille', 'nord', ' beauvais', 'oise');
$compareCitys -> compareSizeNameCity();





