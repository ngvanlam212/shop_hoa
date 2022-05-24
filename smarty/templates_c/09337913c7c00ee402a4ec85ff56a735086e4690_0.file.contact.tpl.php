<?php
/* Smarty version 3.1.30, created on 2022-04-11 04:30:44
  from "C:\xampp\htdocs\shop-hoa\smarty\templates\layouts\body\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625392d4357fa4_12366708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09337913c7c00ee402a4ec85ff56a735086e4690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop-hoa\\smarty\\templates\\layouts\\body\\contact.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625392d4357fa4_12366708 (Smarty_Internal_Template $_smarty_tpl) {
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
