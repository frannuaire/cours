<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 10:19:28
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\categorie\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60d2308b13f0_78021238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4038649ab5db04ef60b92b84d108e95fabbdfd' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\categorie\\edit.tpl',
      1 => 1583403301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d2308b13f0_78021238 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php


';
echo '?>';?>

<form action='./index.php?page=categorie&action=update' method="post">
    <input type="hidden" name='idCategories' value="<?php echo $_smarty_tpl->tpl_vars['form']->value['idCategories'];?>
" />
    <input type="text" name='nom' placeholder="Libelle categorie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['nom'];?>
"/>
    <input type="text" name='slug' placeholder="Slug" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['slug'];?>
"/>
    <input type="submit" value="Enregistrer" />
</form><?php }
}
