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
      <div><ul>
              <a href="index.php?page=accueil">Home</a>
              <a href="index.php?page=contact">Contact</a>
              <a href="index.php?page=presentation">presentation</a>
          <?php
          if(!isset($_GET['page'])){
              $page='accueil';
          }else{
              $page=$_GET['page'];
          }
          
          include $page.'.php';
 ?>
              </ul>
      </div>
    </body>
</html>