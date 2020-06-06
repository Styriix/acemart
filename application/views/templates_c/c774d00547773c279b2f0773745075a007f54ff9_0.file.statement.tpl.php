<?php
/* Smarty version 3.1.33, created on 2019-12-04 00:43:36
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\profile\statement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de6f32800d629_42326536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c774d00547773c279b2f0773745075a007f54ff9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\profile\\statement.tpl',
      1 => 1575416611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de6f32800d629_42326536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14413493655de6f327ef27c6_14492292', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11281670125de6f32800b6c8_94392926', 'date_picker');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/statement.tpl");
}
/* {block 'contents'} */
class Block_14413493655de6f327ef27c6_14492292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14413493655de6f327ef27c6_14492292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index.html">Home</a><span> -</span></li>
                <li>Sales Statement</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Sales Statement Page Start Here -->
<div class="sales-statement-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Your Sales Statement</h2>
        <div class="sales-statement-wrapper inner-page-padding">
        <form method="get" action="" id="let_find" autocomplete="off">
            <div class="sales-statement-filter">
            
                <div class="sales-statement-filter-item">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" class="form-control rt-date" placeholder="Date" name="from" id="form-date-from" data-error="Subject field is required" required/>
                </div>
                    <div class="sales-statement-filter-item">
                    <span>To</span>
                </div>
                    <div class="sales-statement-filter-item">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" class="form-control rt-date" placeholder="Date" name="to" id="form-date-to" data-error="Subject field is required" required/>
                </div>
                    <div class="sales-statement-filter-item">
                    <a href="javascript:void();" onclick="document.getElementById('let_find').submit(); return false;" class="find-btn" id="login-button">Find</a>
                </div>
            
            </div>
            </form>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Item Sold</th>
                        <th>Customer</th>
                        <th>Purchase Code</th>
                        <th>Earning</th>
                        <th>Date Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['my_smt']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_smt']->value, 'smt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['smt']->value) {
?>
                            <tr>
                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
.</th>
                                <td>Sold: <a href=""><?php echo $_smarty_tpl->tpl_vars['smt']->value->item_name;?>
</a></td>
                                <td><img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['smt']->value->user_avater;?>
" alt="avatar" width="35px" class="img-responsive" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['smt']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['smt']->value->user_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['smt']->value->user_username;?>
)"></td>
                                <td><font color="red"><?php echo $_smarty_tpl->tpl_vars['smt']->value->ss_code;?>
</font></td>
                                <td><strong><font color="blue"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo number_format($_smarty_tpl->tpl_vars['smt']->value->ss_earn,2);?>
</font></strong></td>
                                <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['smt']->value->ss_date)->format('d, M Y');?>
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
            <div class="total-sale">Total Sales:<span> <font color="red"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['my_sales']->value,2);?>
</font></span></div> 
        </div> 
    </div> 
</div> 
<!-- Sales Statement Page End Here -->
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'date_picker'} */
class Block_11281670125de6f32800b6c8_94392926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'date_picker' => 
  array (
    0 => 'Block_11281670125de6f32800b6c8_94392926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.datetimepicker.full.min.js" type="text/javascript"><?php echo '</script'; ?>
>
 <?php
}
}
/* {/block 'date_picker'} */
}
