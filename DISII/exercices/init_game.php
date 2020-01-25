<?php
session_start();

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}
$_SESSION['prix'] = rand(0,100000);
$_SESSION['nb_coup']=0;
?>

<form action="jeux.php" method="post">
    Nom<input type="text" name='nom' />
    couleur<input type="color" name='couleur' />
    <button type='submit'>Valider </button>
</form>