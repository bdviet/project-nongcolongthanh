<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:43
  from 'C:\workspace-git\may-cay\themes\ST038\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e073bc162d8_41970203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993c9f18d738152be47b7a94903844fd3f8fcf0a' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\themes\\ST038\\templates\\_partials\\footer.tpl',
      1 => 1582162896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e073bc162d8_41970203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-top"> 
 	<div class="container">
		    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3956944765e4e073bbfcf19_08728726', 'hook_footer_before');
?>

		</div>
	</div>	
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer_inner">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9071179975e4e073bc01440_17874757', 'hook_footer');
?>

	  </div>
    </div>
	<div class="row">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9010931735e4e073bc05659_30032949', 'hook_footer_after');
?>
 
    </div>
  </div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-md-12">
	  	 <div class="row">
			  <div class="footer-bottom-link">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBottom'),$_smarty_tpl ) );?>

			  </div>
		  </div>
	  </div>
    <div class="col-md-12">
		 <div class="row">
		<div class="copyright_outer">
			<div class="copyright">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5344659075e4e073bc0b083_56394632', 'copyright_link');
?>

			</div>
		</div>
		</div>
      </div>
    
	</div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_3956944765e4e073bbfcf19_08728726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_3956944765e4e073bbfcf19_08728726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_9071179975e4e073bc01440_17874757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_9071179975e4e073bc01440_17874757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

	  <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_9010931735e4e073bc05659_30032949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_9010931735e4e073bc05659_30032949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

     <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_5344659075e4e073bc0b083_56394632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_5344659075e4e073bc0b083_56394632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
			  <a class="_blank" href="https://bdviett.blogspot.com/" target="_blank">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'BDVIET™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl ) );?>

			  </a>
			<?php
}
}
/* {/block 'copyright_link'} */
}
