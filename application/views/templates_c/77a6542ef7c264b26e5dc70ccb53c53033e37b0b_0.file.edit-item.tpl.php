<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:28:28
  from 'C:\wamp64\www\application\views\templates\default\profile\edit-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea3680ca317c0_81331086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a6542ef7c264b26e5dc70ccb53c53033e37b0b' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\profile\\edit-item.tpl',
      1 => 1578226176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3680ca317c0_81331086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11230212395ea3680c6e94f1_43658154', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18047813815ea3680c9659d6_06592853', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9435794085ea3680c98a4e1_73422733', 'ckeditor_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11401702285ea3680c9a7969_29290435', 'upl_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3165204255ea3680c9d7f65_55836046', 'upl_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/upload.tpl");
}
/* {block 'contents'} */
class Block_11230212395ea3680c6e94f1_43658154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11230212395ea3680c6e94f1_43658154',
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
                <li>Edit Item</li>
            </ul>
        </div>
    </div>  
</div>

<div class="product-upload-page-area bg-secondary section-space-bottom">
    <div class="container card">
        <h3 class="title-section">Upload Your item</h3>

        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" method="post" class="product-upload-wrapper inner-page-padding">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_description">Item Description</label>
                            <textarea id="editor" class="form-control" name="item_description" rows="3" required><?php echo $_smarty_tpl->tpl_vars['item']->value->item_description;?>
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
                        <br>
                        <button type="button" id="test" class="btn btn-info">Refresh Tray</button>
                    </div>
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
" <?php if ($_smarty_tpl->tpl_vars['item']->value->item_cat_id == $_smarty_tpl->tpl_vars['chi']->value->child_cat_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_name;?>
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
                                <input id="item_version" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_version;?>
" name="item_version">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_demo">Live Demo Url</label>
                                <input id="item_demo" class="form-control" type="url" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_live_demo;?>
" name="item_demo">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_price">Regular Licence Price</label>
                                <input id="item_price" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
" name="item_r_liecence" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_price">Extended Licence Price</label>
                                <input id="item_price" class="form-control" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_exte_price;?>
" name="item_e_liecence" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="item_tags">Tags</label>
                                <textarea id="item_tags" class="form-control" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required><?php echo $_smarty_tpl->tpl_vars['item']->value->item_tags;?>
</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input id="is_free" class="form-check-input" type="checkbox" name="free_item" value="true" <?php if ($_smarty_tpl->tpl_vars['item']->value->item_to_free == 1) {?>checked<?php }?>>
                                <label for="is_free" class="form-check-label">Apply For Free File Of The Week</label>
                            </div>
                            <div class="form-check">
                                <input id="is_free" class="form-check-input" type="checkbox" name="flash_sale" value="true" <?php if ($_smarty_tpl->tpl_vars['item']->value->item_to_flash == 1) {?>checked<?php }?>>
                                <label for="is_free" class="form-check-label">Apply For Flash Sale</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-success btn-block">Update Item</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>


<?php
}
}
/* {/block 'contents'} */
/* {block 'ckeditor_head'} */
class Block_18047813815ea3680c9659d6_06592853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_18047813815ea3680c9659d6_06592853',
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
class Block_9435794085ea3680c98a4e1_73422733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_9435794085ea3680c98a4e1_73422733',
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
class Block_11401702285ea3680c9a7969_29290435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_11401702285ea3680c9a7969_29290435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['upl']->value;?>
/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
<?php
}
}
/* {/block 'upl_head'} */
/* {block 'upl_foot'} */
class Block_3165204255ea3680c9d7f65_55836046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_3165204255ea3680c9d7f65_55836046',
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
