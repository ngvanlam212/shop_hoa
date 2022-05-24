<?php
/* Smarty version 3.1.30, created on 2022-04-20 08:15:06
  from "C:\xampp\htdocs\shop_hoa\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625fa4eaca3000_75026837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc292db215046b19c46fb8546404cae8ac392765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_625fa4eaca3000_75026837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67258001625fa4eac9fe26_31650280', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1353609816625fa4eaca2508_39983192', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_67258001625fa4eac9fe26_31650280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_1353609816625fa4eaca2508_39983192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
