<?php


?>
<form action='./index.php?page=categorie&action=update' method="post">
    <input type="hidden" name='idCategories' value="<?=$vue['form']['idCategories']; ?>" />
    <input type="text" name='nom' placeholder="Libelle categorie" value="<?=$vue['form']['nom']; ?>"/>
    <input type="text" name='slug' placeholder="Slug" value="<?=$vue['form']['slug']; ?>"/>
    <input type="submit" value="Enregistrer" />
</form>