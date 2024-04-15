<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
<li><h3>Poussin</h3> : entre 6 et 7 ans</li>
<li><h3>Pupille</h3> : entre 8 et 9 ans</li>
<li><h3>Minime</h3> : entre 10 et 11 ans</li>
<li><h3>Cadet</h3> : à partir de 12 ans</li>
<li>Si la catégorie n'est pas gérée, merci de le préciser.</li> 
</p>

<h2>Résultat</h2>

<?php

$age = 10;

if(gettype($age) == "integer" || gettype($age) == "double") {
  if($age >= 12) {
      $resultat = "Cadet";
  } elseif($age >= 10) {
      $resultat = "Minime";
  }
    elseif($age >= 8) {
      $resultat = "Pupille";
  }
    elseif($age >= 6) {
      $resultat = "Poussin";
  }
  
echo "L'enfant qui a $age ans appartient à la catégorie $resultat<br>";
  } else {
      echo("Les catégories sont disponibles à partir de 6ans.");
  }
  