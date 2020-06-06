<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:29:59
  from 'C:\wamp64\www\acemart\application\views\templates\default\public\pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55ed736be43_64974010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9d52330e321288f91deae40ebafbcfae22800d' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\public\\pages.tpl',
      1 => 1571315686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55ed736be43_64974010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6505085475eb55ed734d713_75040765', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/page.tpl");
}
/* {block 'contents'} */
class Block_6505085475eb55ed734d713_75040765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_6505085475eb55ed734d713_75040765',
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
