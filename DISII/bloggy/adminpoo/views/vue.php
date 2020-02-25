<html>
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>

        <?php include 'menu.php'; ?>

        <div class="content">
            <h1><?= $vue['titre']; ?></h1>

            <?php include(__DIR__.'/'.$page.'/'.$_GET['action'].'.php');  ?>
            <?php // $vue['html']; ?>
       
</div>

<?php include 'script.php'; ?>
</body>
</html>