<?php
/* Smarty version 3.1.30, created on 2022-04-11 04:22:18
  from "C:\xampp\htdocs\code-shop-hoa-php\admin\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625390da00fc17_12407225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959dca45c0decd8f4324c57fb649fa6200c44052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\code-shop-hoa-php\\admin\\smarty\\templates\\layout.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_625390da00fc17_12407225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
