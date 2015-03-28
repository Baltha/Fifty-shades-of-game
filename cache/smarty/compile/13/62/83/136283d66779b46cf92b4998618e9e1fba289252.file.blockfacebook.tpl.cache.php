<?php /* Smarty version Smarty-3.1.19, created on 2015-03-28 12:11:06
         compiled from "C:\wamp\www\prestashop\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7735551011149e3123-49431171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136283d66779b46cf92b4998618e9e1fba289252' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1427541064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7735551011149e3123-49431171',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55101114a00023_40472866',
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55101114a00023_40472866')) {function content_55101114a00023_40472866($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/MyPresta&amp;width=332&amp;height=253&amp;colorscheme=light&amp;show_faces=1&amp;show_border=false&amp;stream=0&amp;header=0&amp;appId=112465995526913" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:332px; height:233px;" allowtransparency="true"></iframe>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
