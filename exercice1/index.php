<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PHP - Partie 5, Exercice 1 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered"> 
            <h1>Exercice 1</h1>
              <?php 
              //initialisation d'une variable $month qui est égale à un tableau comprenant les douze mois de l'année
              $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
              //var_dump() affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure. 
              var_dump($month);
              ?>
        </div>
              <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
              <?php include("../nav/index.php"); ?>
    </body>
</html>