<?php

echo "Vous ne devriez voir cette page que si vous &eacute;tes admin.";

$page = isset($_GET['page']) ? $_GET['page'] : 'categorie';
$pages = array('categorie' => 'categorie.php',
    '' => 'categorie.php'
);
$action = (isset($_GET['action']))?$_GET['action']:'listing';
//var_dump($pages[$page]);
if (array_key_exists($page, $pages)) {
    require 'controllers/render.php';
    require('controllers/' . $pages[$page]);
    require('views/vue.php');
}else{
  echo "</br><p style='color:red'>Petit malin!!!</p>";
}

