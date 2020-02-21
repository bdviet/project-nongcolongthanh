<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:42
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e073a6d44c3_64251144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1581992402,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e073a6d44c3_64251144 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
  <div class="user-info">
     <div class="user-icon"> 
     <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> 
     <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span> 
     <?php } else { ?>
     <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span> 
     <?php }?>
     </div>
   <ul class="userinfo-toggle">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li>
      <a
      class="account"
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
"
      rel="nofollow"
      >
      <!--<i class="material-icons hidden-md-up logged">&#xE7FF;</i>-->
      <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a>
      </li>
      <li>
      <a
      class="logout hidden-sm-down"
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      rel="nofollow"
      >
      <!--<i class="material-icons">&#xE7FF;</i>-->
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
      </li>
      
    <?php } else { ?>
      <li>
      <a
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
"
      rel="nofollow"
      >
      <!--<i class="material-icons">&#xE7FF;</i>-->
      <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </a>
      </li>
    <?php }?>
   </ul>
  </div>
</div><?php }
}
