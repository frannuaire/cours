<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-26 10:56:09
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\article\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e564ec92bdb63_79143755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c54c5e740e8db248a1960d7e9d3b9021983284c' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\article\\listing.tpl',
      1 => 1582714353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e564ec92bdb63_79143755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value, 'articles');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->value) {
?>
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article', false, 'clef');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clef']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['clef']->value == 'idArticles') {?>

            <td><a title="modifier" href="./index.php?page=article&action=edit&id=<?php echo '<?=';?>
 $valeur; <?php echo '?>';?>
">+</a>&nbsp;
                <a title="supprimer" href="./index.php?page=article&action=delete&id=<?php echo '<?=';?>
 $valeur; <?php echo '?>';?>
">-</a></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['clef']->value == 'contenu') {?> 
            <td><?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['article']->value,50,"<br />\n",false);?>
</td>
            <?php } else { ?>
            <td><?php echo $_smarty_tpl->tpl_vars['article']->value;?>
</td>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
