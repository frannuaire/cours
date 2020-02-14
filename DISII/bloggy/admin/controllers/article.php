<?php
require 'models/article.php';
if($_GET['action']=='listing'){
    $vue['titre']='Listing Articles';
    
    $vue['listing']=listing();
 //   $vue['html']=renderListing(listing());
    
}