<?php

namespace Mvcdisii;

/**
 * Description of Controllers
 * Classe parent abstraite 
 * pour factoriser le code de mes controllers
 * @author SIO
 */
abstract class Controllers {
    protected $model;
    protected $smarty;
    
    public function __construct(&$smarty){
        $this->smarty=$smarty;       
    }

}
