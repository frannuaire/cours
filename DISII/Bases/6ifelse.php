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
              $x = 4; //On affecte la valeur 4 � $x
            $y = 2; //On affecte la valeur 2 � $y
            
            if($x > 1){
                echo '$x contient une valeur stric. sup�rieure � 1 <br>';
            }elseif($x == 1){
                echo '$x contient la valeur 1 <br>';
            }else{
                echo '$x contient une valeur stric. inf�rieure � 1 <br>';
            }
            
            if($x == $y){
                echo '$x et $y contiennent la m�me valeur <br>';
            }elseif($x < $y){
                echo '$x contient une valeur stric. inf�rieure � $y <br>';
            }elseif($x > $y){
                echo '$x contient une valeur stric. sup�rieure � $y <br>';
            }else{
                echo 'Les valeurs de $x et $y n\'ont pas pu �tre compar�es';
            }
            
            echo ($x==2)? 'x est bien �gal � 2 ': 'Je suis diff�rent de 2';

      ?> </div>
    </body>
</html>
