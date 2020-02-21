<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:47:40
  from 'module:otshippingblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0f6c8242f0_89826549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2273288a27b973cf132145203a34c8afc1eafbe' => 
    array (
      0 => 'module:otshippingblockviewstempl',
      1 => 1582174056,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0f6c8242f0_89826549 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="shipping-text">
 <div class="shipping-text-inner container">
 <div class="row">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_shippinginfos']->value) && $_smarty_tpl->tpl_vars['cms_shippinginfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_shippinginfos']->value['text'];?>

	<?php } else { ?>
	<div class="shipping-outer">
	<div class="shipping-inner">
	<div class="subtitle-part subtitle-part1">
	<div class="subbanner-part-maininnner1">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Vận chuyển nhanh chóng</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part2">
	<div class="subbanner-part-maininnner2">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Luôn làm khách hàng hài lòng</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part3">
	<div class="subbanner-part-maininnner3">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Mở cửa cả tuần: 8:00 Sáng - 10:00 Tối</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php }?>
	</div>
 </div>
</div>
<?php }
}
