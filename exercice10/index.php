<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PHP - Partie 5, Exercice 10 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
          <h1>Exercice 10</h1>
          <?php 
            //création d'un tableau associatif qui comprend les départements en index et les noms de ces départements en valeur
            $hautsDeFrance[02] = 'Aisne';
            $hautsDeFrance[59] = 'Nord';
            $hautsDeFrance[60] = 'Oise';
            $hautsDeFrance[62] = 'Pas-de-Calais';
            $hautsDeFrance[80] = 'Somme';
            /*la boucle foreach passe en revue chaque ligne du tableau et les place dans une variable temporaire
            La méthode suivante permet autant de récupérer l'indice que la valeur et de les placer tous les deux dans des variables temporaires 
            Notons la similarité de la flêche qu'on utilise dans certains cas pour initialiser un tableau associatif             */
            foreach ($hautsDeFrance as $indice => $elements) {
          ?>
          <!-- Je place l'affichage dans une balise paragraphe pour un meilleur rendu-->
          <p> Le département <?php echo $elements; ?> a le numéro <?php echo $indice; ?></p>
          <?php 
            }
          ?>
        </div>
          <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
          <?php include("../nav/index.php"); ?>
    </body>
</html>