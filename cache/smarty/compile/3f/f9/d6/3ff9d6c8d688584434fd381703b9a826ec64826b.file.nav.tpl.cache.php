<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:11:50
         compiled from "C:\wamp\www\prestashop\themes\ikon\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20288551011163a0df5-69910782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff9d6c8d688584434fd381703b9a826ec64826b' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\modules\\blockcontact\\nav.tpl',
      1 => 1427105504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20288551011163a0df5-69910782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551011163bebb5_28324282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551011163bebb5_28324282')) {function content_551011163bebb5_28324282($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>
