<?php
/* Smarty version 3.1.30, created on 2022-03-16 06:35:18
  from "C:\xampp\htdocs\code-shop-hoa-php\views\v_gio_hang_ajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_623177163e50b4_39524665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2779a12b696e543bd098d610813c8b10e9958ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\code-shop-hoa-php\\views\\v_gio_hang_ajax.tpl',
      1 => 1517684930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623177163e50b4_39524665 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['giohang'])) {?>
  <div class="cd-cart-container">
<?php } else { ?>
  <div class="cd-cart-container empty">
<?php }?>

	<a  class="cd-cart-trigger">
		Cart
		<ul class="count" id="count">
      <?php if (isset($_SESSION['tong_gio_hang'])) {?>
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
			  <li><?php echo $_SESSION['tong_gio_hang'];?>
</li>
      <?php } else { ?>
        <li>0</li>
        <li>0</li>
      <?php }?>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Giỏ Hàng</h2>
			</header>

			<div class="body">
				<ul id="listGioHang">
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class='footer_gio_hang'>
				<a href="khach-hang.html" alt="Xem giỏ hàng" class="checkout">
					<em>Đặt hàng - 
						<span id="tong_thanh_tien">
          		 0 đ
      			</span>
					</em>
				</a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->
<?php }
}
