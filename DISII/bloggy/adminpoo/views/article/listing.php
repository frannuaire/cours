
<table class='table'>
    <thead><tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Contenu</td>
            <td>Categorie</td>
            <td>Redacteur</td>
        </tr></thead>
    <tbody>
        <?php
        foreach ($vue['listing'] as $utilisateurs) {
            echo '<tr>';
            foreach ($utilisateurs as $clef => $valeur) {
                // si c'est l'id de la table je cr�er mes liens d'action
                if($clef=='idArticles'){
                ?>
    <td><a title="modifier" href="./index.php?page=article&action=edit&id=<?=$valeur;?>">+</a>&nbsp;
        <a title="supprimer" href="./index.php?page=article&action=delete&id=<?=$valeur;?>">-</a></td>
        <?php
                }elseif($clef='contenu'){
                    echo '<td>'.wordwrap($valeur, 50, "<br />").'</td>';
                }else{
                    echo '<td>'.$valeur.'</td>';
                }
         
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>