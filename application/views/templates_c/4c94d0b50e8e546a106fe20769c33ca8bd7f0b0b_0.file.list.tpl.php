<?php
/* Smarty version 3.1.33, created on 2019-12-06 23:44:39
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\blog\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dead9d7ce98d7_85897217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c94d0b50e8e546a106fe20769c33ca8bd7f0b0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\blog\\list.tpl',
      1 => 1575672272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dead9d7ce98d7_85897217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20840501745dead9d7bf24c4_09328388', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blog.tpl");
}
/* {block 'contents'} */
class Block_20840501745dead9d7bf24c4_09328388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_20840501745dead9d7bf24c4_09328388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
                            <a href="#">Blogs</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Our Blogs</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<?php if ($_smarty_tpl->tpl_vars['blogs']->value) {?>
<section class="blog_area section--padding2">
    <div class="container">
        <div class="row" data-uk-grid>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
            <div class="col-lg-4 col-md-6">
                <div class="single_blog blog--card">
                    <figure>
                        <img src="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" alt="Blog image">

                        <figcaption>
                            <div class="blog__content">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
" class="blog__title">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</h4>
                                </a>
                                <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value->blog_contents),150);?>
</p>
                            </div>

                            <div class="blog__meta">
                                <div class="date_time">
                                    <span class="lnr lnr-clock"></span>
                                    <p><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M Y');?>
</p>
                                </div>
                                <div class="comment_view">
                                    <p class="comment">
                                        <span class="lnr lnr-user"></span><?php echo ucfirst($_smarty_tpl->tpl_vars['blog']->value->user_username);?>
</p>
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_view;?>
</p>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end /.single_blog -->
            </div>
            <!-- end /.col-md-4 -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

            </div>  
        </div>
    </div>
    <!-- end /.container -->
</section>
<?php }?>
    
<?php
}
}
/* {/block 'contents'} */
}
