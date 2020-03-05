<a class="btn btn-block btn-success"
   href="./index.php?page=categorie&action=add">
    Créer une catégorie</a>
<table class="table">
    <thead><tr>
            <td>Action</td>
            <td>libelle</td>
            <td>info</td>
        </tr></thead>
    <tbody>
        {foreach from=$listing item=categories}
            <tr>
                {foreach from=$categories  key=clef item=categorie}
                    {if $clef == 'idCategories'}
                        <td><a href="./index.php?page=categorie&action=edit&id={$categorie}">+</a>&nbsp;<a href="./index.php?page=categorie&action=delete&id={$categorie}">-</a></td>
                    {else}
                        <td>{$categorie}</td>
                    {/if}
                {/foreach}
            </tr>
        {/foreach}

    </tbody>
</table>