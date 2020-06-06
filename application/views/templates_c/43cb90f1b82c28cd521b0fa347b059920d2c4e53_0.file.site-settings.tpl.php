<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:49:29
  from 'C:\wamp64\www\acemart\application\views\templates\admin\settings\site-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb5636963bf33_06437721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43cb90f1b82c28cd521b0fa347b059920d2c4e53' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\settings\\site-settings.tpl',
      1 => 1572259368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb5636963bf33_06437721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8243075875eb5636948cd41_25290082', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8986894845eb5636961f126_25712158', 'form_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18232941145eb56369632945_43272297', 'form_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_8243075875eb5636948cd41_25290082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_8243075875eb5636948cd41_25290082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="row">
    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Basic Settings</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_basic_settings" role="form" autocomplete="off" class="validate">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    <div class="form-group">
                        <label for="site_name">Website Name:</label>
                        <input id="site_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
" name="site_name" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="site_title">Website Title:</label>
                        <input id="site_title" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['title'];?>
" name="site_title" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="site_short_description">Website Short Description:</label>
                        <textarea id="site_short_description" class="form-control" name="site_short_description" rows="2" maxlength="250" required><?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="site_description">Website Description</label>
                        <textarea id="site_description" class="form-control" name="site_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['app']->value['descrip'];?>
</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Basic Settings</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Meta Tags</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_meta_tags" role="form" autocomplete="off" class="validate">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    
                    <div class="form-group">
                        <label for="meta_description">Meta Description:</label>
                        <textarea id="meta_description" class="form-control" name="meta_description" rows="4"><?php echo $_smarty_tpl->tpl_vars['app']->value['meta_descrip'];?>
</textarea>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea id="meta_keywords" class="form-control" name="meta_keywords" rows="5" placeholder="Example: PHP, Scripts, Codes, etc"><?php echo $_smarty_tpl->tpl_vars['app']->value['meta_keys'];?>
</textarea>
                    </div>

                    <div class="form-group">
                        <label for="theme_color">THeme Color</label>
                        <input id="theme_color" class="form-control" type="color" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app']->value['site_color'])===null||$tmp==='' ? '#ff00ff' : $tmp);?>
" name="theme_color">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Meta Tags</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Prefrences</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_prefrences" role="form" enctype="multipart/form-data" autocomplete="off">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    
                    <div class="form-group">
                        <label for="site_logo">Change Website Logo</label>
                        <input id="site_logo" class="form-control" type="file" name="site_logo">
                    </div>

                    <div class="form-group">
                        <label for="site_favicon">Change Website Favicon</label>
                        <input id="site_favicon" class="form-control" type="file" name="site_favicon">
                    </div>

                    <div class="form-group">
                        <label for="currency">Website Currency</label>
                        <select id="currency" class="form-control" name="site_currency" required>
                            <option value="">Select Preffered Currency</option>
                            <option value="USD" <?php if ($_smarty_tpl->tpl_vars['app']->value['currency_code'] == 'USD') {?>selected<?php }?>>$ USD</option>
                            <option value="EUR" <?php if ($_smarty_tpl->tpl_vars['app']->value['currency_code'] == 'EUR') {?>selected<?php }?>>€ EUR</option>
                            <option value="UKP" <?php if ($_smarty_tpl->tpl_vars['app']->value['currency_code'] == 'UKP') {?>selected<?php }?>>£ UKP</option>
                            <option value="JPY" <?php if ($_smarty_tpl->tpl_vars['app']->value['currency_code'] == 'JPY') {?>selected<?php }?>>¥ JPY</option>
                            <option value="NGN" <?php if ($_smarty_tpl->tpl_vars['app']->value['currency_code'] == 'NGN') {?>selected<?php }?>>₦ NGN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="site_status">Website Status</label>
                        <select id="site_status" class="form-control" name="site_status">
                            <option value="<?php echo $_smarty_tpl->tpl_vars['app']->value['site_status'];?>
">Select Website Status</option>
                            <option value="1">On</option>
                            <option value="0">Off</option>
                        </select>
                    </div>

                    <button type="submit" name="submit" class="btn btn-info btn-block">Save Prefrences</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>More <span class="semi-bold">UserFull Settings</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_more" role="form" autocomplete="off">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    
                    <div class="form-group">
                        <label for="item_charge">Percent (%) Charge Per Item Sold</label>
                        <input id="item_charge" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['item_charge'];?>
" type="number" name="item_charge" required>
                    </div>

                    <div class="form-group">
                        <label for="min_withdraw">Author Minimum Withdrawal</label>
                        <input id="min_withdraw" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['min_withdraw'];?>
" type="number" name="min_withdraw" required>
                    </div>

                    <div class="form-group">
                        <label for="set_pay_data">Pay Author Earning Every First ... Of Every Month</label>
                        <select name="pay_day" class="form-control" id="pay_day" required>
                            <option value="">Select Day</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 1) {?>selected<?php }?>>Monday</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 2) {?>selected<?php }?>>Tuesday</option>
                            <option value="3" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 3) {?>selected<?php }?>>Wednessday</option>
                            <option value="4" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 4) {?>selected<?php }?>>Thursday</option>
                            <option value="5" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 5) {?>selected<?php }?>>Friday</option>
                            <option value="6" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 6) {?>selected<?php }?>>Saturday</option>
                            <option value="7" <?php if ($_smarty_tpl->tpl_vars['app']->value['pay_day'] == 7) {?>selected<?php }?>>Sunday</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="min_withdraw">Website Email</label>
                        <input id="site_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['email'];?>
" type="email" name="site_email" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-info btn-block">Save Settings</button>
                </form>
            </div>
        </div>
    </div>


</div>

<?php
}
}
/* {/block 'contents'} */
/* {block 'form_css'} */
class Block_8986894845eb5636961f126_25712158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_css' => 
  array (
    0 => 'Block_8986894845eb5636961f126_25712158',
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
class Block_18232941145eb56369632945_43272297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_js' => 
  array (
    0 => 'Block_18232941145eb56369632945_43272297',
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
}
