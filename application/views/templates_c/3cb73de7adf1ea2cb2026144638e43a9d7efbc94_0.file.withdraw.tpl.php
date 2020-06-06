<?php
/* Smarty version 3.1.33, created on 2019-11-19 01:42:06
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\withdraw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd33a5e8d1643_13404683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cb73de7adf1ea2cb2026144638e43a9d7efbc94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\withdraw.tpl',
      1 => 1574124123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd33a5e8d1643_13404683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9393493685dd33a5e898433_98496764', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4751198195dd33a5e8cded2_94164606', 'w_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12692162055dd33a5e8cfe61_14121726', 'w_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_9393493685dd33a5e898433_98496764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_9393493685dd33a5e898433_98496764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="dashboard-area">
<div class="dashboard_contents">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="dashboard_title_area clearfix">
            <div class="dashboard__title pull-left">
                <h3>Withdraw Earning</h3>
            </div>
        </div>
        <!-- end /.dashboard_title_area -->
    </div>
    <!-- end /.col-md-12 -->
</div>

<!-- Withdrawal Page Start Here -->
<div class="withdraw_module withdraw_history">
    
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                <h5 class="title-section text-center text-info">Withdrawals Earnings</h5>
                <hr>
                <div class="withdrawal-wrapper inner-page-padding">
                    <form action="create-withdrawal" method="post" id="personal-info-form">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Amount to Withdraw (<?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['app']->value['min_withdraw'];?>
 Minimum)<span> *</span></label>
                                <input class="text_field" placeholder="Enter the amount you want to withdraw..." value="" name="amount" type="number">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Choose your Withdraw Method<span> *</span></label>
                                <select id="categories" name="method" class='text_field' required>
                                    <option value="0">Select Method</option>
                                    <option value="paypal">Paypal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Your Account Name or Email<span> *</span></label>
                                <input class="text_field" placeholder="Enter Your Account name or email" value="" name="account" type="text">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Confirm Your Password Confirm Your Password<span> *</span></label>
                                <input class="text_field" placeholder="Password" value="" name="password" type="password">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn--round btn--fullwidth btn--sm btn-block">Place Withdrawal</button>
                    </form>
                </div>  
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h5 class="title-section text-center text-danger">Withdrawal History</h5>
                <hr>
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
<!-- Withdrawal Page End Here -->
</div>
</div>
</section>
<?php
}
}
/* {/block 'contents'} */
/* {block 'w_css'} */
class Block_4751198195dd33a5e8cded2_94164606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_css' => 
  array (
    0 => 'Block_4751198195dd33a5e8cded2_94164606',
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
class Block_12692162055dd33a5e8cfe61_14121726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_12692162055dd33a5e8cfe61_14121726',
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
