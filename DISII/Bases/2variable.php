<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
    </head>
    <body>
      <h1>Cours PHP</h1>
        <?php
        $age=37;
            echo "<br>J'ai ", $age, " ans.<br>";
            echo "Demain c'est mon anniversaire j'aurais ",++$age;
        ?>
      <p>++$age va ajouter +1 à la variable age avant de l'afficher<br>
      si j'avais fait $age++, il aurait affiché la variable $age puis apres il aurait rajouté+1
      </p>
    </body>
