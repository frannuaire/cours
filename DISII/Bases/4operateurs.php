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
            $prenom = "Kevin";
            $nom = "FERRANDON";
            $age = 37;
            $prez = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans";
            $prez2 = 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai '.$age. ' ans';
            
            
            echo "Je m'appelle " .$prenom. " et j'ai " .$age. " ans <br>";
            echo 'Je m\'appelle ' .$prenom. ' et j\'ai ' .$age. ' ans <br>';
            
            echo $prez. '<br>' .$prez2;

?>
      </div>
      <h2>Les opérateurs arithmétiques</h2>
      <div><?php
            $x = 2;
            $y = 3;
            $z = 4;
            echo '$x stock ' .$x. ', $y stock ' .$y. ', $z stock ' .$z. '<br>';
            
            $a = $x + 1; //$a stock 2 + 1 = 3
            $b = $x + $y; //$b stock 2 + 3 = 5
            $c = $x - $y; //$c stock 2 - 3 = -1
            echo '$a stock ' .$a. ', $b stock ' .$b. ', $c stock ' .$c. '<br>';
            
            $x = $x * $y; //$x stocke désormais 2 * 3 = 6
            echo 'La variable $x stock désormais : ' .$x. '<br>';
            
            $z = $x / $y; //$z stock désormais 6 / 3 = 2
            echo 'La variable $z stock désormais : ' .$z. '<br>';
            
            $m = 5 % 3; //$m stock le reste de la division euclidienne de 5 par 3
            echo 'Le reste de la division euclidienne de 5 par 3 est ' .$m. '<br>';
            
            $p = $z ** 4; //$p stock 2^4 = 2 * 2 * 2 * 2 = 16
            echo 'La variable $p stock le résultat de 2 puissance 4 = ' .$p
      
      ?> </div>
    </body>
</html>
