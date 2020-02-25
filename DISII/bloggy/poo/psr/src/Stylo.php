<?php
/**
 * Description of Stylo
 *
 * @author SIO
 */
namespace Ktest;

class Stylo {
    
    private $taille;
    private $couleur;
    private $etat;
    
    public function __construct($uneTaille, $uneCouleur, $unEtat=true){
        $this->taille= $uneTaille;
        $this->couleur = $uneCouleur;
        $this->etat=$unEtat;
    }
    
    public function getEtat(){
        return $this->etat;
    }
    public function boucher(){
        $this->etat = TRUE;
    }
    public function deboucher(){
        $this->etat = FALSE;
    }
    public function getTaille() {
        return $this->taille;
    }
/**
 * Retourne la couleur du stylo.
 * @return String
 */
    public function getCouleur() {
        return $this->couleur;
    }

    public function ecrire($txt){
        $this->deboucher();
        return "<p style='color:".$this->couleur."'>".$txt."</p>";
    }

}
