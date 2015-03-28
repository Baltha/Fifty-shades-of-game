<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:35:42
         compiled from "C:\wamp\www\prestashop\modules\likeboxfree\rightcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26898551016ae453f57-04345714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47507fed5ab1b58d5a782ca6b28edd966df10873' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\likeboxfree\\rightcolumn.tpl',
      1 => 1427117552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26898551016ae453f57-04345714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'likebox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551016ae5dba52_44193181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551016ae5dba52_44193181')) {function content_551016ae5dba52_44193181($_smarty_tpl) {?><div style="display:block; clear:both; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_bordercolor'];?>
; <?php if ($_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_bgon']==1) {?>background:#<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_bgcolor'];?>
;<?php }?>">
<iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_fanpageurl'];?>
&amp;width=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_width'];?>
&amp;height=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_height'];?>
&amp;colorscheme=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_colorscheme'];?>
&amp;show_faces=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_showfaces'];?>
&amp;show_border=false&amp;stream=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_showstream'];?>
&amp;header=<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_showheader'];?>
&amp;appId=112465995526913" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_width'];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['likebox']->value['likeboxfree_height'];?>
px;" allowTransparency="true"></iframe>
</div>   <?php }} ?>
