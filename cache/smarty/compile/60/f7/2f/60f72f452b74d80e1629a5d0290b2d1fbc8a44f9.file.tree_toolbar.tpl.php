<?php /* Smarty version Smarty-3.1.19, created on 2015-03-31 14:52:10
         compiled from "C:\wamp\www\prestashop\admin767ckzam2\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24624551a987ac784b6-79082057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f72f452b74d80e1629a5d0290b2d1fbc8a44f9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin767ckzam2\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1424796822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24624551a987ac784b6-79082057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551a987ad9aaf1_68325842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a987ad9aaf1_68325842')) {function content_551a987ad9aaf1_68325842($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
