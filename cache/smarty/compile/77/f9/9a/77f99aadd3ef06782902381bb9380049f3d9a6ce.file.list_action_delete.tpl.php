<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:40:03
         compiled from "C:\wamp\www\prestashop\admin767ckzam2\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5524551017b34b0ea6-22702476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f99aadd3ef06782902381bb9380049f3d9a6ce' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin767ckzam2\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1424796822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5524551017b34b0ea6-22702476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551017b3514f16_59641022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551017b3514f16_59641022')) {function content_551017b3514f16_59641022($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
