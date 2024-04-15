<h1>Exercice4</h1>

<p>Ecrire un algorithme qui permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne"; //phrase
$inverse = strrev($phrase); //inverse la phrase
  $inverse_eclate = str_split($inverse); //éclater la phrase 
  $palindrome = '';
  foreach($inverse_eclate as $valeur){
    $palindrome.= $valeur;
  }
  echo $palindrome;
  if($phrase == $palindrome){ //verifier si la phrase est palindrome
      echo "<br>La phrase « $phrase » est palindrome";
  } else {
        print "<br>Cette phrase n'est pas un palindrome";
}