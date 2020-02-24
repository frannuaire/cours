<?php

/**
 * Description of Marque
 *
 * @author SIO
 */
class Marque {

    private $nom;
    private $siege;
    private $logo;
    private $models;

    public function __construct($unNom, $unSiege, $unLogo) {
        $this->nom = $unNom;
        $this->siege = $unSiege;
        $this->logo = $unLogo;
        $this->models = [];
    }
/**
 * Retourne le nom de la marque
 * @return String
 */
    public function getNom():String {
        return $this->nom;
    }

    public function getSiege() {
        return $this->siege;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setSiege($siege) {
        $this->siege = $siege;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function addModel($unModel) {
        $this->models[] = $unModel;
    }

    public function getModels() {
        return $this->models;
    }

}
