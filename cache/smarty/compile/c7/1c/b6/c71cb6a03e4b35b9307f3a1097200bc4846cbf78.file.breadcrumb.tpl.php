<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 22:09:46
         compiled from "/var/www/prestashop/themes/simpleresponsivetheme/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784083910527da77a7f6967-52335195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71cb6a03e4b35b9307f3a1097200bc4846cbf78' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/breadcrumb.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784083910527da77a7f6967-52335195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'img_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da77a8422f3_80179732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da77a8422f3_80179732')) {function content_527da77a8422f3_80179732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'return to Home'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home2.gif" height="26" width="10" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" /></a>
    <?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
        <span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
        <?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
            <span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

        <?php }?>
    <?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>