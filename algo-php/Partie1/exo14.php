<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

//DATE COURANTE; tableau associatif (années, mois, jours)
$dateCourante = array(
    "ANNEE" => 2024 ,
    "MOIS" => 04 / 12 ,
    "JOUR" => 16 / 30.5
);

//DATE DE NAISSANCE
$dateNaissance = array(
    "ANNEE" => 1985 ,
    "MOIS" => 01 / 12 ,
    "JOUR" => 17 / 30.5
);

//age
$ageAnnees = $dateCourante["ANNEE"] - $dateNaissance["ANNEE"];
$ageMois = ($dateCourante["MOIS"] - $dateNaissance["MOIS"]) * 12;
$ageJour = ($dateCourante["JOUR"] - $dateNaissance["JOUR"]) * 30.5;
        if ( $dateCourante["JOUR"] < 1){
            
        }

echo "Age de la personne : $ageAnnees ans $ageMois mois $ageJour jours";

if (condition) {
    # code...
}