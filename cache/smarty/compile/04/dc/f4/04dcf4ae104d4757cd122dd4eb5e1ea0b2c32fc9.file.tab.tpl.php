<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:37:23
         compiled from "C:\wamp\www\prestashop\themes\ikon\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252155101713950a86-54583899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04dcf4ae104d4757cd122dd4eb5e1ea0b2c32fc9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\modules\\homefeatured\\tab.tpl',
      1 => 1427105504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252155101713950a86-54583899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551017139686d0_39904752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551017139686d0_39904752')) {function content_551017139686d0_39904752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
