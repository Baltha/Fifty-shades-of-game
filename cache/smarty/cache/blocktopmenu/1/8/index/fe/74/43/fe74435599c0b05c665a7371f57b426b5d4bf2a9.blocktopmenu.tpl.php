<?php /*%%SmartyHeaderCode:27640551011147c0a28-20826273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe74435599c0b05c665a7371f57b426b5d4bf2a9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1427105504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27640551011147c0a28-20826273',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5516893210fba4_81345841',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5516893210fba4_81345841')) {function content_5516893210fba4_81345841($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Catégories</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="" title="ACTION">ACTION</a></li>
<li><a href="" title="AVENTURE">AVENTURE</a></li>
<li><a href="" title="COURSE">COURSE</a></li>
<li><a href="" title="FPS">FPS</a></li>
<li><a href="" title="GESTION">GESTION</a></li>
<li><a href="" title="MMO">MMO</a></li>
<li><a href="" title="RPG">RPG</a></li>
<li><a href="" title="STRAT&Eacute;GIE">STRAT&Eacute;GIE</a></li>

							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/prestashop/recherche" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
