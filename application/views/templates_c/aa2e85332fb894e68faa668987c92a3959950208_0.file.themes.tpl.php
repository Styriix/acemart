<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:37:14
  from 'C:\wamp64\www\acemart\application\views\templates\admin\public\themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb5608aac1f26_17022751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa2e85332fb894e68faa668987c92a3959950208' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\public\\themes.tpl',
      1 => 1587770370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb5608aac1f26_17022751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19001074535eb5608aa8fc81_93046237', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19001074535eb5608aa8fc81_93046237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19001074535eb5608aa8fc81_93046237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="row">
    <div class="col-md-4">
    <div class="grid simple" style="width: 18rem;">
    <img class="grid-title" src="/assets/default/theme/default-theme.png" style="width:inherit;" alt="Card image cap">
    <div class="grid-body">
        <h5 class="card-title">AceMart Default</h5>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/change_site_theme/1" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['theme']->value == 'default') {?>
            <button type="submit" class="btn btn-primary btn-block" disabled>Selected</button>
        <?php } else { ?>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Select</button>
        <?php }?>
        </form>
    </div>
    </div>
</div>
    <div class="col-md-4">
    <div class="grid simple col-md-3 col-xs-12" style="width: 18rem;">
    <img class="grid-title" src="/assets/default/theme/digcool.png" style="width:inherit;" alt="Card image cap">
    <div class="grid-body">
        <h5 class="card-title">DigCool</h5>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/change_site_theme/2" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['theme']->value == 'digcool') {?>
            <button type="submit" class="btn btn-info btn-block" disabled>Selected</button>
        <?php } else { ?>
            <button type="submit" name="submit" class="btn btn-info btn-block">Select</button>
        <?php }?>
        </form>
    </div>
    </div>
</div>
</div>


    
<?php
}
}
/* {/block 'contents'} */
}
