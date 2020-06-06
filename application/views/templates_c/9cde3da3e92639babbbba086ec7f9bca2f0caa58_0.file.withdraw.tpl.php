<?php
/* Smarty version 3.1.33, created on 2019-10-17 10:00:00
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\profile\withdraw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da81f80375963_26593926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cde3da3e92639babbbba086ec7f9bca2f0caa58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\profile\\withdraw.tpl',
      1 => 1571299195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da81f80375963_26593926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12623134445da81f8034ec58_09836614', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2350265465da81f80373260_62215315', 'w_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2317786885da81f80374818_38410791', 'w_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_12623134445da81f8034ec58_09836614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_12623134445da81f8034ec58_09836614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li>Withdrawals</li>
            </ul>
        </div>
    </div>  
</div>

<!-- Withdrawal Page Start Here -->
<div class="withdrawal-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                <h3 class="title-section">Withdrawals Earnings</h3>
                <div class="withdrawal-wrapper inner-page-padding">
                    <form action="create-withdrawal" method="post" id="personal-info-form">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Amount to Withdraw (<?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['app']->value['min_withdraw'];?>
 Minimum)<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <input class="profile-heading" placeholder="Enter the amount you want to withdraw..." value="" name="amount" type="number">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Choose your Withdraw Method<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <div class="custom-select">
                                    <select id="categories" name="method" class='select2' required>
                                        <option value="0">Select Method</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Your Account Name or Email<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <div class="custom-select">
                                    <input class="profile-heading" placeholder="Enter Your Account name or email" value="" name="account" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Confirm Your Password Confirm Your Password<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <input class="profile-heading" placeholder="Password" value="" name="password" type="password">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-block">Place Withdrawal</button>
                    </form>
                </div>  
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="title-section">Withdrawal History</h2>
                <div class="withdrawal-wrapper inner-page-padding">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Amount</th>
                                <th>Account/Email</th>
                                <th>Schedule</th>
                                <th>Status</th>
                                <th>Method</th>
                            </thead>
                            <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['mws']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mws']->value, 'mw');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mw']->value) {
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['mw']->value->wd_amount;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['mw']->value->wd_account;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['mw']->value->wd_place;?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['mw']->value->wd_status == 1) {?>
                                                    <span>Paid</span>
                                                <?php } else { ?>
                                                    Pending
                                                <?php }?>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['mw']->value->wd_method;?>
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
</div>  
<!-- Withdrawal Page End Here -->
<?php
}
}
/* {/block 'contents'} */
/* {block 'w_css'} */
class Block_2350265465da81f80373260_62215315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_css' => 
  array (
    0 => 'Block_2350265465da81f80373260_62215315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/select2.min.css">
<?php
}
}
/* {/block 'w_css'} */
/* {block 'w_js'} */
class Block_2317786885da81f80374818_38410791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_2317786885da81f80374818_38410791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'w_js'} */
}
