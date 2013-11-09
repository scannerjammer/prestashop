<?php /*%%SmartyHeaderCode:1187103836527da293350755-60007929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae14ccffd585e869b99da4c1db0ccd80b3d4a198' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/modules/blockcategories/blockcategories.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
    'd00eb585fc1ac702c721e1a680d06183fd3b6cc6' => 
    array (
      0 => '/var/www/prestashop/themes/simpleresponsivetheme/modules/blockcategories/category-tree-branch.tpl',
      1 => 1383966231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187103836527da293350755-60007929',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527e05df5dc126_70443932',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527e05df5dc126_70443932')) {function content_527e05df5dc126_70443932($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
    <h4 class="title_block">Categories</h4>
    <ul class="tree dhtml">
                        <li >
    <a href="http://my.prestashop/index.php?id_category=10&amp;controller=category"  title="">T SHIRTS</a>
    </li>

                                <li >
    <a href="http://my.prestashop/index.php?id_category=13&amp;controller=category"  title="">STICKERS</a>
    </li>

                                <li >
    <a href="http://my.prestashop/index.php?id_category=11&amp;controller=category"  title="">MIXTAPES AND CDS</a>
    </li>

                                <li class="last">
    <a href="http://my.prestashop/index.php?id_category=12&amp;controller=category" class="selected" title="">BOOKS</a>
    </li>

                </ul>
    
    <script type="text/javascript">
    // <![CDATA[
        // we hide the tree only if JavaScript is activated
        $('div#categories_block_left ul.dhtml').hide();
    // ]]>
    </script>
</div>
<!-- /Block categories module -->
<?php }} ?>