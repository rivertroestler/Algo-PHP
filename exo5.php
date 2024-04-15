<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$valeurFrancs = 100;
$valeurEuros = $valeurFrancs / 6.55957;
//arrondir à deux décimales
$ArrondiEuros = round($valeurEuros, 2);
echo("Montant en francs: ".$valeurFrancs);
echo("<br> 100 francs = $ArrondiEuros €");