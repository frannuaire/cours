<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 09:41:26
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e60c946a94812_68395994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10011f1c49e0518b957571e47d8bb66a88836c4' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\categorie\\add.tpl',
      1 => 1583401221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60c946a94812_68395994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action='./index.php?page=categorie&action=create' method="post">
 <input type="text" name='nom' placeholder="Libelle categorie" />
    <input type="text" name='slug' placeholder="Slug" />
    <input type="submit" value="Enregistrer" />
</form><?php }
}
