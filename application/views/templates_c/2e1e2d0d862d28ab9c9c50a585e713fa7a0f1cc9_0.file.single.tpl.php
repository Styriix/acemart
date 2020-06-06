<?php
/* Smarty version 3.1.33, created on 2019-12-06 06:15:18
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\blog\single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9e3e619ece5_41513420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1e2d0d862d28ab9c9c50a585e713fa7a0f1cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\blog\\single.tpl',
      1 => 1575609313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9e3e619ece5_41513420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1614659665de9e3e5ed8266_44274833', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blog-show.tpl");
}
/* {block 'contents'} */
class Block_1614659665de9e3e5ed8266_44274833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_1614659665de9e3e5ed8266_44274833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<div class="pagination-area bg-secondary">
<div class="container">
    <div class="pagination-wrapper">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
            <li>Blog</li>
            <li><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</li>
        </ul>
    </div>
</div>  
</div>

<div class="single-blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <h2 class="title-section"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</h2>
                <div class="inner-page-details inner-page-padding">
                    <div class="single-blog-wrapper">
                        <div class="single-blog-img-holder">
                            <a href="#"><img src="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" alt="blog" class="img-responsive"></a>
                            <ul class="news-date1">
                                <li><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M');?>
</li>
                                <li><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('Y');?>
</li>
                            </ul>
                        </div>
                        <ul class="news-comments">
                            <li><a href="javascript:void();"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> <?php echo ucfirst($_smarty_tpl->tpl_vars['blog']->value->user_username);?>
</a></li>
                            <li><a href="#"><i class="fa fa-folder" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value->bc_name;?>
</a></li>
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>(<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_view;?>
)</span> Views</a></li>
                        </ul>
                        <div class="single-blog-content-holder">
                            <?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_contents;?>

                        </div>
                        
                        <ul class="tag-share">
                            
                            <li>
                                <ul class="inner-share">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
&text=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
=<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['no']-'img';
}?>&description=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
", target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
&title=<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>
                        </ul>          

                        <?php if (!empty($_smarty_tpl->tpl_vars['cmt']->value->blog_cmt_code)) {?>                      
                        <div class="blog-comments">
                            <h2>Comments</h2>

                            <div id="disqus_thread"></div>
                                <?php echo $_smarty_tpl->tpl_vars['cmt']->value->blog_cmt_code;?>

                            
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Latest posts</h3>
                            <ul class="sidebar-latest-post">
                                <?php if ($_smarty_tpl->tpl_vars['recents']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recents']->value, 'res');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
                                <li>
                                    <div class="latest-post-img">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['res']->value->blog_slug;?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['res']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['res']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" class="img-responsive" alt="blog"></a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h4><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M, Y');?>
</h4>
                                        <p><?php echo $_smarty_tpl->tpl_vars['res']->value->blog_title;?>
</p>
                                    </div>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
    
<?php
}
}
/* {/block 'contents'} */
}
