<?php
/* Smarty version 3.1.33, created on 2020-01-13 06:37:10
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\inc\extra\like_flash_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1c02061bca91_78360359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0925c532c253d9188a59071d16ad78be86901902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\inc\\extra\\like_flash_files.tpl',
      1 => 1578893723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1c02061bca91_78360359 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_login']->value) {
echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['flashes']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashes']->value, 'new_item');
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
