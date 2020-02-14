<?php
/**
 * La classe est un model permettant de d�crire un objet (un moule, patron)
 */
Class Stylo{
    /**
     * Les attributs (variables de classe), ne peuvent pas �tre accessible directement
     * il faut les encapsuler(passer par des m�thodes) pour acc�der au variable.
     **/
    private $boucher; // true si bouch�, false d�bouch�.
    private $couleur;
    
    /**
     * Constructeur utilis� lors de l'instanciation de l'objet, on y d�fini
     * les attributs minimum pour faire fonctionner l'objet.
     * 
     * @param String $uneCouleur
     * @param bool $unEtat
     */
    public function __construct($uneCouleur, $unEtat=true){
        $this->couleur = $uneCouleur;
        $this->boucher = $unEtat;
    }   
    /**
     * Getteur (Ascesseur)
     * return string
     */
    public function getCouleur(): string{
        return $this->couleur;
    }
    /**
     * Setteur((muttateur))
     * @param string $uneCouleur
     */
    public function setCouleur($uneCouleur): void{
        $this->couleur = $uneCouleur;
    }

    /**
     *  * Setteur((muttateur)) sous forme d'action
     */
    public function boucher(): void{
        $this->boucher = true;
    }
    /**
     *  * Setteur((muttateur)) sous forme d'action
     */
    public function deboucher(): void{
        $this->boucher = false;
    }
    
    /**
     * getteur(Muttateur)
     * @return bool
     */
    public function getEtat(): bool{
        return $this->boucher;
    }
    // methode d'action
    public function ecrire($unMessage): void{
        echo '<p style="color:'.$this->couleur.';">'.$unMessage.'</p>';
    }
    
    /**
     * Quand ma variable est d�truite et lib�re la m�moire
     */
    public function __destruct(){
        echo 'Le '.get_class($this).' n\'&eacute;crit plus ';
    }
    
}
// j'instancie mes objets.
$stylo = new Stylo('blue');
$bic = new Stylo('red');
// utilisation des m�thodes propres � l'instance de l'objet.
$stylo->ecrire('Bonjour Monde!');
$bic->ecrire('Bonjour je suis bic');


