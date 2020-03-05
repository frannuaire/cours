<?php
use Mvcdisii\Router;
require __DIR__ . '/vendor/autoload.php';
session_start();

$smarty = new Smarty();
$smarty->assign('titre', 'Titre par defaut');

$route = new Router($smarty);

$vue = $route->affRoute();

$smarty->assign('tpl', $vue);
$smarty->display('index.tpl');
//if($_SESSION['role']=='admin'){
/*$page = isset($_GET['page']) ? $_GET['page'] : 'categorie';

// Routeur (gestion des routes)
$pages = array('categorie' => 'categorie.php',
    'utilisateur' => 'utilisateur.php',
    'article' => 'article.php',
    '' => 'categorie.php'
);
$action = (isset($_GET['action'])) ? $_GET['action'] : 'listing';

  //var_dump($pages[$page]);

if (array_key_exists($page, $pages)) {
    //  require 'controllers/render.php';
    require('controllers/' . $pages[$page]);

    $vue = $page.'/'.$action.'.tpl';
 * 
 */
  
/*} else {
    echo "</br><p style='color:red'>Petit malin erreur 404 !!!</p>";
}*/

/*}else{
    echo "vous n'avez pas le droit d'etre ici bye...";
}*/

