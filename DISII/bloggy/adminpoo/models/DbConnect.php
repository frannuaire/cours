<?php

namespace Mvcdisii;
/**
 * Description of DbConnect
 * Singleton pour n'avoir 
 * qu'une connection ouverte à la BDD
 * @author SIO
 */
class DbConnect {
    /**
     *
     * @var \PDO 
     */
    private $db;
    /**
     *
     * @var Dbconnect 
     */
    private static $instance = null;
    
    /**
     * On crée une instance de PDO
     * que l'on affect à l'attribut $db
     */
    private function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=bloggy",
                "root", "");  
    }
    
    /**
     * Gestion du singleton
     * @return DbConnect
     */
    public static function getInstance(){
        if(self::$instance==NULL){
            self::$instance=new DbConnect();
        }
        return self::$instance;
    }
    
    /**
     * Retourne l'instance de notre PDO
     * @return \PDO
     */
    public function getDb(){
        return $this->db;
    }
}
