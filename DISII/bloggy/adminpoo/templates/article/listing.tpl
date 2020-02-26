<table class='table'>
    <thead><tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Contenu</td>
            <td>Categorie</td>
            <td>Redacteur</td>
        </tr></thead>
    <tbody>
        {foreach from=$listing item=articles}
        <tr>
            {foreach from=$articles  key=clef item=article}
            {if $clef == 'idArticles'}

            <td><a title="modifier" href="./index.php?page=article&action=edit&id=<?= $valeur; ?>">+</a>&nbsp;
                <a title="supprimer" href="./index.php?page=article&action=delete&id=<?= $valeur; ?>">-</a></td>
            {elseif $clef=='contenu'} 
            <td>{$article|wordwrap:50:"<br />\n"}</td>
            {else}
            <td>{$article}</td>
            {/if}
            {/foreach}
        </tr>
        {/foreach}
    </tbody>
</table>
