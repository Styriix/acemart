<?php
/* Smarty version 3.1.33, created on 2019-12-01 06:29:05
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\inc\body\banner-area-sec.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de34fa17ae802_91045454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd57a0a8f3bede6f45d6c6bef27df466a54f66d3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\inc\\body\\banner-area-sec.tpl',
      1 => 1575080937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de34fa17ae802_91045454 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container" style="padding-top: 25px;">
        <div class="inner-banner-wrapper">
            <p><?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</p>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/search" method="post">
            <div class="banner-search-area input-group">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    <input class="form-control" placeholder="Search Your Keywords e.g script social networks" name="key" type="text">
                    <span class="input-group-addon">
                        <button type="submit" name="search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here -->
<?php echo $_smarty_tpl->tpl_vars['head']->value['b_main'];
}
}
