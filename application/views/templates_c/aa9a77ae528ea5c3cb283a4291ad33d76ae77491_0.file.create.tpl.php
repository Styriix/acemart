<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:57:10
  from 'C:\wamp64\www\application\views\templates\admin\account\users\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea360b66a4f51_19255440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9a77ae528ea5c3cb283a4291ad33d76ae77491' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\account\\users\\create.tpl',
      1 => 1570646780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea360b66a4f51_19255440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10009286195ea360b6688601_72791503', 'contents');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2576917605ea360b669ca55_45640156', 'contf_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2865618295ea360b66a1da4_92175419', 'contf_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_10009286195ea360b6688601_72791503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_10009286195ea360b6688601_72791503',
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
class Block_2576917605ea360b669ca55_45640156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_head' => 
  array (
    0 => 'Block_2576917605ea360b669ca55_45640156',
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
class Block_2865618295ea360b66a1da4_92175419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_foot' => 
  array (
    0 => 'Block_2865618295ea360b66a1da4_92175419',
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
