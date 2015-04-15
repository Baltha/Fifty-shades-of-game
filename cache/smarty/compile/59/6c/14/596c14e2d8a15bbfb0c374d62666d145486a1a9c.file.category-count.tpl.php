<?php /* Smarty version Smarty-3.1.19, created on 2015-03-31 14:59:57
         compiled from "C:\wamp\www\prestashop\themes\ikon\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11153551a9a4dbd6089-96586719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596c14e2d8a15bbfb0c374d62666d145486a1a9c' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\category-count.tpl',
      1 => 1427105502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11153551a9a4dbd6089-96586719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551a9a4dc07237_76926961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a9a4dc07237_76926961')) {function content_551a9a4dc07237_76926961($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
