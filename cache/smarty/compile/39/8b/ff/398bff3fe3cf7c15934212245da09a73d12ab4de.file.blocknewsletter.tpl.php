<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 22:05:57
         compiled from "/var/www/prestashop/themes/simpleresponsivetheme/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1249295510527da293a17639-76609759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398bff3fe3cf7c15934212245da09a73d12ab4de' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249295510527da293a17639-76609759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da293a4d5b3_24323628',
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da293a4d5b3_24323628')) {function content_527da293a4d5b3_24323628($_smarty_tpl) {?>

<section class="three columns mobile-two" id="newsletter_block">
    <h4><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
    <div class="block_content">
        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?>
            <p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post">
            <div class="row collapse">
                <div class="ten mobile-three columns">
                    <input placeholder="<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
" type="email" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?>"/>
                    
                </div>
                <div class="two mobile-one columns">
                    <input type="submit" value="Ok" class="button expand postfix submitNewsletter" name="submitNewsletter" />
                    <input type="hidden" name="action" value="0" />
                </div>
            </div>
        </form>
    </div>
    <div class="align_right">
        <a style="margin-right: 15px;" href="" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
html5.png" alt=""/></a>
        <a href="" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
css3.png" alt=""/></a>
    </div>
</section>
<?php }} ?>