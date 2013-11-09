<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 21:48:51
         compiled from "/var/www/prestashop/modules/responsivelinks/views/templates/hook/responsivelinkstop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328755375527da29305c5e6-67799754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b64e19cc055bf2bac83e71f9c2e0d1454c645d2' => 
    array (
      0 => '/var/www/prestashop/modules/responsivelinks/views/templates/hook/responsivelinkstop.tpl',
      1 => 1383965284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328755375527da29305c5e6-67799754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'responsiveLinks' => 0,
    'responsiveLink' => 0,
    'first_link_link' => 0,
    'come_from' => 0,
    'first_link_name' => 0,
    'child' => 0,
    'other_link_link' => 0,
    'other_link_name' => 0,
    'other_link_all' => 0,
    'other_link' => 0,
    'first_link' => 0,
    'ENT_QUOTES' => 0,
    'instantsearch' => 0,
    'search_ssl' => 0,
    'cookie' => 0,
    'ajaxsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da293267717_75738913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da293267717_75738913')) {function content_527da293267717_75738913($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?><header id="header" class="row">
    <div class="twelve columns align_center" id="header_logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
" <?php }?> />
        </a>
    </div>

    <div id="responsive_links_top" class="twelve columns">
        <div class="contain-to-grid">
            <nav class="top-bar">
            <?php $_smarty_tpl->tpl_vars["first_link"] = new Smarty_variable('', null, 0);?>
            <?php $_smarty_tpl->tpl_vars["other_link_all"] = new Smarty_variable('', null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['responsiveLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['responsiveLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['responsiveLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['responsiveLink']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['responsiveLink']->key => $_smarty_tpl->tpl_vars['responsiveLink']->value){
$_smarty_tpl->tpl_vars['responsiveLink']->_loop = true;
 $_smarty_tpl->tpl_vars['responsiveLink']->index++;
 $_smarty_tpl->tpl_vars['responsiveLink']->first = $_smarty_tpl->tpl_vars['responsiveLink']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navResponsiveLink']['first'] = $_smarty_tpl->tpl_vars['responsiveLink']->first;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navResponsiveLink']['first']){?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('links', 'first_link', null); ob_start(); ?>
                        <?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable('', null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_category!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable($_tmp1, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable($_tmp2, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable($_tmp3, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->meta_title;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable($_tmp4, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms_category!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable($_tmp5, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable($_tmp6, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_product!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable($_tmp7, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable($_tmp8, null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['first_link_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->url, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['first_link_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->title, null, 0);?>
                        <?php }?>

                        <ul>
                            <li class="name <?php if ($_smarty_tpl->tpl_vars['first_link_link']->value==$_smarty_tpl->tpl_vars['come_from']->value){?>active<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['responsiveLink']->value['subLinks'])){?>has-dropdown<?php }?>">
                                <h1>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['first_link_link']->value;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['first_link_name']->value;?>

                                    </a>
                                </h1>
                                <ul class="dropdown">
                                    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['responsiveLink']->value['subLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['subLink']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['subLink']['last']){?>
                                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

                                        <?php }?>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li class="toggle-topbar"><a class="button-toggle" href="#"></a></li>
                        </ul>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }else{ ?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('links', 'other_link', null); ob_start(); ?>
                        <?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable('', null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable('', null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_category!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp9=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable($_tmp9, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp10=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable($_tmp10, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable($_tmp11, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->meta_title;?>
<?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable($_tmp12, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_cms_category!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable($_tmp13, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable($_tmp14, null, 0);?>
                        <?php }elseif($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->id_product!=0){?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable($_tmp15, null, 0);?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['responsiveLink']->value['objectLink']->name;?>
<?php $_tmp16=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable($_tmp16, null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['other_link_link'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->url, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['other_link_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['responsiveLink']->value['responsiveLinkObject']->title, null, 0);?>
                        <?php }?>

                        <li class="<?php if ($_smarty_tpl->tpl_vars['other_link_link']->value==$_smarty_tpl->tpl_vars['come_from']->value){?>active<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['responsiveLink']->value['subLinks'])){?> has-dropdown<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['other_link_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['other_link_name']->value;?>
</a>
                            <ul class="dropdown">
                                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['responsiveLink']->value['subLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['subLink']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['subLink']['last']){?>
                                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                                    <?php }else{ ?>
                                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

                                    <?php }?>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php $_smarty_tpl->tpl_vars["other_link_all"] = new Smarty_variable(($_smarty_tpl->tpl_vars['other_link_all']->value).($_smarty_tpl->tpl_vars['other_link']->value), null, 0);?>
                <?php }?>
            <?php } ?>
            <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>

            <section>
                <!-- Left Nav Section -->
                <ul class="left">
                    <?php echo $_smarty_tpl->tpl_vars['other_link_all']->value;?>

                </ul>
                <!-- Right Nav Section -->
                <ul class="right">
                  <li class="last">
                      <div id="search_bar" class="twelve mobile-three columns end">
                        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search.php',true);?>
" id="searchbox">
                            <input type="hidden" name="controller" value="search" />
                            <input type="hidden" name="orderby" value="position" />
                            <input type="hidden" name="orderway" value="desc" />
                            <input placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'responsivelinks'),$_smarty_tpl);?>
" class="search_query" type="text" id="search_query_block" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
                        </form>
                      </div>
                  </li>
                </ul>
              </section>
            </nav>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['instantsearch']->value){?>
        <script type="text/javascript">
            // <![CDATA[
            
            function tryToCloseInstantSearch() {
                if ($('#old_center_column').length > 0)
                {
                    $('#center_column').remove();
                    $('#old_center_column').attr('id', 'center_column');
                    $('#center_column').show();
                    return false;
                }
            }

            instantSearchQueries = new Array();
            function stopInstantSearchQueries(){
                for(i=0;i<instantSearchQueries.length;i++) {
                    instantSearchQueries[i].abort();
                }
                instantSearchQueries = new Array();
            }

            $("#search_query_block").keyup(function(){
                if ($(this).val().length > 0) {
                    stopInstantSearchQueries();
                    instantSearchQuery = $.ajax({
                        url: '<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
<?php }?>',
                        data: {
                            instantSearch: 1,
                            id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>
,
                            q: $(this).val()
                        },
                        dataType: 'html',
                        type: 'POST',
                        success: function(data){
                            if ($("#search_query_block").val().length > 0) {
                                tryToCloseInstantSearch();
                                $('#center_column').attr('id', 'old_center_column');
                                $('#old_center_column').after('<section id="center_column" class="twelve columns">'+data+'</section>');
                                $('#old_center_column').hide();
                                $("#instant_search_results a.close").click(function() {
                                    $("#search_query_block").val('');
                                    return tryToCloseInstantSearch();
                                });
                                return false;
                            }
                            else
                                tryToCloseInstantSearch();
                        }
                    });
                    instantSearchQueries.push(instantSearchQuery);
                }
                else
                    tryToCloseInstantSearch();
            });
            // ]]>
            
        </script>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['ajaxsearch']->value){?>
        <script type="text/javascript">
            // <![CDATA[
            
            $('document').ready( function() {
                $("#search_query_block")
                        .autocomplete(
                        '<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
<?php }?>', {
                            minChars: 3,
                            max: 10,
                            width: 500,
                            selectFirst: false,
                            scroll: false,
                            dataType: "json",
                            formatItem: function(data, i, max, value, term) {
                                return value;
                            },
                            parse: function(data) {
                                var mytab = new Array();
                                for (var i = 0; i < data.length; i++)
                                    mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
                                return mytab;
                            },
                            extraParams: {
                                ajaxSearch: 1,
                                id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>

                            }
                        }
                )
                        .result(function(event, data, formatted) {
                            $('#search_query_block').val(data.pname);
                            document.location.href = data.product_link;
                        })
            });
            
            // ]]>
        </script>
    <?php }?>
</header><?php }} ?>