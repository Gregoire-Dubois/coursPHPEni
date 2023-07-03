<?php
// exercice 1

/*
 Déclarer 4 variables ayant pour valeur true , 42 , 12.34 et 'Hello
Afficher
le type et la valeur de ces variables
 */

$a1 = true;
$b1 = 42;
$c1 = 12.34;
$d1 = 'Hello';


var_dump($a1);

echo $b1;
var_dump($b1);

echo $c1;
var_dump($c1);

echo $d1;
var_dump($d1);


// exercice 2

/*
Donner les valeurs de $x , $y , $z à la fin du script suivant (sans l exécuter !).

<?php
$x = " PostgreSQL";
$y = " MySQL";
$z = &$x ;
$x = "PHP 5";
$y = &$x
 *
 */

$x = " PostgreSQL"; // " PostgreSQL"
echo $x;
$y = " MySQL"; // " MySQL"
echo $y;

$z = &$x ; // z === " PostgreSQL"
echo $z;

$x = "PHP 5 "; // "PHP 5"
echo $x;

$y = &$x; // y === "PHP 5"
echo $y;


// exercice 3
//Donner la valeur booléenne des variables : $a , $b , $c , $d , $e et $f
/*
<?php
$a = " 0";
$b = " TRUE";
$c = FALSE ;
$d = (($a OR $b );
$e = (($a AND $c );
$f = (($a XOR $b
 */

$a2 = " 0"; // false
$b2 = " TRUE"; // true
$c2 = FALSE ; // false
$d2 = (($a2 OR $b2 )); // true
echo $d2;
$e = (($a2 AND $c2 )); // false
echo $e;
$f2 = (($a2 XOR $b2)); //true
echo $f2;

// exercice 4

/*
Donner le type et la valeur de chacune des variables pendant et à la fin du script suivant Vérifier ensuite vos
réponses en modifiant le script.
<?php
$X = " PHP7";
$A = &&$X ;
$Y = 7 eme version de PHP"PHP";
$Z = $Y 10 ;
$X = $Y $Y

 */

$X = " PHP7"; //" PHP7"
$A = &$X; // " PHP7"
$Y = '7 eme version de PHP'; // '7 eme version de PHP'
$Z = $Y * 10; // '7 eme version de PHP' * 10 --> mpossible
$X = $Y * $Y; //'7 eme version de PHP' * '7 eme version de PHP' --> impossible