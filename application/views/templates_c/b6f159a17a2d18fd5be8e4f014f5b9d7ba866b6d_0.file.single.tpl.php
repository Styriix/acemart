<?php
/* Smarty version 3.1.33, created on 2019-12-07 00:49:45
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\blog\single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5deae9190dd379_58986950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f159a17a2d18fd5be8e4f014f5b9d7ba866b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\blog\\single.tpl',
      1 => 1575676180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deae9190dd379_58986950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8656701755deae9190126d9_27763452', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blog-show.tpl");
}
/* {block 'contents'} */
class Block_8656701755deae9190126d9_27763452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_8656701755deae9190126d9_27763452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

    
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                        </li>
                        <li class="active">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="blog_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_blog blog--default">
                    <article>
                        <figure>
                            <img src="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" alt="Blog image">
                        </figure>
                        <div class="blog__content">
                            <a href="#" class="blog__title">
                                <h4><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</h4>
                            </a>

                            <div class="blog__meta">
                                <div class="author">
                                    <span class="lnr lnr-user"></span>
                                    <p>by
                                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['blog']->value->user_username;?>
</a>
                                    </p>
                                </div>
                                <div class="date_time">
                                    <span class="lnr lnr-clock"></span>
                                    <p><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M Y');?>
</p>
                                </div>
                                <div class="comment_view">
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_view;?>
</p>
                                </div>
                            </div>
                        </div>

                        <div class="single_blog_content">
                            <?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_contents;?>

                            <div class="share_tags">
                                <div class="share">
                                    <div class="social_share active">
                                        <ul class="social_icons">
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
&text=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
=<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['no']-'img';
}?>&description=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
", target="_blank">
                                                    <span class="fa fa-pinterest"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
&title=<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end social_share -->
                                </div>
                                <!-- end bog_share_ara  -->
                            </div>
                        </div>
                    </article>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['cmt']->value->blog_cmt_code)) {?>
                <div class="comment_area">
                    <div class="comment__title">
                        <h4>comments</h4>
                    </div>
                    <div class="comment___wrapper">
                       <div class="comment___wrapper" id="disqus_thread"></div>
                        <?php echo $_smarty_tpl->tpl_vars['cmt']->value->blog_cmt_code;?>


                    </div>
                    <!-- end /.comment___wrapper -->
                </div>
                <!-- end /.col-md-8 -->
                <?php }?>

            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--blog">

                    <div class="sidebar-card sidebar--post card--blog_sidebar">
                        <div class="card-title">
                            <!-- Nav tabs -->
                            <ul class="nav post-tab" role="tablist">
                                <li>
                                    <a href="#popular" id="popular-tab" class="active" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Popular Posts</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab">
                                    <?php if ($_smarty_tpl->tpl_vars['recents']->value) {?>
                                    <ul class="post-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recents']->value, 'res');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="<?php if ($_smarty_tpl->tpl_vars['res']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['res']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['res']->value->blog_slug;?>
">
                                                    <h4><?php echo $_smarty_tpl->tpl_vars['res']->value->blog_title;?>
</h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M, Y');?>
</p>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <?php }?>
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->

                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <!-- end /.banner -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>

<?php
}
}
/* {/block 'contents'} */
}
