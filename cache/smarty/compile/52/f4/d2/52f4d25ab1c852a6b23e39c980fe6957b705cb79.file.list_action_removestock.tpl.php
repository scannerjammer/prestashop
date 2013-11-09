<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 06:42:52
         compiled from "/var/www/prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1176894861527c87ec9f44d6-60539853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f4d25ab1c852a6b23e39c980fe6957b705cb79' => 
    array (
      0 => '/var/www/prestashop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1381174110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1176894861527c87ec9f44d6-60539853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527c87ec9fed15_39861635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c87ec9fed15_39861635')) {function content_527c87ec9fed15_39861635($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>