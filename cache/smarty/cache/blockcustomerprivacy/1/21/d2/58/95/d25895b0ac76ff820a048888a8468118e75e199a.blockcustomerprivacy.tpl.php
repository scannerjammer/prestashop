<?php /*%%SmartyHeaderCode:550644728527dff3ddfbd07-69711952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd25895b0ac76ff820a048888a8468118e75e199a' => 
    array (
      0 => '/var/www/prestashop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1381174110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550644728527dff3ddfbd07-69711952',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527e0a819253c4_72976290',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527e0a819253c4_72976290')) {function content_527e0a819253c4_72976290($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Customer data privacy</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy">The personal data you provide is used to answer queries, process orders or allow access to specific information. You have the right to modify and delete all the personal information found in the &quot;My Account&quot; page. </label>		
</fieldset><?php }} ?>