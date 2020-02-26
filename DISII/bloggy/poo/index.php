<?php

require_once 'Aliments.php';
require_once 'Fruits.php';


$citron = new Fruits(200, 'Citron', 'Yellow', 'Acide');


echo $citron->getNom();
echo $citron->getCouleur();
$citron->setCouleur("Green");
echo $citron->getCouleur();
echo $citron->getValEnergetique();

        

/*
require_once 'Stylo.php';
require_once 'Voiture.php';
require_once 'Model.php';
require_once 'Marque.php';


$bic = new Stylo(10, 'red');
echo $bic->ecrire("Mon text<br/>");

$spark = new Model('Spark', '1L2');
$orlando = new Model('Orlando', '2L');

$romu = new Voiture('Chevrolet', 
        $orlando, 'black', 'CG684RF');
$voitureVoisin = new Voiture('Chevrolet', 
        $orlando, 'black', 'CG584TR');

$orlando->addVoiture($romu);
$orlando->addVoiture($voitureVoisin);

$orlando->listVoitures();


$chevrolet = new Marque("Chevrolet", 
        "Orlando city center", "url de l'image");
$chevrolet->addModel($orlando);
$chevrolet->addModel($spark);
echo $chevrolet->getNom();
foreach($chevrolet->getModels() as $model){
    echo 'model: '.$model->getNom().' possedent :<br>';
    foreach($model->getVoitures() as $voiture){
        echo $voiture->getImmat().'<br />';
    }
}
 * 
 */