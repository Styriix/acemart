<?php
/* Smarty version 3.1.33, created on 2019-12-07 02:56:02
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\pack\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5deb06b2eb5311_05941958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b3fece9ac0d4d3c6f6c8f4c2835e7111d7c035' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\pack\\blog.tpl',
      1 => 1575683758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deb06b2eb5311_05941958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['h_blogs']->value) {?>
<section class="latest-news section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>From Our
                        <span class="highlighted">Blogs</span>
                    </h1>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['h_blogs']->value, 'hb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hb']->value) {
?>
            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="news">
                    <div class="news__thumbnail">
                        <img src="<?php if ($_smarty_tpl->tpl_vars['hb']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['hb']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" alt="News Thumbnail">
                    </div>
                    <div class="news__content">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_slug;?>
" class="news-title">
                            <h4><?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_title;?>
</h4>
                        </a>
                        <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['hb']->value->blog_contents),150);?>
</p>
                    </div>
                    <div class="news__meta">
                        <div class="date">
                            <span class="lnr lnr-clock"></span>
                            <p><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['hb']->value->blog_created_at)->format('d M, Y');?>
</p>
                        </div>

                        <div class="other">
                            <ul>
                                <li>
                                    <span class="lnr lnr-user"></span>
                                    <span><?php echo ucfirst($_smarty_tpl->tpl_vars['hb']->value->user_username);?>
</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-eye"></span>
                                    <span><?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_view;?>
</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<?php }
}
}
