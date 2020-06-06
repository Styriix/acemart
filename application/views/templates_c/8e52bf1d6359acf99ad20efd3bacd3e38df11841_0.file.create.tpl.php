<?php
/* Smarty version 3.1.33, created on 2019-10-09 20:46:29
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\account\users\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e2b0500e927_70539417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e52bf1d6359acf99ad20efd3bacd3e38df11841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\account\\users\\create.tpl',
      1 => 1570646780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e2b0500e927_70539417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1297930175d9e2b04f3af26_31463493', 'contents');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4663240055d9e2b05009932_15741249', 'contf_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11032822585d9e2b0500ca64_59059932', 'contf_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_1297930175d9e2b04f3af26_31463493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_1297930175d9e2b04f3af26_31463493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Create A New User Account</h4>
    </div>
    <div class="grid-body">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_new_user" class="validate" enctype="multipart/form-data"enc>
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">FirstName</label>
                        <input id="firstname" class="form-control" type="text" name="firstname" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">LastName</label>
                        <input id="lastname" class="form-control" type="text" name="lastname" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input id="username" class="form-control" type="text" name="username" minlength='4' maxlength="50" required>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" type="email" name="email" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="avater">Avater</label>
                        <input id="avater" class="form-control" type="file" name="avater">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Account Status</label>
                        <select id="status" class="form-control" name="status" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="2">Blocked</option>
                            <option value="0">Not Verified</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="region">Region</label>
                        <select id="gds-cr-one" class="form-control" name="region" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" minlength="8" name="password" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="con_pass">Confirm Password</label>
                        <input id="con_pass" class="form-control" type="password" name="con_pass" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Create New User Account</button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php
}
}
/* {/block 'contents'} */
/* {block 'contf_head'} */
class Block_4663240055d9e2b05009932_15741249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_head' => 
  array (
    0 => 'Block_4663240055d9e2b05009932_15741249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/css/geodatasource-countryflag.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/Gettext.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'contf_head'} */
/* {block 'contf_foot'} */
class Block_11032822585d9e2b0500ca64_59059932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_foot' => 
  array (
    0 => 'Block_11032822585d9e2b0500ca64_59059932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/geodatasource-cr.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'contf_foot'} */
}
