
<?php
class personne
{
private $nom;
private $pr�nom;
private $adresse;
//Constructeur
public function __construct($nom,$pr�nom,$adresse)
{
$this->nom=$nom;
$this->pr�nom=$pr�nom;
$this->adresse=$adresse;
}
//Destructeur
public function __destruct()
{
echo "<script type=\"text/javascript\">alert('La personne nomm�e $this->pr�nom $this->nom \\nest supprim�e de vos contacts')</script>";
}
//
public function getpersonne()
{
$texte=" $this->pr�nom $this->nom <br /> $this->adresse <br />";
return $texte;
}
//
public function setadresse($adresse)
{
$this->adresse=$adresse;
}
}
//Cr�ation d'objets
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getpersonne();
//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
//Suppression explicite du client, donc appel du destructeur
unset($client);
//Fin du script
echo "Fin du script";
