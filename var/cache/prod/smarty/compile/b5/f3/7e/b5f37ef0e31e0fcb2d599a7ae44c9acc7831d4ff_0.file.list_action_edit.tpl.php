<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:18:04
  from 'C:\workspace-git\may-cay\admin_sc\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e087c353906_85297580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f37ef0e31e0fcb2d599a7ae44c9acc7831d4ff' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\admin_sc\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1581934883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e087c353906_85297580 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
