<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PHP - Partie 5, Exercice 7</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
          <h1>Exercice 7</h1>
          <?php 
            //création d'un tableau associatif qui comprend les départements en index et les noms de ces départements en valeur
            $hautsDeFrance[02] = 'Aisne';
            $hautsDeFrance[59] = 'Nord';
            $hautsDeFrance[60] = 'Oise';
            $hautsDeFrance[62] = 'Pas-de-Calais';
            $hautsDeFrance[80] = 'Somme';
            //ajout d'une nouvelle ligne au tableau qui comprend le département de la marne
            $hautsDeFrance[51] = 'Marne';
            //la fonction asort() permet de trier un tableau et donc de replacer la dernière ligne ajoutée (le département 51) au bon endroit
            asort($hautsDeFrance);
            //var_dump() affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.
            var_dump($hautsDeFrance);
          ?>
        </div> 
          <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
          <?php include("../nav/index.php"); ?>
    </body>
</html>