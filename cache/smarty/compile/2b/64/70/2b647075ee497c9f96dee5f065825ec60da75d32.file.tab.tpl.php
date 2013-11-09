<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 22:09:45
         compiled from "/var/www/prestashop/themes/simpleresponsivetheme/modules/productcomments/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009551484527da7799569c5-06629139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b647075ee497c9f96dee5f065825ec60da75d32' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/modules/productcomments/tab.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009551484527da7799569c5-06629139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da77995ecf5_68722180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da77995ecf5_68722180')) {function content_527da77995ecf5_68722180($_smarty_tpl) {?>

<li><a href="#idTab5" class="idTabHrefShort"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
)</a></li><?php }} ?>