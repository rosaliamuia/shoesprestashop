<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-14 08:52:08
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fffdc0845ba99_49396946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639fdc0e27cf4a5b23b437bcbc4b03997b9c32e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\errors\\not-found.tpl',
      1 => 1606911182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fffdc0845ba99_49396946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7801977215fffdc082aef61_78160530', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_8455474175fffdc08456544_24145901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_20265055205fffdc0845a3c7_09362810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_7801977215fffdc082aef61_78160530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7801977215fffdc082aef61_78160530',
  ),
  'search' => 
  array (
    0 => 'Block_8455474175fffdc08456544_24145901',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_20265055205fffdc0845a3c7_09362810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8455474175fffdc08456544_24145901', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20265055205fffdc0845a3c7_09362810', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
