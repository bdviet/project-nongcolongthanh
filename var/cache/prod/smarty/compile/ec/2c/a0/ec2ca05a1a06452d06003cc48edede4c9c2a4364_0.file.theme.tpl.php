<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:17:18
  from 'C:\workspace-git\may-cay\modules\ps_mbo\views\templates\admin\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e084e4f9760_56079032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec2ca05a1a06452d06003cc48edede4c9c2a4364' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\modules\\ps_mbo\\views\\templates\\admin\\theme.tpl',
      1 => 1581936127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e084e4f9760_56079032 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
