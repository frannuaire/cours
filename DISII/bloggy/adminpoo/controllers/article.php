<?php
//require 'models/article.php';
 use Mvcdisii\ArticleModels;
$article = new ArticleModels();
if($_GET['action']=='listing'){
        $smarty->assign('titre','Listing Article');
        $smarty->assign('listing',$article->listing());

   
}
if($_GET['action']=='add'){
    $vue['titre']='ajout Article';  
    $vue['categories']=getCategories();
}
if($_GET['action']=='create'){    
    create();
  header("Location: ./index.php?page=article&action=listing");
      
}