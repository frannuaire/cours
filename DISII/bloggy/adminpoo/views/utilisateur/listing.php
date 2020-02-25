<table>
    <thead><tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Mail</td>
            <td>Role</td>
        </tr></thead>
    <tbody>
        <?php
        foreach ($vue['listing'] as $utilisateurs) {
            echo '<tr>';
            foreach ($utilisateurs as $clef => $valeur) {
                // si c'est l'id de la table je créer mes liens d'action
                if($clef=='idUtilisateurs'){
                ?>
    <td><a href="./index.php?page=utilisateur&action=edit&id=<?=$valeur;?>">+</a>&nbsp;<a href="./index.php?page=categorie&action=delete&id=<?=$valeur;?>">-</a></td>
        <?php
                }else{
                    echo '<td>'.$valeur.'</td>';
                }
         
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>