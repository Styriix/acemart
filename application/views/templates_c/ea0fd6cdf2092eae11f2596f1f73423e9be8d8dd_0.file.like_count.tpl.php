<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:26
  from 'C:\wamp64\www\acemart\application\views\templates\default\inc\extra\like_count.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc64b5e78_04773483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0fd6cdf2092eae11f2596f1f73423e9be8d8dd' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\inc\\extra\\like_count.tpl',
      1 => 1578863645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55dc64b5e78_04773483 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_login']->value) {
echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['new_items']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_items']->value, 'new_item');
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

<?php if ($_smarty_tpl->tpl_vars['follo_feed']->value) {
echo '<script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['follo_feed']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>

    $(document).ready(() => {
        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', () => {
            e.stopPropagation();
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
echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['freebies']->value) {
echo '<script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freebies']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>

    $(document).ready(() => {
        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', () => {
            e.stopPropagation();
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
echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['flashes']->value) {
echo '<script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashes']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>

    $(document).ready(() => {
        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', () => {
            e.stopPropagation();
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
echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pops']->value) {
echo '<script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pops']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>

    $(document).ready(() => {
        $('.like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
').on('click', () => {
            e.stopPropagation();
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
echo '</script'; ?>
>
<?php }
}
}
}
