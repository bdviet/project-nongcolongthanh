<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:42
  from 'module:othomesliderviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e073ac46619_78488823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ebe675065b06b056555d497bb074a98616d7777' => 
    array (
      0 => 'module:othomesliderviewstemplate',
      1 => 1581992400,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e073ac46619_78488823 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['othomeslider']->value['slides']) {?>
  <div class="homeslider-container" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['othomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['othomeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['othomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
    <ul  id="homepage-carousel"  class="slides owl-carousel">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['othomeslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <li class="slide">
         <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
"> <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
" /></a>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }
}
}
