<?php
/* Smarty version 3.1.33, created on 2019-10-17 14:34:49
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\public\pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da85fe9e0fb18_23828321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5698af5ded2cbeba764eb6a784e1b1181152a158' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\public\\pages.tpl',
      1 => 1571315686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da85fe9e0fb18_23828321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10065227355da85fe9e03656_96888759', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/page.tpl");
}
/* {block 'contents'} */
class Block_10065227355da85fe9e03656_96888759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_10065227355da85fe9e03656_96888759',
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
                <li><?php echo $_smarty_tpl->tpl_vars['page']->value->page_name;?>
</li>
            </ul>
        </div>
    </div>  
</div>
<?php echo $_smarty_tpl->tpl_vars['page']->value->page_contents;?>

    
<?php
}
}
/* {/block 'contents'} */
}
