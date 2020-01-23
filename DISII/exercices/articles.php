
<?php
/*
 * Afficher la liste des articles du magasin avec un titre, 
 * un prix, une description.
 * 
 * Ex: 
 * article 1: titre: Nike air, prix 100€,
 *  description: pratique pour courir.
 *     
 * article 2: titre: Addidas forest grouve, prix 64€, 
 * description: idéal pour courir.
 */


$art1['titre']='Nike air';
$art1['prix']=100;
$art1['description']='Pratique pour courir';

$art2['titre']='Addidas forest grouve';
$art2['prix']=64;
$art2['description']='Id&eacute;al pour courir';

$art3['titre']='Boots Elesse';
$art3['prix']=34.99;
$art3['description']='Pour marcheur';

$magasin = [];

array_push($magasin, $art1);
array_push($magasin, $art2);
array_push($magasin, $art3);

echo "<table style='width:100%;'>"
. "<thead style='background-color:#ff8100;'>"
. "<tr><td style='width:33%;'>Titre</td>"
        . "<td style='width:33%;'>Prix</td>"
        . "<td style='width:33%;'>Description</td>"
        . "</tr></thead><tbody>";

foreach ($magasin as $article){
   echo "<tr>";
    foreach($article as $value){
        echo "<td>$value</td>";
    }
    echo '</tr>';
}
echo '</tbody></table>';

?>
<style> tbody tr:hover{background-color: #ccc;}
tbody tr:nth-child(even){background-color: #d6d6d6;}
tbody tr:nth-child(odd){background-color: #ffffcc;}

</style>
