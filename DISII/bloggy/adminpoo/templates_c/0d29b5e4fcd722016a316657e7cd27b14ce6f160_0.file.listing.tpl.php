<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 09:55:30
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\categorie\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60cc92e99542_81734943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d29b5e4fcd722016a316657e7cd27b14ce6f160' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\categorie\\listing.tpl',
      1 => 1583402113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60cc92e99542_81734943 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-block btn-success"
   href="./index.php?page=categorie&action=add">
    Créer une catégorie</a>
<table class="table">
    <thead><tr>
            <td>Action</td>
            <td>libelle</td>
            <td>info</td>
        </tr></thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value, 'categories');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
?>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie', false, 'clef');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clef']->value => $_smarty_tpl->tpl_vars['categorie']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['clef']->value == 'idCategories') {?>
                        <td><a href="./index.php?page=categorie&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
">+</a>&nbsp;<a href="./index.php?page=categorie&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
">-</a></td>
                    <?php } else { ?>
                        <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
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
</table><?php }
}
