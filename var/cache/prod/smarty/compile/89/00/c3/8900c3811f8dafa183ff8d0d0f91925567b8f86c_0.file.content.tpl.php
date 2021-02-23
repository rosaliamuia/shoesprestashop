<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-09 17:08:03
  from 'C:\xampp\htdocs\prestashop\admin104wnz9zn\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602297439e4f58_46312543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8900c3811f8dafa183ff8d0d0f91925567b8f86c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin104wnz9zn\\themes\\default\\template\\content.tpl',
      1 => 1606911182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602297439e4f58_46312543 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
