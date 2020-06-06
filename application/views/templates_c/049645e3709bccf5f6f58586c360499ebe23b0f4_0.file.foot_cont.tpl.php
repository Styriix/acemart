<?php
/* Smarty version 3.1.33, created on 2019-11-30 03:16:30
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\foot_cont.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1d0fe760080_44319301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '049645e3709bccf5f6f58586c360499ebe23b0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\foot_cont.tpl',
      1 => 1575080185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1d0fe760080_44319301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20560026825de1d0fe735d24_99814788', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_20560026825de1d0fe735d24_99814788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_20560026825de1d0fe735d24_99814788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>


<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_footer_contents" method="post">
<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">After Main Page Contents</h4>
        <h5 class="text-primary text-center">This footer contents will appear after the main page contents of every pages</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inner_head">Contents Here</label>
                    <textarea id="inner_head" class="form-control" name="fc_bottom_page" rows="10"><?php echo $_smarty_tpl->tpl_vars['foot']->value['foot'];?>
</textarea>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Final Bottom Contents</h4>
        <h5 class="text-primary text-center">This contents will appear before the <code>< /body></code> tags</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_header_head">Contents Here</label>
                    <textarea id="after_header_head" class="form-control" name="fc_bottom_close" rows="10"><?php echo $_smarty_tpl->tpl_vars['foot']->value['inn_foot'];?>
</textarea>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Save Changes</button>
            </div>
        </div>
        
    </div>
</div>
</form>
    
<?php
}
}
/* {/block 'contents'} */
}
