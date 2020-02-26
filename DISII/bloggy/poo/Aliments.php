<?php

/**
 * Description of Aliments
 *
 * @author SIO
 */
abstract class Aliments {
    protected $comestible; //bool
    protected $valEnergetique; // int
    
    public function __construct($uneEnergie, 
            $estComestible){
        $this->valEnergetique=$uneEnergie;
        $this->comestible=$estComestible;
    }
    
    public function getComestible() {
        return $this->comestible;
    }

    public function getValEnergetique() {
        return $this->valEnergetique;
    }

    public function setComestible($comestible) {
        $this->comestible = $comestible;
    }

    public function setValEnergetique($valEnergetique) {
        $this->valEnergetique = $valEnergetique;
    }


}
