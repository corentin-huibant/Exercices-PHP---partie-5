<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PHP - Partie 5, Exercice 8</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
           <h1>Exercice 8</h1>
          <?php 
            //initialisation d'une variable $month qui est égale à un tableau comprenant les douze mois de l'année
            $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            //utilisation de la bouche foreach qui passe en revue chaque ligne du tableau et les place dans une variable temporaire
            foreach ($month as $elements) {
          ?>
           <!-- Je place l'affichage dans une balise paragraphe pour un meilleur rendu-->
           <p><?php echo $elements;?></p>
          <?php
            }
          ?>
        </div> 
          <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
          <?php include("../nav/index.php"); ?>
    </body>
</html>