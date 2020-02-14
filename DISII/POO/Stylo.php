<?php
/**
 * La classe est un model permettant de décrire un objet (un moule, patron)
 */
Class Stylo{
    /**
     * Les attributs (variables de classe), ne peuvent pas être accessible directement
     * il faut les encapsuler(passer par des méthodes) pour accèder au variable.
     **/
    private $boucher; // true si bouché, false débouché.
    private $couleur;
    
    /**
     * Constructeur utilisé lors de l'instanciation de l'objet, on y défini
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
     * Quand ma variable est détruite et libère la mémoire
     */
    public function __destruct(){
        echo 'Le '.get_class($this).' n\'&eacute;crit plus ';
    }
    
}
// j'instancie mes objets.
$stylo = new Stylo('blue');
$bic = new Stylo('red');
// utilisation des méthodes propres à l'instance de l'objet.
$stylo->ecrire('Bonjour Monde!');
$bic->ecrire('Bonjour je suis bic');


