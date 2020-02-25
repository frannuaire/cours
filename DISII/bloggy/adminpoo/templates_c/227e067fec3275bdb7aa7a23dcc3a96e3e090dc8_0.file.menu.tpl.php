<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-25 13:16:49
  from 'C:\wamp64\www\Cours\cours\DISII\bloggy\adminpoo\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e551e41c21840_39838655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '227e067fec3275bdb7aa7a23dcc3a96e3e090dc8' => 
    array (
      0 => 'C:\\wamp64\\www\\Cours\\cours\\DISII\\bloggy\\adminpoo\\templates\\menu.tpl',
      1 => 1582636473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e551e41c21840_39838655 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="./">Accueil <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="./index.php?page=categorie&action=listing">Categories</a>
            <a class="nav-item nav-link" href="./index.php?page=utilisateur&action=listing">Utilisateurs</a>
            <a class="nav-item nav-link" href="./index.php?page=article&action=listing">Articles</a>
            <a class="nav-item nav-link" href="./index.php?page=utilisateur&action=logout">Login/Logout</a>
        </div>
    </div>
</nav><?php }
}
