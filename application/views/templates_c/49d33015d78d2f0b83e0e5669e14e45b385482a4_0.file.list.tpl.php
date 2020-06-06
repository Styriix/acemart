<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:51:06
  from 'C:\wamp64\www\application\views\templates\admin\account\admin\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35f4a4c7c03_60496684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d33015d78d2f0b83e0e5669e14e45b385482a4' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\account\\admin\\list.tpl',
      1 => 1570295350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35f4a4c7c03_60496684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11033088935ea35f4a3fcf63_89259133', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2255628875ea35f4a4af550_40014682', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5017953105ea35f4a4ba6c9_48122129', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_11033088935ea35f4a3fcf63_89259133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11033088935ea35f4a3fcf63_89259133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/admin/create-new"><button type="button" class="btn btn-success">Create New Account</button></a>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Admin <span class="semi-bold">Accounts</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body ">
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed" id="example">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1"></label>
                                </div>
                                </th>
                                <th>#</th>
                                <th>Profile</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>UserName</th>
                                <th>Email Address</th>
                                <th>Registered</th>
                                <th>Action</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['admins']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('i', "1");?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
                            <tr>
                                <td class="v-align-middle">
                                <div class="checkbox check-default">
                                <input type="checkbox" value="3" id="checkbox2">
                                <label for="checkbox2"></label>
                                </div>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['admin']->value->admin_profile_pic)===null||$tmp==='' ? 'default.png' : $tmp);?>
" width="35px" alt="Profile Pic"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_firstname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_lastname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_email;?>
</td>
                                <td><?php echo ucfirst(Carbon\Carbon::parse($_smarty_tpl->tpl_vars['admin']->value->admin_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS)));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/admin/edit-account/<?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_username;?>
"><span class="badge badge-primary">Edit</span></a></td>
                                <td>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_admin_account/<?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_id;?>
" onsubmit="return confirm('Are You Sure?');" method="post">
                                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                        <button type="submit" name="submit" class="btn btn-danger btn-lg">Remove</button>
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
</div>
<?php
}
}
/* {/block 'contents'} */
/* {block 'data_table_css'} */
class Block_2255628875ea35f4a4af550_40014682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_2255628875ea35f4a4af550_40014682',
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
class Block_5017953105ea35f4a4ba6c9_48122129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_5017953105ea35f4a4ba6c9_48122129',
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
