<?php

namespace Mvcdisii;

/**
 * Description of Models
 *
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
        $sql = 'select * from '.$this->table;
        return $this->db->query($sql, \PDO::FETCH_ASSOC);
    }

}
