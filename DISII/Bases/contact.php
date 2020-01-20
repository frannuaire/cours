<?php
  if(isset($_POST['nom'])){
     
echo '<meta http-equiv="refresh" content="6;url=?page=accueil">';

      echo 'enregistrement effectué <br>';
      echo "<p>Nom: ".$_POST['nom']."</p>";
      echo "<p>Prenom: ".$_POST['prenom']."</p>";
      echo "<p>Age: ".$_POST['age']."</p>";
 //     header("Refresh:6;  Location: ?page=accueil");
  }
  else{
    ?>

<br /><br />
<form method="post" action="?page=contact"> 
    <label for="nom">Nom</label> 
    <input type="text" name="nom" id="nom" required="required" placeholder='Dupond'/><br />
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom" placeholder='Jean'/><br />
    <label for="age">Age</label>
    <input type="number" name="age" id="age"/>
    <br /><br />
    <input type="submit" value='Valider'/>
    <input type="reset" value='Initialiser'/>
    
</form>
<?php
  }
