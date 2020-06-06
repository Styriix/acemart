<?php
/* Smarty version 3.1.33, created on 2019-12-06 14:53:29
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\blog\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea5d595d7df3_92904500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf45575469fa485f5d6d20ad750728d7b457e947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\blog\\list.tpl',
      1 => 1575640402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea5d595d7df3_92904500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17638648555dea5d594557c9_17731336', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/blog.tpl");
}
/* {block 'contents'} */
class Block_17638648555dea5d594557c9_17731336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17638648555dea5d594557c9_17731336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>



<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>  
</div> 



<div class="blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-secondary">Our Blog</h2>
    </div>  
    <div class="container">
        <div class="blog-page-wrapper">
            <div class="row">

                <?php if ($_smarty_tpl->tpl_vars['blogs']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="item-img-holder">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" class="img-responsive" alt="research"></a>
                            <span><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->format('d M, Y');?>
</span>
                        </div>
                        <div class="item-content-holder">
                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</a></h3>
                                <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value->blog_contents),150);?>
</p>
                            <ul class="item-comments">
                                <li><i class="fa fa-folder" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value->bc_name;?>
</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value->user_username;?>
</li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_view;?>
</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>


                </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

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
