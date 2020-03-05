<?php


?>
<form action='./index.php?page=categorie&action=update' method="post">
    <input type="hidden" name='idCategories' value="{$form.idCategories}" />
    <input type="text" name='nom' placeholder="Libelle categorie" value="{$form.nom}"/>
    <input type="text" name='slug' placeholder="Slug" value="{$form.slug}"/>
    <input type="submit" value="Enregistrer" />
</form>