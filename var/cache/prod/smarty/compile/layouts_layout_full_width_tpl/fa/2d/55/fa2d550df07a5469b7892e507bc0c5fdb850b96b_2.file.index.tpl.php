<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:41
  from 'C:\workspace-git\may-cay\themes\ST038\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0739c2c9e0_62994399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2d550df07a5469b7892e507bc0c5fdb850b96b' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\themes\\ST038\\templates\\index.tpl',
      1 => 1581992403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0739c2c9e0_62994399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7456920985e4e0739c1ce50_68603269', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15474712575e4e0739c1e885_86945150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4269767215e4e0739c224b7_61776738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15935139665e4e0739c20d84_78588792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4269767215e4e0739c224b7_61776738', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7456920985e4e0739c1ce50_68603269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7456920985e4e0739c1ce50_68603269',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15474712575e4e0739c1e885_86945150',
  ),
  'page_content' => 
  array (
    0 => 'Block_15935139665e4e0739c20d84_78588792',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4269767215e4e0739c224b7_61776738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15474712575e4e0739c1e885_86945150', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15935139665e4e0739c20d84_78588792', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
