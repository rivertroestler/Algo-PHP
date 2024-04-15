<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :</p>

<h2>Résultat</h2>

<?php
//boucle for
$nombre = 8;
echo("Table de $nombre, <br>");     
for ($i = 1; $i <= 10; $i++) {
  echo "\t", $i, " x ", $nombre, " = ", $nombre * $i, "\n <br>";
}


//boucle while
$range = 10;
//combien de fois refaire la boucle
$i = 1;
while($i <= $range) {
  echo "<br>\t", $i, " x ", $nombre, " = ", $i++;
}
