<?php
/* Smarty version 3.1.33, created on 2019-11-30 03:37:00
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\body\banner-area.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1d5cc546f58_10762732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9287b93332d35df1a55cc1e2463993a58b7fe43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\body\\banner-area.tpl',
      1 => 1575081393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1d5cc546f58_10762732 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/website/home-banner/main-banner.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="bold"><?php echo $_smarty_tpl->tpl_vars['app']->value['title'];?>
</span>
                                </h1>
                                <p class="tagline"><?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</p>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/search" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="text" class="text_field" name="key" placeholder="Search Your Keywords e.g script social networks">
                                <button type="submit" name="search" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <?php echo $_smarty_tpl->tpl_vars['head']->value['b_main'];
}
}
