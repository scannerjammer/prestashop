<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 21:48:51
         compiled from "/var/www/prestashop/modules/responsivehomefeatured/views/templates/hook/responsivehomefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161399178527da293742a06-24524804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56309dae37f27aebd1b48dc74555c0111057c37' => 
    array (
      0 => '/var/www/prestashop/modules/responsivehomefeatured/views/templates/hook/responsivehomefeatured.tpl',
      1 => 1383965284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161399178527da293742a06-24524804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryList' => 0,
    'category' => 0,
    'link' => 0,
    'product' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527da2938148a3_23897229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527da2938148a3_23897229')) {function content_527da2938148a3_23897229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/prestashop/tools/smarty/plugins/modifier.escape.php';
?><div id="featured_products">
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <section class="row">
        <div class="three columns category_description align_justify">
            <div class="border_category_description italic">
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['category']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['category']->name;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category']->name;?>
</a></h3>
                <p><?php echo strip_tags($_smarty_tpl->tpl_vars['category']->value['category']->description);?>
</p>
            </div>
        </div>
        <div class="nine columns products_content">
            <div class="border_products_content">
                <?php if (isset($_smarty_tpl->tpl_vars['category']->value['products'])&&$_smarty_tpl->tpl_vars['category']->value['products']){?>
                    <ul class="product_list block-grid three-up mobile-two-up">
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                        <li class="ajax_block_product">
                            <a class="product_image" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['product']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product']->name, 'html', 'UTF-8');?>
">
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['product']->show_price)&&$_smarty_tpl->tpl_vars['product']->value['product']->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                                    <span class="advert"><?php echo smartyTranslate(array('s'=>'Reduced price !','mod'=>'responsivehomefeatured'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" height="205" width="205" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product']->name, 'html', 'UTF-8');?>
" />
                            </a>
                            <h5 class="align_center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['product']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product']->name, 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product']->name,30,'...'), 'htmlall', 'UTF-8');?>
</a>
                            </h5>
                            <div class="product_price align_center">
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['product']->show_price)&&$_smarty_tpl->tpl_vars['product']->value['product']->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                                    <span class="price">
                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_inc']),$_smarty_tpl);?>

                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['product']->price),$_smarty_tpl);?>

                                        <?php }?>
                                    </span>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction'])){?>
                                        <span class="original_price">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

                                        </span>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <div class="align_justify italic product_description_short">
                                <?php echo strip_tags($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product']->description_short,150,'...'));?>

                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                <?php }else{ ?>
                    <p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'responsivehomefeatured'),$_smarty_tpl);?>
</p>
                <?php }?>
            </div>
        </div>
    </section>
    <?php } ?>
</div>
<?php }} ?>