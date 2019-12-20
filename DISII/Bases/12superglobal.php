<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>les supperglobales</h2>
        
      <br />
      <div>
              <?php
if(isset($_GET['prenom'])){
                echo 'Bonjour,' .$_GET['prenom'];
            }
            else{
            echo 'Qui êtes vous?';
            }
      ?>
    </body>
</html>
