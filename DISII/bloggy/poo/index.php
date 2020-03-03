<?php

require_once 'Aliments.php';
require_once 'Fruits.php';
require_once 'utilisateur.php';
require_once 'DbConnect.php';
require_once 'TVA.php';
/*
echo 'La TVA pour l\'alcool est a '.TVA::TVAUsuelle; 

die;
$db = DbConnect::getInstance()->getDb();
 $sql = 'select * from categories';
 foreach($db->query($sql) as $cat){
     var_dump($cat);
 }

$junior = new Utilisateur("Junior", "t@1.fr");
if(Utilisateur::verifMdp("adb")){
    echo "Bravo";
}else{
    echo "Dommage";
}

die;
  */      
$citron = new Fruits(200, 'Citron', 'Yellow', 'Acide');

echo Fruits::getNbFruits();echo "</br>";
$orange = new Fruits(200, 'Orange', 'Orange', 'Acide');
echo Fruits::getNbFruits();echo "</br>";
echo $orange->getNom();
echo "</br>";
echo $citron->getNom();
$orange=null;

echo "</br>";echo "</br>";
echo $citron->getCouleur();
echo "</br>";
$citron->setCouleur("Green");
echo $citron->getCouleur();
echo $citron->getValEnergetique();
echo "</br>";

        

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