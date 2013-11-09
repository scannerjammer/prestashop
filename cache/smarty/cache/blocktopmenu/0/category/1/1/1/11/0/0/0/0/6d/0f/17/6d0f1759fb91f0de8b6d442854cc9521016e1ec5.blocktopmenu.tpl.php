<?php /*%%SmartyHeaderCode:1111503935527c9365ec3f93-39974012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d0f1759fb91f0de8b6d442854cc9521016e1ec5' => 
    array (
      0 => '/var/www/prestashop/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1381174110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111503935527c9365ec3f93-39974012',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527e0b3dc7b2b7_07802144',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527e0b3dc7b2b7_07802144')) {function content_527e0b3dc7b2b7_07802144($_smarty_tpl) {?>	
	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<li><a href="http://my.prestashop/index.php?id_cms=1&amp;controller=cms">Delivery</a></li>
<li><a href="http://my.prestashop/index.php?id_cms=2&amp;controller=cms">Legal Notice</a></li>

							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://my.prestashop/index.php?controller=search" method="get">
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
	<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }} ?>