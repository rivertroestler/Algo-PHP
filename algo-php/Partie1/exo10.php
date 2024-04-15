<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Résultat</h2>

<?php


$aPayer = 152;
$verse = 200;
$reste = ($verse - $aPayer);

echo "Montant à payer: $aPayer €<br>";
echo "Montant versé: $verse €<br>";
echo "Reste a payer: ".$reste."€<br>";

rendu($aPayer, $verse);
function rendu($aPayer, $verse)
{
    $reste = $verse - $aPayer;
    $billet10 = 0 ;
    $billet5 = 0 ;
    $piece2 = 0 ;
    $piece1 = 0 ;

    while ($reste > 0) {
        if ($reste >= 10) {
            $billet10++ ;
            $reste -= 10;
        } elseif ($reste >= 5) {
            $billet5++ ;
            $reste -= 2 ;
        } else {
            $piece1++ ;
            $reste -= 1;
        }
    }

    echo "Rendu de monnaie :<br>";
    echo "$billet10 billets de 10€, $billet5 billet de 5€, $piece2 pièce de 2€, $piece1 pièce de 1";
}

