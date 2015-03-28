<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:37:23
         compiled from "C:\wamp\www\prestashop\themes\ikon\modules\blocknewproducts\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21872551017138e0fc0-73861343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6776183f7ade8b7db13e71d9c045996d4a48caf' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\modules\\blocknewproducts\\tab.tpl',
      1 => 1427105504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21872551017138e0fc0-73861343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55101713903239_87550949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55101713903239_87550949')) {function content_55101713903239_87550949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>
