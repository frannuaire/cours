<?php

/**
 * Description of utilisateur
 *
 * @author SIO
 */
class Utilisateur {

    private $nom;
    private $mail;
    private static $minMdp = 7;

    public function __construct($unNom, $unMail) {
        $this->nom = $unNom;
        $this->mail = $unMail;
        
    }

    public static function verifMdp($password) {
        if (strlen($password) >= self::$minMdp) {
            return true;
        } else {
            return false;
        }
    }

}
