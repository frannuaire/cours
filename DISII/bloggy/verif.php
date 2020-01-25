<?php

session_start();

if (isset($_POST['mail'])) {
   
    if (!empty($_POST['mdp']) && !empty($_POST['mail'])) {
   
        $db = new PDO('mysql:host=localhost;dbname=bloggy', 'root', '');
        $sql = 'select idUtilisateurs, mdp, prenom, libelle'
                . ' from utilisateurs inner join roles on roles_idroles = idroles'
                . ' where mail = :mail';

        $st = $db->prepare($sql);
        $st->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR, 45);
        $st->execute();
        $st->debugDumpParams();
        foreach ($st->fetchall(PDO::FETCH_ASSOC) as $user) {
            $_SESSION['prenom'] = $user['prenom'];
            $mdp = $user['mdp'];
            $_SESSION['role'] = $user['libelle'];
            $_SESSION['id'] = $user['idUtilisateurs'];
        }


     
        if (password_verify($_POST['mdp'], $mdp)) {
            if ($_SESSION['role'] == 'admin') {
                header('Location: ./admin/index.php?page=categorie&action=listing');
            } else {
                header('Location: /');
            }
            //mauvais mdp
        } else {
            header('Location: ./login2.php?erreur=1');
        }
        //empty(mail et password)
    } else {
        header('Location: ./login2.php?erreur=2');
    }
    //isset(mail)
}else{
    header('Location: ./login2.php?erreur=2');
}