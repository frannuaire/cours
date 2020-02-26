<?php

require_once 'Aliments.php';

/**
 * Description of Fruits
 *
 * @author SIO
 */
class Fruits extends Aliments {

    private $nom;
    private $couleur;
    private $PH;

    public function __construct($uneEnergie, $unNom, $uneCouleur, $unPh) {
        parent::__construct($uneEnergie, true);
        $this->nom = $unNom;
        $this->couleur = $uneCouleur;
        $this->PH = $unPh;
    }
    public function getNom() {
        return $this->nom;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getPH() {
        return $this->PH;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setPH($PH) {
        $this->PH = $PH;
    }


        
        
}
