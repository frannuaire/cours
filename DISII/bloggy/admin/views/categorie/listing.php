<table>
    <thead><tr>
            <td>Action</td>
            <td>libelle</td>
            <td>info</td>
        </tr></thead>
    <tbody>
        <?php
        foreach ($vue['listing'] as $categories) {
            echo '<tr>';
            foreach ($categories as $clef => $valeur) {
                // si c'est l'id de la table je cr�er mes liens d'action
                if($clef=='idCategories'){
                ?>
    <td><a href="./index.php?page=categorie&action=edit&id=<?=$valeur;?>">+</a>&nbsp;<a href="./index.php?page=categorie&action=delete&id=<?=$valeur;?>">-</a></td>
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