<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:33:17
  from 'module:otheaderrightblockviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0c0de703c5_29363342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d71930d348cd3d13a33aa938365d5d93f498812' => 
    array (
      0 => 'module:otheaderrightblockviewste',
      1 => 1582173142,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0c0de703c5_29363342 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="header-right-text">
 <div class="header-right">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_headerrightinfos']->value) && $_smarty_tpl->tpl_vars['cms_headerrightinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_headerrightinfos']->value['text'];?>

	<?php } else { ?>
		<div class="header-call">
			<ul class="header-link-inner">
				<li class="phone-icon">
				<a class="call-dial" href="#">+ 91 0123 456 789</a>
				</li>
			</ul>
		</div>
	<?php }?>
 </div>
</div>
<?php }
}
