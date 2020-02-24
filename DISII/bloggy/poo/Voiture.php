<?php
require_once 'Model.php';
/**
 * Description of Voiture
 *
 * @author SIO
 */
class Voiture {

    private $marque;
    private $model;
    private $couleur;
    private $immat;

    public function __construct(
    $uneMarque, $unModel, $uneCouleur, $uneImmat) {
        $this->marque = $uneMarque;
        $this->model = $unModel;
        $this->couleur = $uneCouleur;
        $this->setImmat($uneImmat);
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getModel() {
        return $this->model;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getImmat() {
        return $this->immat;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setImmat($immat) {
        if (preg_match('/^([A-Z]){2}([0-9]){3}([A-Z]){2}$/', $immat)) {
            $this->immat = $immat;
        } else {
            throw new Exception("Immatriculation mal formaté");
        }
    }

    public function demarrer() {
        echo 'la voiture demarre';
    }

    public function avance() {
        echo 'la voiture avance';
    }

    public function stop() {
        echo 'la voiture s\'arrete';
    }

}
