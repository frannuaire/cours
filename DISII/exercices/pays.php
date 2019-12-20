<div>
Créer un un tableau associatif avec en clef le pays et en valeur la capitale.
puis afficher ce tableau avec sa clef et sa valeur.
</div>   
<?php
   $pays = array(
      'France' => 'Paris',
      'Allemagne' => 'Berlin',
      'Italie' => 'Rome'
   );
   foreach($pays as $clef => $valeur) {
      echo $clef.' : '.$valeur.' </br>';	   
   }

?>