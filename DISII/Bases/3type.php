<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>Les types de variable</h2>
        
      <br />
      <div>
              <?php
            $prenom = "Kevin";
            $age = 37; //Stocke le nombre 37
            $age2 = "37"; //Stocke la chaine de caractères "37"
            
           // cast
            $age2=(String) $age ;
            echo gettype($age2);
            
            // transtypage
            $age2=(int) $age2;
            echo gettype($age2);
            $distance = 2.84;
            
            echo "La variable age $age contient une valeur de type ";
            echo gettype($age);
            echo '<br />alors que $age2 est de type ', gettype($age2);
            
            echo "<br>La variable $distance contient une valeur de type ";
            echo gettype($distance);
            
            $vrai=true;
            echo "<br>La variable vrai contient une valeur de type ";
            echo gettype($vrai);
            
            $untableau=Array();
            echo "<br>La variable untableau contient une valeur de type ";
            echo gettype($untableau);
            
            $person = new stdClass();
            $person->nom = "Paul";
            
            echo "<br>La variable person est de type ";
            echo gettype($person);

?>
      </div>
      
      <p>En php les variables ne sont pas typées de se fait une variable de type chaine peu prendre la valeur d'un entier ($prenom) </p>
    </body>
</html>
