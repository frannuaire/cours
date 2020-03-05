<?php

namespace Mvcdisii;

/**
 * Class Model categorie
 * Gère l'acces aux données de la categorie.
 * @author Disii cci
 */
class CategorieModels extends Models {

    public function __construct() {
        parent::__construct();
        $this->table = 'categories';
    }

    function edit($unId) {
        $sql = 'select *  from categories where idCategories=' . (int) $unId;
        $st = $this->db->prepare($sql);
        $st->execute();
        $catAModifier = $st->fetchAll();
        return $catAModifier[0];
    }

    function update($unId) {
        $sql = "UPDATE categories SET nom = '" . $_POST['nom'] . "' "
                . ", slug= '" . $_POST['slug'] .
                "' WHERE idCategories=" . (int) $unId;
        return $this->db->exec($sql);
    }

    public function delete($unId) {
        $sql = "DELETE FROM categories WHERE idCategories=" . (int) $unId;
        //  var_dump($sql);die;
        return $this->db->exec($sql);
    }

    public function insert() {
        $sql = "INSERT INTO categories (nom, slug)"
                . " values('" . addslashes(htmlspecialchars($_POST['nom'])) .
                "', '" . addslashes(htmlspecialchars($_POST['slug'])) . "')";
        //  var_dump($sql);die;
        return $this->db->exec($sql);
    }

}
