<?php
/* Smarty version 3.1.33, created on 2019-12-03 03:42:53
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\social_connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de5cbadb54930_06747332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864dd4801790cf66902bdb534e952d5ef319f047' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\social_connect.tpl',
      1 => 1575340414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de5cbadb54930_06747332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19837219805de5cbada4d407_04268840', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13647719875de5cbadb38443_67039549', 'form_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11090112185de5cbadb3f5d3_72995555', 'form_js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1068183835de5cbadb44467_65416237', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2183935845de5cbadb4e833_26539594', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19837219805de5cbada4d407_04268840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19837219805de5cbada4d407_04268840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Manage Website Social Links</h4>
        <hr>

        <div class="col-md-4">
            <?php if (!$_smarty_tpl->tpl_vars['sl_edit']->value) {?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_new_social_link" role="form" autocomplete="off" class="validate">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="form-group">
                    <label for="social_name">Social Link Name</label>
                    <input id="social_name" class="form-control" type="text" placeholder="e.g Facebook" name="sl_name" required>
                </div>
                <div class="form-group">
                    <label for="icon">Social Link Icon</label>
                    <input id="icon" class="form-control" type="text" placeholder="e.g Facebook" name="sl_icon" required>
                </div>
                <div class="form-group">
                    <label for="url">Social Link Url</label>
                    <input id="url" class="form-control" type="url" placeholder="http://facebook.com/mycompany" name="sl_link" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block">Create New Link</button>
            </form>
            <?php } else { ?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_social_link/<?php echo $_smarty_tpl->tpl_vars['sl_edit']->value->sl_name;?>
" role="form" autocomplete="off" class="validate">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="form-group">
                    <label for="social_name">Social Link Name</label>
                    <input id="social_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sl_edit']->value->sl_name;?>
" placeholder="e.g Facebook" name="sl_name" disabled>
                </div>
                <div class="form-group">
                    <label for="icon">Social Link Icon</label>
                    <input id="icon" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sl_edit']->value->sl_icon;?>
" placeholder="e.g Facebook" name="sl_icon" required>
                </div>
                <div class="form-group">
                    <label for="url">Social Link Url</label>
                    <input id="url" class="form-control" type="url" value="<?php echo $_smarty_tpl->tpl_vars['sl_edit']->value->sl_link;?>
" placeholder="http://facebook.com/mycompany" name="sl_link" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block">Update Link</button>
            </form>
            <?php }?>
        </div>

        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-bordered table-condensed" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">
                            <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                            <input type="checkbox" value="1" id="checkbox0">
                            <label for="checkbox0"></label>
                            </div>
                            </th>
                            <th>#</th>
                            <th>SocialName</th>
                            <th>SocialIcon</th>
                            <th>SocialLink</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['sl']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('i', "1");?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sl']->value, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                        <tr>
                            <td class="v-align-middle">
                            <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_id;?>
">
                            <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_id;?>
"></label>
                            </div>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['link']->value->sl_name;?>
</td>
                            <td><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_icon;?>
" aria-hidden="true"></i></td>
                            <td><?php echo auto_link($_smarty_tpl->tpl_vars['link']->value->sl_link);?>
</td>
                            <td>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_social_link/<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_id;?>
" method="post" id="del">
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/social-connect/edit/<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_name;?>
" data-toggle="tooltip" data-placement="top" title="Edit"><span class="text-primary"><i class="fa fa-pencil"></i></span></a>
                                        </div>
                                        <input type="hidden" name="dels" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->sl_name;?>
">
                                        <div class="col-xs-6">
                                            <a href="javascript:{}" onclick="document.getElementById('del').submit(); return false;" data-toggle="tooltip" data-placement="top" title="Delete"><span class="text-danger"><i class="fa fa-trash"></i></span></a>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
</div>


<?php
}
}
/* {/block 'contents'} */
/* {block 'form_css'} */
class Block_13647719875de5cbadb38443_67039549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_css' => 
  array (
    0 => 'Block_13647719875de5cbadb38443_67039549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
<?php
}
}
/* {/block 'form_css'} */
/* {block 'form_js'} */
class Block_11090112185de5cbadb3f5d3_72995555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_js' => 
  array (
    0 => 'Block_11090112185de5cbadb3f5d3_72995555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form_validations.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'form_js'} */
/* {block 'data_table_css'} */
class Block_1068183835de5cbadb44467_65416237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_1068183835de5cbadb44467_65416237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<?php
}
}
/* {/block 'data_table_css'} */
/* {block 'data_table_js'} */
class Block_2183935845de5cbadb4e833_26539594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_2183935845de5cbadb4e833_26539594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/js/datatables.responsive.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/js/lodash.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/datatables.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'data_table_js'} */
}
