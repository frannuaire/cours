<?php

namespace Mvcdisii;

/**
 * Description of Models
 * Classe parente abstraite 
 * pour gérer les méthodes communes
 * des différents modèles.
 * @author SIO
 */
abstract class Models {

    /**
     * Instance de PDO
     * @var PDO 
     */
    protected $db;

    /**
     *
     * @var String 
     */
    protected $table;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->db = DbConnect::getInstance()
                ->getDb();
        //  $this->db = $this->connection();
    }

    /**
     * Retourne le tableau des categories
     * @return Array
     */
    public function listing() {
        $sql = 'select * from ' . $this->table;
        return $this->db->query($sql, \PDO::FETCH_ASSOC);
    }

}
