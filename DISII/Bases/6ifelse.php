<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>Les opÃ©rateurs sur les chaines (concatÃ©nation)</h2>
        
      <br />
      <div>
              <?php
              $x = 4; //On affecte la valeur 4 à $x
            $y = 2; //On affecte la valeur 2 à $y
            
            if($x > 1){
                echo '$x contient une valeur stric. supérieure à 1 <br>';
            }elseif($x == 1){
                echo '$x contient la valeur 1 <br>';
            }else{
                echo '$x contient une valeur stric. inférieure à 1 <br>';
            }
            
            if($x == $y){
                echo '$x et $y contiennent la même valeur <br>';
            }elseif($x < $y){
                echo '$x contient une valeur stric. inférieure à $y <br>';
            }elseif($x > $y){
                echo '$x contient une valeur stric. supérieure à $y <br>';
            }else{
                echo 'Les valeurs de $x et $y n\'ont pas pu être comparées';
            }
            
            echo ($x==2)? 'x est bien égal à 2 ': 'Je suis différent de 2';

      ?> </div>
    </body>
</html>
