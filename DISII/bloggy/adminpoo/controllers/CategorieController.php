<?php

namespace Mvcdisii;

use Mvcdisii\CategorieModels;

/**
 * Description of CategorieController
 *
 * @author SIO
 */
class CategorieController extends Controllers {

    public function __construct(&$smarty) {
        parent::__construct($smarty);
        $this->model = new CategorieModels();
    }

    /**
     * Récupère toutes les catégories
     * et les envoies à la vue.
     */
    public function listing() {
        $this->smarty->assign('titre', 'Listing categorie');
        $this->smarty->assign('listing', $this->model->listing());
    }

    /**
     * Formulaire d'ajout de categorie
     */
    public function add() {
        $this->smarty->assign('titre', 'Ajout d\'une categorie');
    }

    /**
     * Insertion de la categorie en BDD
     */
    public function create() {
        $this->model->insert();
        header("Location: ./index.php?page=categorie&action=listing");
    }

    /**
     * Suppression d'une categorie
     */
    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: ./index.php?page=categorie&action=listing");
    }

    /**
     * formulaire de modification 
     * d'une categorie
     */
    public function edit() {
        $this->smarty->assign('titre', 'Modification categorie');
        $this->smarty->assign('form', $this->model->edit($_GET['id']));
    }

    /**
     * Modification de la categorie
     */
    public function update() {
        $this->model->update($_POST['idCategories']);
        header("Location: ./index.php?page=categorie&action=listing");
    }

}
