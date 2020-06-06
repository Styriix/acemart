<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:14:29
  from 'C:\wamp64\www\application\views\templates\default\inc\extra\like_main_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea364c5eb5933_19086349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ac6981504a6fa8ce8a5a96a2822d1cfa7db8311' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\inc\\extra\\like_main_cat.tpl',
      1 => 1578890197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea364c5eb5933_19086349 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_login']->value) {
echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['items']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>

    $(document).ready(() => {
        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', () => {
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/like_item/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['usr']->value['myid'];?>
',
                success: function(data) {
                    var data = JSON.parse(data);
                    if(data.status == 'liked') {
                        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').addClass('text-primary');
                    } else if(data.status == 'disliked') {
                        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').removeClass('text-primary');
                    }
                    
                    $('.item_id_<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').text("("+data.likes+")");
                }
            });
            $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', (e) => {
                e.stopPropagation();
            });
        });
    });

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
echo '</script'; ?>
>
<?php }
}
}
