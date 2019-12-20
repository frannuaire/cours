<div>
1.Afficher un demi sapin de noel.
  <br >
2. Remplacer le 1 par une etoile.
</div>   
<?php
   for($i = 1;$i <= 9;$i++) {
      for($k = 1;$k <= $i;$k++) {
        echo $i;
      /* if($i!=1){
           echo $i;
        }
        else{
             echo '*';
        }  */   
      }
      echo '<br />';
   }
   echo '|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   |';
?>