<div>
Cr�er une fonction permettant de r�cup�rer le prix d'un produit en fonction de ca promotion 
prenant en param�tre le prix de l'article avant la promotion et en second param�tre le promotion a 20 par d�faut
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