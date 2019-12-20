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
              //timeStamp
             echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';
            
            //Date
              echo date('d/m/Y'). '<br>';
            echo date('l d m Y h:i:s'). '<br>';
            
            echo gmdate('d-m-Y h:i:s'). '<br>';
            date_default_timezone_set('Europe/Moscow');
            echo date('d-m-Y h:i:s'). '<br>';
            
            /* Par défaut, les dates vont être renvoyées en anglais par la plupart des serveurs. 
            Pour transformer une date en anglais vers du français, 
            nous avons plusieurs solutions mais une est recommandée par les éditeurs du PHP :
            l’utilisation des fonctions setlocale() et strftime().
            */
               echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
      ?>
    </body>
</html>
