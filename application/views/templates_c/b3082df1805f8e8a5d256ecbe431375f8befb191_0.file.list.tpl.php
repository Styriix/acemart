<?php
/* Smarty version 3.1.33, created on 2019-10-09 22:51:00
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\account\users\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e4834c73569_62190639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3082df1805f8e8a5d256ecbe431375f8befb191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\account\\users\\list.tpl',
      1 => 1570654154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e4834c73569_62190639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11622284845d9e4834bd66c1_04509002', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19438971005d9e4834c5fb91_00363582', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18016904465d9e4834c64a27_52988419', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_11622284845d9e4834bd66c1_04509002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11622284845d9e4834bd66c1_04509002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/users/create-new"><button type="button" class="btn btn-success">Create New Account</button></a>

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
                <div class="">
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
                                <th>Profile</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>UserName</th>
                                <th>Email Address</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('i', "1");?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                            <tr>
                                <td class="v-align-middle">
                                <div class="checkbox check-default">
                                <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
">
                                <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"></label>
                                </div>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['user']->value->user_avater;?>
" width="35px" alt="Profile Pic"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_firstname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->user_status == 1) {?>
                                        <span class="badge badge-success">Active</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->user_status == 2) {?>
                                        <span class="badge badge-danger">Blocked</span>
                                    <?php } else { ?>
                                        <span class="badge badge-warning">Un Verify</span>
                                    <?php }?>
                                </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/users/edit-account/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_username;?>
"><span class="badge badge-primary">Edit</span></a></td>
                                <td>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_user_account/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
" onsubmit="return confirm('Are You Sure?');" method="post">
                                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Remove</button>
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
class Block_19438971005d9e4834c5fb91_00363582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_19438971005d9e4834c5fb91_00363582',
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
class Block_18016904465d9e4834c64a27_52988419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_18016904465d9e4834c64a27_52988419',
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
