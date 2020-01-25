<?php

session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // connexion à la base de données

    $pdo = new PDO(
            'mysql:host=localhost;dbname=bloggy', 'root', ''
    );


    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $options = [
        'cost' => 12,
    ];
     //  $password = password_hash($password, PASSWORD_BCRYPT);
   //    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    // echo $password;die;
    if ($username !== "" && $password !== "") {

        $requete = "SELECT idUtilisateurs, nom,  libelle, mdp from utilisateurs inner join roles "
                . "on roles.idRoles=utilisateurs.Roles_idRoles where mail=" . $pdo->quote($username);

        //. "and mdp=".$pdo->quote($password);
        /*  $sth = $pdo->prepare($requete);
          $sth->bindParam(':nom', $username, PDO::PARAM_STR);
          $sth->bindParam(':mdp', $password, PDO::PARAM_STR); */

     //   var_dump($requete);
$res=$pdo->query($requete);
        foreach ($res as $user) {
            $mdp = $user['mdp'];
            $name = $user['nom'];
            $role = $user['libelle'];
            $id = $user['idUtilisateurs'];
        }
      //  var_dump(password_verify($password, $mdp));
        if (password_verify($password, $mdp)) {
            $_SESSION['username'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['idUser'] = $id;
            if($role=='admin'){
                    header('Location: ./admin/');
            }else{
                 header('Location: ./');
            }
        
        } else {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
        
    } else {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: login.php');
}

?>