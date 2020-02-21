<?php
/* Smarty version 3.1.33, created on 2020-02-20 11:12:41
  from 'C:\workspace-git\may-cay\themes\ST038\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e0739ce5370_75686570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77894ba8faf21bf078afcbc9698f792eb62232c6' => 
    array (
      0 => 'C:\\workspace-git\\may-cay\\themes\\ST038\\templates\\page.tpl',
      1 => 1581992403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e0739ce5370_75686570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9416059615e4e0739ccf0d1_33488444', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18124172735e4e0739cd2845_83574996 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_9789130755e4e0739cd0b49_61083085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18124172735e4e0739cd2845_83574996', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6056613875e4e0739cda576_24972957 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8651428475e4e0739cdcf36_80815863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1915782005e4e0739cd8e96_04408116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6056613875e4e0739cda576_24972957', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8651428475e4e0739cdcf36_80815863', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8891199065e4e0739ce1a80_58559932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3369250205e4e0739ce0408_72965495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8891199065e4e0739ce1a80_58559932', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9416059615e4e0739ccf0d1_33488444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9416059615e4e0739ccf0d1_33488444',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_9789130755e4e0739cd0b49_61083085',
  ),
  'page_title' => 
  array (
    0 => 'Block_18124172735e4e0739cd2845_83574996',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1915782005e4e0739cd8e96_04408116',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6056613875e4e0739cda576_24972957',
  ),
  'page_content' => 
  array (
    0 => 'Block_8651428475e4e0739cdcf36_80815863',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3369250205e4e0739ce0408_72965495',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8891199065e4e0739ce1a80_58559932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9789130755e4e0739cd0b49_61083085', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1915782005e4e0739cd8e96_04408116', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3369250205e4e0739ce0408_72965495', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
