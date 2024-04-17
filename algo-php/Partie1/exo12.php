<h1>Exercice 12<h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br>
<h3>Exemple :<h3>
tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG <p>

<?php

// tableau associatif

$prenoms = array(
    "FRA" => "Mickaël",
    "ESP" => "Virgile" ,
    "ENG" => "Marie-Claire"
);

//tableau "bonjour"
$bonjour = array(
    "FRA" => "Salut",
    "ESP" => "Hola",
    "ENG" => "Hello"
);

//convertir le tableau des prenoms en chaine
$strPrenoms = implode(", ", $prenoms);

//print des prénoms
foreach ($bonjour as $key => $item) {
    echo $item . " " ;
        while ($prenom = current($prenoms)) {
            if ($prenom == 'FRA') {
                echo key($prenoms), "<br>";
        }
        next($prenoms);
};
}

//foreach ($prenoms as $key => $value) {
//    echo 
//}