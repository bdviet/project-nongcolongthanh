<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:43
  from 'module:otbrandlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e073bb78751_80468139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f520f8e79f09892de38fbe067c85961a5f9bed0' => 
    array (
      0 => 'module:otbrandlistviewstemplates',
      1 => 1581992399,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e073bb78751_80468139 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['sliderstatus']->value == 1) {?>
		<ul id="brand-carousel" class="owl-carousel product-item products-slider">
	<?php } else { ?>
		<ul id="brand-grid" class="products-grid product-item">
	<?php }?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration']++;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_brand_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
     <li class="item">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
         
		   <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['imageurl'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" alt="" /> 
        </a>
      </li>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
