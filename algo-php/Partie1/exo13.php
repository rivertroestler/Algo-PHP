<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php
//tableau des notes
$notes = array(10, 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9 );
//tableau converti en chaine 
$strNotes = implode(", ", $notes);

//calcul moyenne
$nbNotes = count($notes);
$sumNotes = array_sum($notes);
$moyenne = round($sumNotes / $nbNotes, 2);

echo "Les notes obtenues par l'élève sont :" . $strNotes . "<br>";
echo "Sa moyenne générale est donc de : $moyenne" ;
