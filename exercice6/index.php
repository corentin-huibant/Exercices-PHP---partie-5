<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PHP - Partie 5, Exercice 6 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
          <h1>Exercice 6</h1>
          <?php 
            //création d'un tableau associatif qui comprend les départements en index et les noms de ces départements en valeur
            $hautsDeFrance[02] = 'Aisne';
            $hautsDeFrance[59] = 'Nord';
            $hautsDeFrance[60] = 'Oise';
            $hautsDeFrance[62] = 'Pas-de-Calais';
            $hautsDeFrance[80] = 'Somme';
            //affichage de l'index 59 (soit, le Nord) avec une petite phrase de présentation
            echo 'La valeur de l\'index 59 est le ' . $hautsDeFrance[59];
          ?>
        </div> 
          <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
          <?php include("../nav/index.php"); ?>
    </body>
</html>