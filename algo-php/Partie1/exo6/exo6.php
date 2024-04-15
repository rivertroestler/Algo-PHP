<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$PrixUnitaireArticle = 9.99;
$Quantité = 5;
$TauxTVA = 0.2;
$total = ($TauxTVA * ($PrixUnitaireArticle * $Quantité)) + $PrixUnitaireArticle * $Quantité;
echo("Le montant de la facture à régler est de : $total €");