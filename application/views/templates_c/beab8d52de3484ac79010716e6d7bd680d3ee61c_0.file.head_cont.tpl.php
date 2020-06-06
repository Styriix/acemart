<?php
/* Smarty version 3.1.33, created on 2019-11-30 02:32:46
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\head_cont.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1c6bedc03e9_83378199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beab8d52de3484ac79010716e6d7bd680d3ee61c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\head_cont.tpl',
      1 => 1575077563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1c6bedc03e9_83378199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15550827225de1c6bedaed61_10315041', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_15550827225de1c6bedaed61_10315041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15550827225de1c6bedaed61_10315041',
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
