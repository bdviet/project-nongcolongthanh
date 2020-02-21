<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:34:24
  from 'module:otfooterbottomrightblockv' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0c50bcfa05_86166916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d14a208d9154a03dc93e314e4885dbf5d396b5f' => 
    array (
      0 => 'module:otfooterbottomrightblockv',
      1 => 1582173262,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0c50bcfa05_86166916 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footerbottomright-outer links">

	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottomrightinfos']->value['text'];?>

	<?php } else { ?>
	<div id="footerbottomright-text" class="wrapper  footer-cms col-md-3">
	<div class="title">
		 <h3 class="h3">Tài khoản</h3>
		 <span class="pull-xs-right">
           <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li><a href="#">Đơn hàng</a></li>
	<li><a href="#">Yêu thích</a></li>
	<li><a href="#">Thanh toán</a></li>
	<li><a href="#">Thông tin</a></li>
	</ul>
	</div>
	<?php }?>


</div><?php }
}
