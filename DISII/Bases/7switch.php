<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>Selon cas (Switch)</h2>
        
      <br />
      <div>
              <?php
            $x = 2; 
            
            switch($x){
                case 0:
                    echo '$x stock la valeur 0';
                    break;
                case 1:
                    echo '$x stock la valeur 1';
                    break;
                case 2:
                    echo '$x stock la valeur 2';
                    break;
                case 3:
                    echo '$x stock la valeur 3';
                    break;
                case 4:
                    echo '$x stock la valeur 4';
                    break;
                default:
                    echo '$x ne stock pas de valeur entre 0 et 4';
            }
      ?> </div>
    </body>
</html>
