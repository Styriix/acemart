<?php
/* Smarty version 3.1.33, created on 2020-01-04 23:04:25
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\profile\my_downloads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e110be9b21006_10568169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '331d9c339225bdac4b75b3938bc831dc3c807d45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\profile\\my_downloads.tpl',
      1 => 1575437295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e110be9b21006_10568169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10029201075e110be99a1045_36306604', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/download.tpl");
}
/* {block 'contents'} */
class Block_10029201075e110be99a1045_36306604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_10029201075e110be99a1045_36306604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li>My Downloads</li>
            </ul>
        </div>
    </div>  
</div>

<!-- Sales Statement Page Start Here -->
<div class="sales-statement-page-area bg-secondary section-space-bottom">
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

        <h2 class="title-section">My Downloads</h2>
        <div class="sales-statement-wrapper inner-page-padding">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Last Updated</th>
                        <th>Download</th>
                        <th>Liecense</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['downloads']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('i', "1");?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['downloads']->value, 'download');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
?>
                        <tr>
                            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
.</th>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['download']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['download']->value->item_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value->item_name;?>
</a></td>
                            <td><?php echo ucfirst($_smarty_tpl->tpl_vars['download']->value->user_username);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['download']->value->item_regu_price;?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['download']->value->item_updated_at) {?>
                                    <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['download']->value->item_updated_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>

                                <?php } else { ?>
                                    <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['download']->value->item_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>

                                <?php }?>
                            </td>
                            <td>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
download" method="post" id='download<?php echo $_smarty_tpl->tpl_vars['download']->value->item_id;?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['download']->value->item_id;?>
">
                                    <a href="javascript:{}" onclick="document.getElementById('download<?php echo $_smarty_tpl->tpl_vars['download']->value->item_id;?>
').submit(); return false;"><span class="badge badge-success">Download</span></a>
                                </form>
                            </td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item-license/<?php echo $_smarty_tpl->tpl_vars['download']->value->item_id;?>
" target="_blank">View Liecense</a></td>
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
<!-- Sales Statement Page End Here -->
    
<?php
}
}
/* {/block 'contents'} */
}
