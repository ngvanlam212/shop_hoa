<?php
/* Smarty version 3.1.30, created on 2022-04-11 04:30:44
  from "C:\xampp\htdocs\shop-hoa\smarty\templates\layouts\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625392d442b6b3_92628408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f695ea1c9b179f97ddb3e28385bd3a41d7473d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop-hoa\\smarty\\templates\\layouts\\script.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625392d442b6b3_92628408 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/aos.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jquery.range.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_tim_kiem-mobile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_phan_trang.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jquery.gotop.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/numeral.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/slider/script.slider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
      $("#giam").click(function(){
        var sl=$(".value").val();
        sl--;
        $(".value").val(sl);
        if(sl<=1)
          $(".value").val(1);
      });
      $("#tang").click(function(){
          var sl=$(".value").val();
          sl++;
          $(".value").val(sl);
          if(sl>=10)
            $(".value").val(10);
      });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $('#gotop').gotop({
    background: '#FF3366',
    bottom : '100px',
    mobileOnly: false
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
AOS.init({
       easing: 'ease-in-out-sine'
     });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$('.price_range').jRange({
    from: 0,
    to: 1000000,
    step: 10000,
    format: '%s'+' đ',
    width: 250,
    showLabels: true,
    isRange : true
});
<?php echo '</script'; ?>
><?php }
}
