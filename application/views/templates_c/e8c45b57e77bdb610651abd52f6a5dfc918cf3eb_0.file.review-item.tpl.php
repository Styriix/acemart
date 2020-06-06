<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:19:57
  from 'C:\wamp64\www\application\views\templates\admin\product\review-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea3660d68d5b2_17734876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c45b57e77bdb610651abd52f6a5dfc918cf3eb' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\product\\review-item.tpl',
      1 => 1571205691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3660d68d5b2_17734876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3481593735ea3660d5e7534_06862250', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13033201895ea3660d676b40_06203401', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9695405435ea3660d67b1f8_28712251', 'ckeditor_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12667423245ea3660d67e4c2_35073544', 'upl_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12634878495ea3660d683743_27626546', 'upl_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_3481593735ea3660d5e7534_06862250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_3481593735ea3660d5e7534_06862250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4>Create A New Product</h4>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/review_item/<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_id;?>
" method="post" class="validate">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="grid-body">
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input id="item_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_name;?>
" name="item_name" maxlength="100" required>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="item_author">Item Author</label>
                        <select id="item_author" class="form-control" name="item_author" required>
                            <option value="">Select Author</option>
                            <?php if ($_smarty_tpl->tpl_vars['list_users']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_users']->value, 'list_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_user']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['list_user']->value->user_id;?>
" <?php if ($_smarty_tpl->tpl_vars['edit']->value->item_user_id == $_smarty_tpl->tpl_vars['list_user']->value->user_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['list_user']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['list_user']->value->user_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['list_user']->value->user_username;?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="item_description">Item Description</label>
                        <textarea id="editor" class="form-control" name="item_description" rows="3" required><?php echo $_smarty_tpl->tpl_vars['edit']->value->item_description;?>
</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-title">
            <h4>Item Files</h4>
        </div>
        <div class="grid-body">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                
                <!-- Our markup, the important part here! -->
                <div id="drag-and-drop-zone" class="dm-uploader p-5">
                    <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                    <div class="btn btn-primary btn-block mb-5">
                        <span>Open the file Browser</span>
                        <input type="file" title='Click to add Files' />
                    </div>
                </div><!-- /uploader -->

                </div>
                <div class="col-md-6 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                    File List
                    </div>

                    <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                    <li class="text-muted text-center empty">No files uploaded.</li>
                    </ul>
                </div>
                </div>
            </div><!-- /file list -->

            <div class="col-md-12">
                <div class="form-group text-center">
                    <label for="my-input" class="text-danger"><small><strong>Please Click To Refresh Tray To Access Your Upload Datas</strong></small></label>
                    <button type="button" id="test" class="btn btn-info">Refresh Tray</button>
                </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-danger">Current Item Icon</h4>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/files/<?php echo $_smarty_tpl->tpl_vars['edit']->value->thumb_name;?>
" target="_blank">View Image</a>
            </div>
            <div class="col-md-6">
                <h4 class="text-danger">Current Item Preview</h4>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/files/<?php echo $_smarty_tpl->tpl_vars['edit']->value->pre_name;?>
" target="_blank">View Image</a>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="thumbnail">Item Thumbnail <small class="text-danger">(jpg, png, jpeg) size: 200x200</small></label>
                    <select id="list_all_files" class="form-control list_all_files" name="item_thumbnail">
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="preview_image">Item Preview (jpg, png, jpeg) size: 590x300</label>
                    <select id="preview" class="form-control list_all_files" name="item_preview">
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="main_file">Main File (.zip) only</label>
                    <select id="preview" class="form-control list_all_files" name="item_main_file">
                    </select>
                </div>
            </div>
        
            </div>

            <div class="grid-title">
                <h4>Iitem Addition Infomations</h4>
            </div>
            <div class="grid-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="item_category">Category</label>
                            <select class="form-control" name="item_cat" required>
                                <option value="">Select Category</option>
                                <?php if ($_smarty_tpl->tpl_vars['upl_subs']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upl_subs']->value, 'sub');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['sub']->value->child_cats)) {?>
                                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['sub']->value->sub_cat_name;?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub']->value->child_cats, 'chi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chi']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_id;?>
" <?php if ($_smarty_tpl->tpl_vars['chi']->value->child_cat_id == $_smarty_tpl->tpl_vars['edit']->value->item_cat_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_name;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </optgroup>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="item_version">Item Version</label>
                            <input id="item_version" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_version;?>
" name="item_version">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_demo">Live Demo Url</label>
                            <input id="item_demo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_live_demo;?>
" type="url" name="item_demo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Regular Licence Price</label>
                            <input id="item_price" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_regu_price;?>
" name="item_r_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Extended Licence Price</label>
                            <input id="item_price" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->item_exte_price;?>
" name="item_e_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_tags">Tags</label>
                            <textarea id="item_tags" class="form-control" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required><?php echo $_smarty_tpl->tpl_vars['edit']->value->item_tags;?>
</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_tags">Reject Message <small><strong>If Rejecting this item please set reason of rejection</strong></small></label>
                            <textarea id="item_tags" class="form-control" name="item_reject" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <button type="submit" name="approve" class="btn btn-primary btn-block">Approve Item</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" name="reject" class="btn btn-danger btn-block">Reject Item</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<?php
}
}
/* {/block 'contents'} */
/* {block 'ckeditor_head'} */
class Block_13033201895ea3660d676b40_06203401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_13033201895ea3660d676b40_06203401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>
/ckeditor.js"><?php echo '</script'; ?>
>    
<?php
}
}
/* {/block 'ckeditor_head'} */
/* {block 'ckeditor_foot'} */
class Block_9695405435ea3660d67b1f8_28712251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_9695405435ea3660d67b1f8_28712251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
CKEDITOR.replace( 'editor' );
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'ckeditor_foot'} */
/* {block 'upl_head'} */
class Block_12667423245ea3660d67e4c2_35073544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_12667423245ea3660d67e4c2_35073544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/styles.css" rel="stylesheet">
<?php
}
}
/* {/block 'upl_head'} */
/* {block 'upl_foot'} */
class Block_12634878495ea3660d683743_27626546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_12634878495ea3660d683743_27626546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/dist/js/jquery.dm-uploader.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/demo-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/demo-config.js"><?php echo '</script'; ?>
>

<!-- File item template -->
<?php echo '<script'; ?>
 type="text/html" id="files-template">
    <li class="media">
    <div class="media-body mb-1">
        <p class="mb-2">
        <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
        </p>
        <div class="progress mb-2">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
            role="progressbar"
            style="width: 0%" 
            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
        </div>
        <hr class="mt-1 mb-1" />
    </div>
    </li>
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>

    $(document).ready(function() {
        $('#test').on('click', function() {
            //load all brands to table
            $.get("<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
/files/load_files", function(data) {
                $('.list_all_files').html(data);
            });
        });
    });

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'upl_foot'} */
}
