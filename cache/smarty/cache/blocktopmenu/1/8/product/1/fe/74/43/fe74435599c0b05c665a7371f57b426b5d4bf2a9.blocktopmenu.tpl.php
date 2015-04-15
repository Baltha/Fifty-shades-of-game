<?php /*%%SmartyHeaderCode:27640551011147c0a28-20826273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe74435599c0b05c665a7371f57b426b5d4bf2a9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\ikon\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1427542520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27640551011147c0a28-20826273',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552e6eb72e3e63_55355408',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e6eb72e3e63_55355408')) {function content_552e6eb72e3e63_55355408($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Catégories</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/prestashop/12-action" title="Action">Action</a></li><li><a href="http://localhost/prestashop/13-aventure" title="Aventure">Aventure</a></li><li><a href="http://localhost/prestashop/14-course" title="Course">Course</a></li><li><a href="http://localhost/prestashop/15-fps" title="Fps">Fps</a></li><li><a href="http://localhost/prestashop/16-gestion" title="Gestion">Gestion</a></li><li><a href="http://localhost/prestashop/17-mmo" title="Mmo">Mmo</a></li><li><a href="http://localhost/prestashop/18-rpg" title="Rpg">Rpg</a></li><li><a href="http://localhost/prestashop/19-strategie" title="Stratégie">Stratégie</a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/prestashop/recherche" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" placeholder="Rechercher..." value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
