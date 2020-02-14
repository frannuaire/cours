
<?php
class personne
{
private $nom;
private $prénom;
private $adresse;
//Constructeur
public function __construct($nom,$prénom,$adresse)
{
$this->nom=$nom;
$this->prénom=$prénom;
$this->adresse=$adresse;
}
//Destructeur
public function __destruct()
{
echo "<script type=\"text/javascript\">alert('La personne nommée $this->prénom $this->nom \\nest supprimée de vos contacts')</script>";
}
//
public function getpersonne()
{
$texte=" $this->prénom $this->nom <br /> $this->adresse <br />";
return $texte;
}
//
public function setadresse($adresse)
{
$this->adresse=$adresse;
}
}
//Création d'objets
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getpersonne();
//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
//Suppression explicite du client, donc appel du destructeur
unset($client);
//Fin du script
echo "Fin du script";
