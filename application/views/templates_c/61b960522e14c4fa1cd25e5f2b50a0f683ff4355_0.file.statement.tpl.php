<?php
/* Smarty version 3.1.33, created on 2019-12-04 00:48:34
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\statement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de6f452a6bc29_00291189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b960522e14c4fa1cd25e5f2b50a0f683ff4355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\statement.tpl',
      1 => 1575416910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de6f452a6bc29_00291189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704421845de6f452803c88_96319508', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/statement.tpl");
}
/* {block 'contents'} */
class Block_704421845de6f452803c88_96319508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_704421845de6f452803c88_96319508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="dashboard-area">
    

    <div class="dashboard_contents dashboard_statement_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>Sales Statements</h3>
                            <div class="date_area">
                                <form action="" method="get" autocomplete="off">
                                    <div class="input_with_icon">
                                        <input type="text" class="dattaPikkara" name="from" placeholder="From">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>

                                    <div class="input_with_icon">
                                        <input type="text" class="dattaPikkara" name="to" placeholder="To">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>

                                    <button type="submit" class="btn btn--sm btn--round btn--color1">Find</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="statement_table table-responsive">
                        <table class="table">
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

                        <div class="pagination-area pagination-area2">
                            <h2>Total sales: <strong><font color="red"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['my_sales']->value,2);?>
</font></strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
    
<?php
}
}
/* {/block 'contents'} */
}
