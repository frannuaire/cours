<?php
session_start();

if (isset($_POST['nom'])) {
    $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
    setcookie('couleur', $_POST['couleur']);
}
?>
<html>
    <body style='background-color:<?php echo $_COOKIE['couleur']; ?>' >
        Bonjour <?= $_SESSION['nom']; ?>
        <?php
        echo 'prix de la vitrine : ' . $_SESSION['prix'];
   
        $msg = '';
        if (isset($_POST['prix'])) {
            if (!empty($_POST['prix'])) {
     echo '<br />nombre de coups : ' . ++$_SESSION['nb_coup'];
                if ($_POST['prix'] > $_SESSION['prix']) {
                    $msg = 'Le prix de la vitrine est moins cher que ça...';
                } elseif ($_POST['prix'] < $_SESSION['prix']) {
                    $msg = 'Le prix de la vitrine est plus cher que ça...';
                } else {
                    $msg = 'Bravo';
                    header("Location: init_game.php?msg=".$msg);
                }
            }
        }
        ?>
        <strong><?= $msg ?></strong>
        <form action='' method='post'>
            <input type='number' name='prix'>
            <button type='submit'>Valider</button>
        </form>


    </body>
</html>

