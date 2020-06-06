<?php
/* Smarty version 3.1.33, created on 2020-02-27 21:25:03
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\amazon_s3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58259f3e1e78_03292365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1501ec271e732a967f88ff557345d4b64eade06f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\amazon_s3.tpl',
      1 => 1582833560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58259f3e1e78_03292365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15202276335e58259f3db618_47546132', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_15202276335e58259f3db618_47546132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15202276335e58259f3db618_47546132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="grid simple">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_amazon_s3_storage" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="card grid-body">
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="public_key">Access Key</label>
                            <input id="public_key" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['aws']->value->s3_access_key;?>
" type="text" name="s3_access">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Secret Key</label>
                            <input id="sceret_key" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['aws']->value->s3_secret_key;?>
" type="text" name="sc_key">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Bucket</label>
                            <input id="sceret_key" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['aws']->value->s3_bucket_name;?>
" type="text" name="s3_bucket">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="enable">Activation</label>
                            <select id="enable" class="form-control" name="enable">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['aws']->value->s3_status == 1) {?>selected<?php }?>>Activate</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['aws']->value->s3_status != 1) {?>selected<?php }?>>DeActivate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
}
}
/* {/block 'contents'} */
}
