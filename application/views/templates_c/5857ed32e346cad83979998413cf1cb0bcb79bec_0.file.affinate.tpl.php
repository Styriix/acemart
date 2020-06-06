<?php
/* Smarty version 3.1.33, created on 2019-10-28 12:17:25
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\affinate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6ce458251b0_02939393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5857ed32e346cad83979998413cf1cb0bcb79bec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\affinate.tpl',
      1 => 1572260718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db6ce458251b0_02939393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4209126775db6ce457ef289_24024651', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_4209126775db6ce457ef289_24024651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4209126775db6ce457ef289_24024651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Affinate Program</h4>
        <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/set_affinate_program" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="set_affinvate">Activate Affinate Program</label>
                    <select id="set_affinvate" class="form-control" name="aff_set" required>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['app']->value['is_affi'] == 1) {?>selected<?php }?>>On</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['app']->value['is_affi'] == 0) {?>selected<?php }?>>Off</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="set_affinate_earn">Affinate Percent %</label>
                    <input id="set_affinate_earn" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['affi_rate'];?>
" name="aff_earn" required>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Update Affinate Program</button>
            </div>
        </div>
        </form>
    </div>
</div>


<?php
}
}
/* {/block 'contents'} */
}
