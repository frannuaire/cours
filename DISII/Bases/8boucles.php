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
            echo '<h3>boucle while</h3>';     
            $x = 0;
                 
            while($x <= 10){
                echo '$x contient la valeur ' .$x. '<br>';
                $x++;
            }
        
            echo '<h3>boucle do...while</h3>';
              
            $x = 0;
            $y = 20;
            
            do{
                echo '$x contient la valeur ' .$x. '<br>';
                $x++;
            }while($x <= 5);
            
            do{
                echo '$y contient la valeur ' .$y. '<br>';
                $y++;
            }while($y <= 5);

            echo '<h3>Boucle for</h3>';
            
            for($x = 0; $x <= 5; $x++){    
                echo '$x contient la valeur ' .$x. '<br>';
            }


      ?> </div>
    </body>
</html>
