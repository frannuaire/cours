<?php
namespace Mvcdisii;

/**
 * Class Model categorie
 * Gère l'acces aux données de la categorie.
 * @author Disii cci
 */
class CategorieModels {
    /**
     * Instance de PDO
     * @var PDO 
     */
    private $db;
    /**
     * Constructeur 
     */
    public function __construct(){
        $this->db = $this->connection();
    }
    
    /**
     * Connection à la bdd avec PDO
     * @return \PDO
     */
    public function connection() {
        try {
            return new \PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     * Retourne le tableau des categories
     * @return Array
     */
    public function listing() {     
        $sql = 'select *  from categories';
        return $this->db->query($sql, \PDO::FETCH_ASSOC);
    }

    function edit($unId) {
        $db = connection();
        $sql = 'select *  from categories where idCategories=' . (int) $unId;
        $st = $db->prepare($sql);
        $st->execute();
        $catAModifier = $st->fetchAll();
        return $catAModifier[0];
    }

    function update($unId) {
        $db = connection();
        $sql = "UPDATE categories SET nom = '" . $_POST['nom'] . "' "
                . ", slug= '" . $_POST['slug'] .
                "' WHERE idCategories=" . (int) $unId;
        return $db->exec($sql);
    }

    function delete($unId) {
        $db = connection();
        $sql = "DELETE FROM categories WHERE idCategories=" . (int) $unId;
        //  var_dump($sql);die;
        return $db->exec($sql);
    }

    function insert() {
        $db = connection();
        $sql = "INSERT INTO categories (nom, slug)"
                . " values('" . addslashes(htmlspecialchars($_POST['nom'])) .
                "', '" . addslashes(htmlspecialchars($_POST['slug'])) . "')";
        //  var_dump($sql);die;
        return $db->exec($sql);
    }

}
