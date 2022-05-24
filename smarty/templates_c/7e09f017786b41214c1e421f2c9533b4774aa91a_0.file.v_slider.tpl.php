<?php
/* Smarty version 3.1.30, created on 2022-04-11 04:30:43
  from "C:\xampp\htdocs\shop-hoa\views\trang_chu\v_slider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625392d3dbae67_19458577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e09f017786b41214c1e421f2c9533b4774aa91a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop-hoa\\views\\trang_chu\\v_slider.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625392d3dbae67_19458577 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="wrapper-page">
        <div class="wrap-body container">
            <div class="row content-row">
                <div class="wrap-content col-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="slider-area">
                    <!-- Slider -->
                        <div class="block-slider block-slider4">
                            <ul class="" id="bxslider-home4">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_slider']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['slider']->value->DuongDan;?>
">
                                        <img src="public/images/slider/<?php echo $_smarty_tpl->tpl_vars['slider']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slider']->value->TieuDe;?>
"/>
                                    </a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </div>
                    <!-- ./Slider -->
                    </div> <!-- End slider area -->
                </div>
            </div>
        </div>
    </div><?php }
}
