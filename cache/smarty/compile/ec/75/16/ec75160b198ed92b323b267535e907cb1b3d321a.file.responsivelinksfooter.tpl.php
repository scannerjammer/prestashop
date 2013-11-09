<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 21:48:51
         compiled from "/var/www/prestashop/modules/responsivelinks/views/templates/hook/responsivelinksfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1313881016527da29382f2c8-83107681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec75160b198ed92b323b267535e907cb1b3d321a' => 
    array (
      0 => '/var/www/prestashop/modules/responsivelinks/views/templates/hook/responsivelinksfooter.tpl',
      1 => 1383965284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1313881016527da29382f2c8-83107681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerLinks' => 0,
    'responsiveLink' => 0,
    'link' => 0,
    'link_link' => 0,
    'link_name' => 0,
    'browse_links' => 0,
    'onLink' => 0,
    'siteinfo_links' => 0,
    'responsiveLinksConfiguration' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da2939e71b0_77567348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da2939e71b0_77567348')) {function content_527da2939e71b0_77567348($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["browse_links"] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars["siteinfo_links"] = new Smarty_variable('', null, 0);?>
<?php  $_smarty_tpl->tpl_vars['responsiveLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responsiveLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footerLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['responsiveLink']->key => $_smarty_tpl->tpl_vars['responsiveLink']->value){
$_smarty_tpl->tpl_vars['responsiveLink']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->page_category_column==1){?>
        <?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable('', null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_category!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp1, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp2, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp3, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->meta_title;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp4, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms_category!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp5, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp6, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_product!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp7, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp8, null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->url, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->title, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('links', 'onLink', null); ob_start(); ?>
            <li></li><a href="<?php echo $_smarty_tpl->tpl_vars['link_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['link_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_name']->value;?>
</a></li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->tpl_vars["browse_links"] = new Smarty_variable(($_smarty_tpl->tpl_vars['browse_links']->value).($_smarty_tpl->tpl_vars['onLink']->value), null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable('', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable('', null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_category!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp9, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp10, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp11, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->meta_title;?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp12, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms_category!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp13, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp14, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_product!=0){?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_tmp15, null, 0);?>
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_tmp16, null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['link_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->url, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['link_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->title, null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('links', 'onLink', null); ob_start(); ?>
            <li></li><a href="<?php echo $_smarty_tpl->tpl_vars['link_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['link_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_name']->value;?>
</a></li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->tpl_vars["siteinfo_links"] = new Smarty_variable(($_smarty_tpl->tpl_vars['siteinfo_links']->value).($_smarty_tpl->tpl_vars['onLink']->value), null, 0);?>
    <?php }?>
<?php } ?>

<section class="three columns mobile-two">
    <h4><?php echo smartyTranslate(array('s'=>'Browse','mod'=>'responsivelinks'),$_smarty_tpl);?>
</h4>
    <?php if ($_smarty_tpl->tpl_vars['browse_links']->value==''){?>
        <div class="alert-box">
            <?php echo smartyTranslate(array('s'=>'No links found','mod'=>'responsivelinks'),$_smarty_tpl);?>

            <a href="" class="close">&times;</a>
        </div>
    <?php }else{ ?>
        <ul class="clearfix">
            <?php echo $_smarty_tpl->tpl_vars['browse_links']->value;?>

        </ul>
    <?php }?>
</section>

<section class="three columns mobile-two">
    <h4><?php echo smartyTranslate(array('s'=>'Site Info','mod'=>'responsivelinks'),$_smarty_tpl);?>
</h4>
    <?php if ($_smarty_tpl->tpl_vars['siteinfo_links']->value==''){?>
        <div class="alert-box">
            <?php echo smartyTranslate(array('s'=>'No links found','mod'=>'responsivelinks'),$_smarty_tpl);?>

            <a href="" class="close">&times;</a>
        </div>
    <?php }else{ ?>
        <ul class="clearfix">
            <?php echo $_smarty_tpl->tpl_vars['siteinfo_links']->value;?>

        </ul>
    <?php }?>
</section>

<section class="three columns mobile-two" id="follow_us_footer">
    <h4><?php echo smartyTranslate(array('s'=>'Follow Us...','mod'=>'responsivelinks'),$_smarty_tpl);?>
</h4>
    <ul class="clearfix">
        <?php if (isset($_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value)&&$_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWFACEBOOK']['option']==1){?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWFACEBOOK']['value'];?>
" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'responsivelinks'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
social-facebook.png" alt="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'responsivelinks'),$_smarty_tpl);?>
" width="38" height="38"/></a>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value)&&$_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWYOUTUBE']['option']==1){?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWYOUTUBE']['value'];?>
" title="<?php echo smartyTranslate(array('s'=>'YouTube','mod'=>'responsivelinks'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
social-youtube.png" alt="<?php echo smartyTranslate(array('s'=>'YouTube','mod'=>'responsivelinks'),$_smarty_tpl);?>
" width="38" height="38"/></a>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value)&&$_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWTWITTER']['option']==1){?>
            <li class="last">
                <a href="<?php echo $_smarty_tpl->tpl_vars['responsiveLinksConfiguration']->value['FOLLOWTWITTER']['value'];?>
" title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'responsivelinks'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
social-twitter.png" alt="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'responsivelinks'),$_smarty_tpl);?>
" width="38" height="38"/></a>
            </li>
        <?php }?>
    </ul>
</section>
<?php }} ?>