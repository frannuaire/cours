<?php

require_once 'Voiture.php';

/**
 * Description of Model
 *
 * @author SIO
 */
class Model {

    private $nom;
    private $moteur;
    private $voitures;

    public function __construct($unNom, $unMoteur) {
        $this->nom = $unNom;
        $this->moteur = $unMoteur;
        $this->voitures = [];
    }
/**
 * Retourne le nom du model
 * @return string
 */
    public function getNom(): String {
        return $this->nom;
    }

    public function getMoteur() {
        return $this->moteur;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function addVoiture($voiture) {
        array_push($this->voitures, $voiture);
        //  $this->voitures[] = $voiture;       
    }

    public function listVoitures() {
        if (count($this->voitures) > 0) {
            foreach ($this->voitures as $voiture) {
                echo 'Voiture :' . $voiture->getImmat() . '<br/>';
            }
        } else {
            throw new Exception("Il n'y a pas encore de voiture pour ce model");
        }
    }

    public function setMoteur($moteur) {
        $this->moteur = $moteur;
    }

    public function getVoitures() {
        return $this->voitures;
    }

}
