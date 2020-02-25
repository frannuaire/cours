<?php
require 'models/article.php';
if($_GET['action']=='listing'){
    $vue['titre']='Listing Articles';    
    $vue['listing']=listing();
   
}
if($_GET['action']=='add'){
    $vue['titre']='ajout Article';  
    $vue['categories']=getCategories();
}
if($_GET['action']=='create'){    
    create();
  header("Location: ./index.php?page=article&action=listing");
      
}