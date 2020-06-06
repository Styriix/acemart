<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:12:37
  from 'C:\wamp64\www\application\views\templates\default\inc\body\banner-area.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea356454b27d0_94253551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2dd436c2dbcbfbc2a3db11c060f614a6f9086b' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\inc\\body\\banner-area.tpl',
      1 => 1575080956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea356454b27d0_94253551 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Main Banner 1 Area Start Here -->
<div class="main-banner2-area">
    <div class="container">
        <div class="main-banner2-wrapper">                       
            <h1><?php echo $_smarty_tpl->tpl_vars['app']->value['title'];?>
</h1>
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
