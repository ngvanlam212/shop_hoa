<?php
/* Smarty version 3.1.30, created on 2022-03-16 06:35:18
  from "C:\xampp\htdocs\code-shop-hoa-php\smarty\templates\layouts\body\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6231771642cfa1_56764539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '008726959a9623ee17f1a94eef8f7c304b13887d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\code-shop-hoa-php\\smarty\\templates\\layouts\\body\\contact.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231771642cfa1_56764539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="send-email">
    <div class="container">
        <div class="col-sm-9">
            <div class="col-sm-4 text-left">
                <span>Nhận tin khuyến mãi</span>
            </div>
            <div class="input-group col-sm-4">
                <input type="text" class="form-control" placeholder="Nhập email...">
                <span class="input-group-btn nopadd">
                    <button class="btn btn-default" type="button"><span class="fa fa-send-o"></span></button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</section>
    <div id="bsm_contact_and_map"><?php echo $_smarty_tpl->tpl_vars['google_map']->value;?>
</div>
<?php }
}
