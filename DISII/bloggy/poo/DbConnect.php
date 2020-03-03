<?php
/**
 * Description of DbConnect
 *
 * @author SIO
 */
class DbConnect {
    
    private $db;
    private static $instance = null;
    
    private function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=bloggy",
                "root", "");  
    }
    
    public static function getInstance(){
        if(self::$instance==NULL){
            self::$instance=new DbConnect();
        }
        return self::$instance;
    }
    
    public function getDb(){
        return $this->db;
    }
}
