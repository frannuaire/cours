
<form action='./index.php?page=article&action=create' method="post">
    <select name='idCategorie'>
        <?php
        foreach($vue['categories'] as $categories){
            echo "<option id='".$categories['idCategories'].
                    "' value='".$categories['idCategories']
                    ."'>".$categories['nom']."</option>";
            
        }
        ?>
    </select>
    <input type="text"  name='titre' placeholder="titre" />
    <br/>
    <br/>
    <textarea name="contenu" class="editor" contenteditable placeholder="Contenu article"></textarea>
    <input type="submit" value="Enregistrer" />
</form>