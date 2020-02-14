<?php

function listing() {
    $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select idArticles, titre, contenu, categories.nom as cat,  utilisateurs.nom as user  from articles
 inner join categories on idCategories=Categorie_idCategories
 inner join utilisateurs on idUtilisateurs = articles.Utilisateurs_idUtilisateurs;';
    
  //  var_dump($db->query($sql, PDO::FETCH_ASSOC));die;
    return $db->query($sql, PDO::FETCH_ASSOC);
}
function getCategories() {
     $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select *  from categories';
    return $db->query($sql, PDO::FETCH_ASSOC);
}

function create(){
     $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = "INSERT INTO articles( titre, contenu,  
        Utilisateurs_idUtilisateurs,  Categorie_idCategories,
        vues) VALUES('".$_POST['titre']."', '".$_POST['contenu']."',
           ".$_SESSION['id'].", ".$_POST['idCategorie'].", 0);";
  //  var_dump($sql);die;
    return $db->exec($sql);
}