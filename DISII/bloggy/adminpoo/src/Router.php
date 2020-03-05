<?php

namespace Mvcdisii;

use Mvcdisii\CategorieController;

/**
 * Description of Router
 * Gestion des routes de l'application
 * 
 * @author SIO
 * @version 1.0.0 */
class Router {

    private $page;
    private $pages;
    private $action;
    private $smarty;

    /**
     * Affecte des valeurs aux attributs
     *  $page, $pages, $action 
     * @param Object $smarty
     */
    public function __construct(&$smarty) {
        $this->smarty = $smarty;
        $this->getPage();
        $this->getRoute();
        $this->getAction();
    }

    /**
     * Affecte l'attribut page en fonction
     * de la suberglobale $_GET avec la clef page. 
     */
    private function getPage() {
        $this->page = isset($_GET['page']) ? $_GET['page'] : 'categorie';
    }

    /**
     * Tableau associatif pour gérer les routes.
     * @todo Rajoutez vos routes ici.
     */
    private function getRoute() {
        $this->pages = array('categorie' => 'CategorieController',
            'utilisateur' => 'utilisateur.php',
            'article' => 'article.php',
            '' => 'categorie.php'
        );
    }
/**
 * Affect la variable action en fonction de 
 *  la super globale $_GET avec la clef action
 */
    private function getAction() {
        $this->action = (isset($_GET['action'])) ? $_GET['action'] : 'listing';
    }

    /**
     * Gestion globale des routes :
     * on vérifi que la route existe dans notre tableau
     * On construit dynamiquement notre constructeur.
     * On appel ensuite l'action du constructeur.
     * Puis on rend la vue ou on lève 
     * une Exception si elle n'existe pas.
     * @return string
     * @throws \Exception
     */
    public function affRoute(): string {
        if (array_key_exists($this->page, $this->pages)) {
            $ctrl = "\\Mvcdisii\\" . $this->pages[$this->page];
            $controller = new $ctrl($this->smarty);
            $controller->{$this->action}();
            //  require(__DIR__ . '/../controllers/' . $this->pages[$this->page]);
            $vue = $this->page . '/' . $this->action . '.tpl';
            return $vue;
        } else {
            throw new \Exception("La page n'existe pas");
        }
    }

}
