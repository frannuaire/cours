<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP </title>
        <meta charset="utf-8">
         <link rel="stylesheet" href="php.css">
    </head>
    <body>
      <h1>Cours PHP</h1>
      <h2>les Tableaux</h2>
        
      <br />
      <div>
              <?php
          echo file_get_contents('partage.kf');
            echo '<br><br>';
            
            echo '<pre>';
            print_r(file('partage.kf'));
            echo '</pre>';
            echo '<br><br>';
            
            readfile('partage.kf');
      ?>
    </body>
</html>
