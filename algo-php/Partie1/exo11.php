<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<h2>Résultat</h2>

<?php

$voitures = array("Peugeot", "Renault", "BMW", "Mercedes");
$voitureslen = count($voitures); 
//combien d'éléments dans le tableau

echo "Il y a $voitureslen marques de voitures dans le tableau :<br>";

//boucle tableau
echo "<ul>" ;
    foreach ($voitures as $item) {
        echo "<li>" . $item . "<br>";
    }
echo "</ul>" ;

