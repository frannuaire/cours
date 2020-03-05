<?php

use Mvcdisii\CategorieModels;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$categorie = new CategorieModels();

switch ($_GET['action']) {
    case 'listing':
      //  $vue['titre'] = 'Listing categorie';
        //   $vue['listing'] = $categorie->listing();
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('log/app.log', Logger::WARNING));

// add records to the log
        $log->warning('acces cat');
      
   //     $smarty->assign('titre', 'Listing categorie');
   //     $smarty->assign('listing', $categorie->listing());
        break;
    case 'edit':
        $vue['titre'] = 'Modification categorie';
        $vue['form'] = edit($_GET['id']);
        break;
    case 'update':
        update($_POST['idCategories']);
        header("Location: ./index.php?page=categorie&action=listing");
        break;
    case 'delete':
        delete($_GET['id']);
        header("Location: ./index.php?page=categorie&action=listing");
        break;
    case 'add':
        $vue['titre'] = 'Ajout d\'une categorie';
        break;
    case 'create':
        insert();
        header("Location: ./index.php?page=categorie&action=listing");
        break;
    default:
        break;
}
