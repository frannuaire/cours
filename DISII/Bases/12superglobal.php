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
                echo 'Bonjour, ' .$_GET['prenom'];
            }
            elseif(isset($_POST['nom'])){
                echo 'Bonjour,' .$_POST['nom'];
                echo '<br> tu as ' .$_POST['age'];
            }else{
            echo 'Qui êtes vous?';
            }
            
      ?>
      
      <form action="./12superglobal.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
    </body>
</html>
