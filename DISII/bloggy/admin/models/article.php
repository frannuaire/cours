<?php

function listing() {
    $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select idArticles, titre, contenu, categories.nom as cat,  utilisateurs.nom as user  from articles
 inner join categories on idCategories=Categorie_idCategories
 inner join utilisateurs on idUtilisateurs = articles.Utilisateurs_idUtilisateurs;';
    
  //  var_dump($db->query($sql, PDO::FETCH_ASSOC));die;
    return $db->query($sql, PDO::FETCH_ASSOC);
}
