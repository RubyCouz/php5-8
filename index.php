<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
<?php
//création du tableau month
$month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

for ($numero=0; $numero <11 ; $numero++) { // déclaration de la boucle qui parcourent le tableau month
  
echo $month[$numero] . '<br />'; //affichage du tableau
}
?>
    </p>
  </body>
</html>
