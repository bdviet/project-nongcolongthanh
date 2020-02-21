<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:43
  from 'module:otfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e073b367ab7_84604888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed6d14e831f7ac451ce5789d01c9b13a08b6d1a' => 
    array (
      0 => 'module:otfeaturedproductsviewste',
      1 => 1581992399,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-slider.tpl' => 1,
  ),
),false)) {
function content_5e4e073b367ab7_84604888 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="featured-products">
<div class="featured-products container">
<div class="row">
  <h1 class="main-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured Products','d'=>'otfeaturedproducts'),$_smarty_tpl ) );?>
</h1>
 <div class="homepage-products products">
    <?php if ($_smarty_tpl->tpl_vars['sliderstatus']->value == 1) {?>
		<ul id="featuredproducts-carousel" class="owl-carousel product-item grid products-slider">
	<?php } else { ?>
		<ul id="featuredproducts-grid" class="products-grid grid product-item">
	<?php }?>	
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <li class="item">
      	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </ul>
 </div>
 </div>
 </div>
</section>

<?php }
}
