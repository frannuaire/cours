<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 13:21:22
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e551f529ed4e6_18583328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fb7750faf93393031172de608d591c9bfea3c2' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\index.tpl',
      1 => 1582636875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:script.tpl' => 1,
  ),
),false)) {
function content_5e551f529ed4e6_18583328 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <?php $_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="content">
            <h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
