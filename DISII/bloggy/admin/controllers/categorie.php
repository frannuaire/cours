<?php

require 'models/categorie.php';

switch ($_GET['action']) {
    case 'listing':
        $vue['titre'] = 'Listing categorie';
        $vue['listing'] = listing();
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
