<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
        <?php
        $age=37;
            echo "<br>J'ai ", $age, " ans.<br>";
            $age = $age+1;
            $age += 1;
           
            echo "Demain c'est mon anniversaire j'aurais ",++$age;
        ?>
      <p>++$age va ajouter +1 à la variable age avant de l'afficher<br>
      si j'avais fait $age++, il aurait affiché la variable $age puis apres il aurait rajouté+1
      </p>
      
      <br />
      <div>
              <?php
                          define('TVA10', 10);
                          define('TVA20', 20);
                           define('TVA55', 5.5);
                           echo '<br>La tva dans la restauration est à '.TVA55.'<br> mais l\'alcool est à '. TVA20;
                          
          $prenom = "Pierre";
          $nom = 'dupond';
          $age = 28.5;     // Egal permet l'affectation d'une valeur à une variable.    
          $personne = $prenom. " ".$nom;           
          echo $prenom. " a ". $age. '<br />';
          
          $prenom = 4;
          echo $prenom;
?>
      </div>
      
      <p>En php les variables ne sont pas typées de se fait une variable de type chaine peu prendre la valeur d'un entier ($prenom) </p>
    </body>
</html>
