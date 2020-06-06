<?php
/* Smarty version 3.1.33, created on 2019-12-01 05:08:12
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\body\banner-sec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de33cac730589_40581088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350c4672a332955a9a8a9a7c20610037673be626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\body\\banner-sec.tpl',
      1 => 1575081413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de33cac730589_40581088 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/website/home-banner/main-banner.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</h3>
                            </div>
                            <div class="search__field">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/search" method="POST">
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" name="key" type="text" placeholder="Search your products">
                                        <button class="btn btn--round" name="search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'category') {?>
                                    <li class="active">
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['main_cats']->value->main_cat_name;?>
</a>
                                    </li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['url_1']->value == 'subcategory') {?>
                                    <li class="active">
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value->sub_cat_name;?>
</a>
                                    </li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['url_1']->value == 'childcat') {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subcategory/<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value->sub_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value->sub_cat_name;?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['child_cat']->value->child_cat_name;?>
</a>
                                    </li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['url_1']->value == 'pages') {?>
                                    <li class="active">
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['page']->value->page_name;?>
</a>
                                    </li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['url_1']->value == 'contact') {?>
                                    <li class="active">
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->

    </section>
    <?php echo $_smarty_tpl->tpl_vars['head']->value['b_main'];
}
}
