<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:15:09
  from 'C:\workspace-git\may-cay\admin_sc\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e07cd8fbcc8_57839108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbae4be8a851c85c16bb2305974ff75c734ea5b' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\admin_sc\\themes\\default\\template\\content.tpl',
      1 => 1581934883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e07cd8fbcc8_57839108 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
