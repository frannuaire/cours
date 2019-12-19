<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>les boucles</h2>
        
      <br />
      <div>
              <?php
  
            $prenom = 'DISII';
            $x = 4;
            $y = 5;
            
            function bonjour($p){
                echo 'Bonjour ' .$p. '<br>';
            }
            
            function addition($p1, $p2){
            return ($p1 + $p2);
              //  echo $p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
            }
            
            bonjour($prenom);
            bonjour('Mathilde');
            $res = addition($x, $y);
            echo $x. ' + '. $y.' = '. $res;
            
            echo addition(1, 1);



      ?> </div>
    </body>
</html>
