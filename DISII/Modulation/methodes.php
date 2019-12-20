<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>les Méthodes</h2>
        
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



              $x = 0;
               // variable de scope
            function plus2($p){
                $p = $p + 3;
                echo 'Valeur dans la fonction : ' .$p;
            }
            
            plus2($x);
            echo '<br>Valeur en dehors de la fonction : ' .$x;
            
              $x = 0;
               // passage par référence
            function plus3(&$p){
                $p = $p + 3;
                echo 'Valeur dans la fonction : ' .$p;
            }
            
            plus3($x);
            echo '<br>Valeur en dehors de la fonction : ' .$x;            
            

            // parametre par défaut
            function aff($prenom, $role='abonné(e)'){
                echo 'Bonjour ' .$prenom. ' vous êtes un(e) ' .$role. '.<br>';
            }
            
            aff('Mathilde');
            aff('Pierre', 'administrateur');
            
            // on déclare le retour en entier
            function multiple($a, $b): int{
                return $a * $b;
            }
            
            $ret = multiple(2,3);
            echo $ret;

      ?> </div>
    </body>
</html>
