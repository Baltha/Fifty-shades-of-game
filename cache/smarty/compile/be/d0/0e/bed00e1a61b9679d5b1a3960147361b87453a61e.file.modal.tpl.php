<?php /* Smarty version Smarty-3.1.19, created on 2015-03-23 14:11:44
         compiled from "C:\wamp\www\prestashop\admin767ckzam2\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8564551011102bb468-17008513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed00e1a61b9679d5b1a3960147361b87453a61e' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin767ckzam2\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1424796822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8564551011102bb468-17008513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551011102c4de2_15641067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551011102c4de2_15641067')) {function content_551011102c4de2_15641067($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
