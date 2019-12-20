<div>
Créer une fonction permettant de récupérer le prix d'un produit en fonction de ca promotion 
prenant en paramêtre le prix de l'article avant la promotion et en second paramêtre le promotion a 20 par défaut
</div>                                                                                              
<?php

$prix = 100;

function promo($unPrix, $promo=20){
    return  $unPrix-($unPrix*($promo/100));
}
// $remise = promo($prix);

echo "prix avant remise: ".$prix. " Prix apres remise : " . promo($prix);
echo "<br>Mon 2e Article : ".promo(50);
?>