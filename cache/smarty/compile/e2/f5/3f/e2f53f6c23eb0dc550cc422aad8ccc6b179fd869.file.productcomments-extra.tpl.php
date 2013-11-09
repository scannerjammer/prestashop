<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 22:09:45
         compiled from "/var/www/prestashop/themes/simpleresponsivetheme/modules/productcomments/productcomments-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115146363527da7798eff05-94115572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f53f6c23eb0dc550cc422aad8ccc6b179fd869' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/modules/productcomments/productcomments-extra.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115146363527da7798eff05-94115572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'nbComments' => 0,
    'averageTotal' => 0,
    'too_early' => 0,
    'allow_guests' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da77994b343_98414814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da77994b343_98414814')) {function content_527da77994b343_98414814($_smarty_tpl) {?> 
<script type="text/javascript">
$(function(){
    $('a[href=#idTab5]').click(function(){
        $('*[id^="idTab"]').addClass('block_hidden_only_for_screen');
        $('div#idTab5').removeClass('block_hidden_only_for_screen');

        $('ul#more_info_tabs a[href^="#idTab"]').removeClass('selected');
        $('a[href="#idTab5"]').addClass('selected');
    });

    
    var starsContent = $('.comments_note').clone();
    starsContent.addClass('comment_top');
    starsContent.css('left', ($('#product-title').innerWidth() + 22)+'px');
    $('#product-information').append(starsContent);
});
</script>

<?php if ($_smarty_tpl->tpl_vars['logged']->value==1||$_smarty_tpl->tpl_vars['nbComments']->value!=0){?>
    </div><!-- Close the OosHook -->
        <div id="product_comments_block_extra" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0){?>
                <div class="comments_note clearfix">
                    <div class="star_content clearfix">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
                        <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']){?>
                            <div class="star"></div>
                        <?php }else{ ?>
                            <div class="star star_on"></div>
                        <?php }?>
                    <?php endfor; endif; ?>
                    </div>
                    <span>&nbsp<?php echo smartyTranslate(array('s'=>'Average grade','mod'=>'productcomments'),$_smarty_tpl);?>
</span> <span itemprop="ratingValue"><?php echo $_smarty_tpl->tpl_vars['averageTotal']->value;?>
</span>
                </div>
            <?php }?>

            <div class="comments_advices">
                <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0){?>
                    <a href="#idTab5"><?php echo smartyTranslate(array('s'=>'Read user reviews','mod'=>'productcomments'),$_smarty_tpl);?>
 (<span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span>)</a><br/>
                <?php }else{ ?>

                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))){?>
                    <a class="open-comment-form"><?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>
</a>
                <?php }else{ ?>
                    <div>
                        <?php echo smartyTranslate(array('s'=>'Write your review','mod'=>'productcomments'),$_smarty_tpl);?>

                        <span class="comments_count"><b>0</b> <?php echo smartyTranslate(array('s'=>'comments','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
                    </div>
                <?php }?>
            </div>
        </div>
    <div><!-- new div for the next content if any -->
<?php }?>
<!--  /Module ProductComments --><?php }} ?>