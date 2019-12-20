<div>
Créer un programme permettant d'afficher le tirage du loto sans tirer 2 fois la meme boule.
</div>   
<?php
     $i=0;
      $tirage=[];
     while($i<=5){
     
       $boule =  rand(1, 49);
       if (in_array($boule, $tirage)) {
       
         }else{
            $tirage[$i]=$boule;
             $i++;
         }
      
        
     }
         echo ' tirage :<br>';
     foreach($tirage as $loto){
     echo ' '.$loto;
     }
  

?>