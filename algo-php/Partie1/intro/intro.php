<h1>Introduction PHP</h1>

<?php
//déclaration de variables
$chaineDeCaracteres = "mon texte";  //string
$chaineDeCaracteres2 = "mon prix est très intéressant";//string
$chaineDeCaracteres3 = "mon prix est de";
$entier = 50; //integer
$flottant = 9.99;  //float
$booleen = true;  //booleen (true/false)
$tableau1 = array("texte1", "texte2", "texte3");//array
$tableau2 = ["texte1", "texte2"]; //array
$date = new DateTime(); // programmation orientée objet (poo)

//AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>"; //mon texte
echo $chaineDeCaracteres3." ".$entier." euros<br>"; //mon prix est de 50euros
echo "$chaineDeCaracteres3 $entier euros<br>"; //mon prix est de 50euros

//FONCTIONS CHAINES DE CARACTERES

//compter le nombre de caractères(espaces inclus)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caracteres<br>";

//CONVERTIR UNE CHAINE EN MAJUSCULES
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>"; //prend en compte les caractères accentués

//compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres2);
echo "La phrase contient $nbMots<br>";

//FONCTIONS TABLEAU
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 éléments<br>";
echo "Le tableau 2 contient ".count($tableau2)." élements<br>";

//Accéder à la premiere valeur du tableau
echo$tableau1[0];

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);
echo "La moyenne est $moyenne<br>";

//OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT € <br>";

//AFFICHER le total TTC d'une facture
$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

//RENVOIE LE TYPE DE LA VARIABLE spécifiée en paramètres
echo gettype($tableau1);

var_dump($tableau1);


//STRUCTURES DE CONTROLE

//CONDITIONS (if)

$prenom = "Georges";
$age = 17;

if($age < 18) {
    $resultat = "mineur";
}else {
  $resultat = "majeur";
}
echo "$prenom est $resultat <br>";

//Ternaire
$result = $age >=18 ? "majeur" : "mineur";
echo "$prenom est $result <br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur"). "<br>";

//En fonction de l'age, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    SINON -->Junior
    */

if(gettype($age) == "integer" || gettype($age) == "double") {
if($age >= 30) {
    $resultat = "Senior";
} elseif($age >= 20) {
    $resultat = "Cadet";
} else {
    $resultat = "Junior";
}

echo "La personne qui a $age ans est $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique";
}


/*
      si la valeur est 1 --> OK !
      si la valeur est 0 --> KO!
      sinon afficher "valeur non gérée"
*/

//02:30:56 video