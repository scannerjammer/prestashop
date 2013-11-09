<?php /* Smarty version Smarty-3.1.14, created on 2013-11-09 00:02:58
         compiled from "/var/www/prestashop/themes/simpleresponsivetheme/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261859248527da293b50644-69922120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87871348c4b0205fcedf844886a389548bbc76cd' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/footer.tpl',
      1 => 1383973376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261859248527da293b50644-69922120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da293b76285_84544154',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da293b76285_84544154')) {function content_527da293b76285_84544154($_smarty_tpl) {?>

        <?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
                </section>

                <section id="sidebar" role="complementary">
                    <?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

                </section>
            </div>

            <footer id="footer">
                <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                </div>

                <div id="footer_bottom" class="row">
                    <section class="twelve columns">
                        © <?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
. <?php echo smartyTranslate(array('s'=>'All Rights Reserved'),$_smarty_tpl);?>
.
                    </section>
                </div>
            </footer>
        </div>
    <?php }?>
    </body>
</html>
<?php }} ?>