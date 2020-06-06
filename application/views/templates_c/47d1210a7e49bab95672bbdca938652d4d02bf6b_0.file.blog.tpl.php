<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:26
  from 'C:\wamp64\www\acemart\application\views\templates\default\pack\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc61a2d69_01556394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d1210a7e49bab95672bbdca938652d4d02bf6b' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\pack\\blog.tpl',
      1 => 1575643086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55dc61a2d69_01556394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['h_blogs']->value) {?>
<br><br>
<div class="blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h4 class="title-secondary">From Our Blog</h4>
    </div>  
    <div class="container">
        <div class="blog-page-wrapper">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['h_blogs']->value, 'hb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hb']->value) {
?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="item-img-holder">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_slug;?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['hb']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['hb']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" class="img-responsive" alt="research"></a>
                            <span><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['hb']->value->blog_created_at)->format('d M, Y');?>
</span>
                        </div>
                        <div class="item-content-holder">
                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_title;?>
</a></h3>
                                <p><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['hb']->value->blog_contents),150);?>
</p>
                            <ul class="item-comments">
                                <li><i class="fa fa-folder" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['hb']->value->bc_name;?>
</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i><?php echo ucfirst($_smarty_tpl->tpl_vars['hb']->value->user_username);?>
</li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['hb']->value->blog_view;?>
</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                
                
            </div>
            
        </div>
    </div>  
</div> 
<?php }
}
}
