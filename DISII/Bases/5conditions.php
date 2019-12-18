<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>Les opérateurs sur les chaines (concaténation)</h2>
        
      <br />
      <div>
              <?php
  $x = 4; //On affecte la valeur 4 à $x
            
            /*On compare la valeur contenue dans $x à 4 en valeur.
             *On renvoie le résultat de la comparaison grâce à var_dump()*/
            var_dump($x == 4);
            echo '<br>';
            
            var_dump($x > 7);
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *valeur simplement*/
            var_dump($x == "4");
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *termes de valeur et de type*/
            var_dump($x === "4");
            echo '<br>';
            
            var_dump($x != "4");
            echo '<br>';
            
            var_dump($x !== "4");
            echo '<br>';

      ?> </div>
    </body>
</html>
