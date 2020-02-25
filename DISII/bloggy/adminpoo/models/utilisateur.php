<?php

function listing() {
    $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
    $sql = 'select idUtilisateurs, nom, prenom, mail, libelle from utilisateurs'
            . ' inner join roles on idRoles=utilisateurs.Roles_idRoles';
    
  //  var_dump($db->query($sql, PDO::FETCH_ASSOC));die;
    return $db->query($sql, PDO::FETCH_ASSOC);
}
