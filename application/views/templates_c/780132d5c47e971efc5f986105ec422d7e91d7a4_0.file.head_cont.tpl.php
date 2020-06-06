<?php
/* Smarty version 3.1.33, created on 2020-04-24 23:05:21
  from 'C:\wamp64\www\application\views\templates\admin\settings\head_cont.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea370b11a9bf2_24705057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780132d5c47e971efc5f986105ec422d7e91d7a4' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\settings\\head_cont.tpl',
      1 => 1575077563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea370b11a9bf2_24705057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19844354325ea370b118e4b2_08189610', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19844354325ea370b118e4b2_08189610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19844354325ea370b118e4b2_08189610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>


<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_website_header_contents" method="post">
<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Inner Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper before the <code> < /head> </code> tags on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inner_head">Contents Here</label>
                    <textarea id="inner_head" class="form-control" name="inner_head" rows="10"><?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>
</textarea>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">After Nav Bar Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper after the nav menu on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_nav_head">Contents Here</label>
                    <textarea id="after_nav_head" class="form-control" name="after_nav_head" rows="10"><?php echo $_smarty_tpl->tpl_vars['head']->value['a_nav'];?>
</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Before main content Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper before the main contents on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_header_head">Contents Here</label>
                    <textarea id="after_header_head" class="form-control" name="after_header_head" rows="10"><?php echo $_smarty_tpl->tpl_vars['head']->value['b_main'];?>
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
