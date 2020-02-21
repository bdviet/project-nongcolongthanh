<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:33:18
  from 'module:otfooterbottomleftblockvi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0c0eac9425_67541210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91e34f4489b65c1cd39ff0ae3847b4d01bd197e' => 
    array (
      0 => 'module:otfooterbottomleftblockvi',
      1 => 1582173142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0c0eac9425_67541210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footerbottomleft-outer links">

	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottomleftinfos']->value['text'];?>

	<?php } else { ?>
	<div id="footerbottomleft-text" class="wrapper  footer-cms col-md-3">
	<div class="title" >
	 	<h3 class="h3">adorn</h3>
	 	<span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li>
	<div class="bottomcmsblock">
	<div class="bottomcmsinner">
	<div class="bottomcms_img"><img class="img-footer" src="img/cms/footer_logo.png" alt="main-image" /></div>
	<div class="call-text">
		<div class="call-text1">Gọi chúng tôi</div>
		<div class="call-text2">+84 988 012 895</div>
	</div>
	<div class="address">Địa chỉ: 56 Tố Hữu, Nam Từ Liêm <br> Hà Nội, Việt Nam</div>
	</div>
	</div>
	</li>
	</ul>
	</div>
	<?php }?>


</div>
<?php }
}
