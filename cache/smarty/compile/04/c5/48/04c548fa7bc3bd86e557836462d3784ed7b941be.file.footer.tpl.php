<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:11:54
         compiled from "C:\wamp\www\prestashop\themes\ikon\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206365510111ad2ec87-65169286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c548fa7bc3bd86e557836462d3784ed7b941be' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\footer.tpl',
      1 => 1427116074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206365510111ad2ec87-65169286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5510111ad65240_74041108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5510111ad65240_74041108')) {function content_5510111ad65240_74041108($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	// <script>
	// (function(){						
	// 		$('.toggle-link-open').click(function(){		
	// 			$('.footer-container').slideDown(500,"easeOutBounce").delay(100);
	// 		});		
	// })();
	// (function(){						
	// 		$('.toggle-link-close').click(function(){		
	// 			$('.footer-container').slideUp(500,"easeOutBounce").delay(100);
	// 		});		
	// })();
	// </script>
	</body>
</html><?php }} ?>
