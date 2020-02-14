<?php
require 'models/utilisateur.php';
if($_GET['action']=='listing'){
    $vue['titre']='Listing categorie';
    
    $vue['listing']=listing();
 //   $vue['html']=renderListing(listing());
    
}