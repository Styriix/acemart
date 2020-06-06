<?php
/* Smarty version 3.1.33, created on 2019-10-10 01:28:52
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\product\add-new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e6d34984dd2_05392359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41de19ab9f0ae98e6fae4423475d25ae8c0b1891' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\product\\add-new.tpl',
      1 => 1570663686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e6d34984dd2_05392359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8626856355d9e6d348e8148_39095821', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12568340365d9e6d3496b562_92254029', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6688188225d9e6d34972311_26901448', 'ckeditor_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19377436985d9e6d349753f4_43362953', 'upl_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20827703235d9e6d349795f9_49938675', 'upl_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_8626856355d9e6d348e8148_39095821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_8626856355d9e6d348e8148_39095821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4>Create A New Product</h4>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_new_item" method="post" class="validate">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="grid-body">
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input id="item_name" class="form-control" type="text" name="item_name" maxlength="100" required>
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
"><?php echo $_smarty_tpl->tpl_vars['list_user']->value->user_firstname;?>
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
                        <textarea id="editor" class="form-control" name="item_description" rows="3" required></textarea>
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

            <div class="col-md-4">
                <div class="form-group">
                    <label for="thumbnail">Item Thumbnail <small class="text-danger">(jpg, png, jpeg) size: 200x200</small></label>
                    <select id="list_all_files" class="form-control list_all_files" name="item_thumbnail" required>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="preview_image">Item Preview (jpg, png, jpeg) size: 590x300</label>
                    <select id="preview" class="form-control list_all_files" name="item_preview" required>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="main_file">Main File (.zip) only</label>
                    <select id="preview" class="form-control list_all_files" name="item_main_file" required>
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
"><?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_name;?>
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
                            <input id="item_version" class="form-control" type="number" name="item_version">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_demo">Live Demo Url</label>
                            <input id="item_demo" class="form-control" type="url" name="item_demo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Regular Licence Price</label>
                            <input id="item_price" class="form-control" type="number" name="item_r_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Extended Licence Price</label>
                            <input id="item_price" class="form-control" type="number" name="item_e_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_tags">Tags</label>
                            <textarea id="item_tags" class="form-control" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-success btn-block">Submit Item</button>
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
class Block_12568340365d9e6d3496b562_92254029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_12568340365d9e6d3496b562_92254029',
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
class Block_6688188225d9e6d34972311_26901448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_6688188225d9e6d34972311_26901448',
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
class Block_19377436985d9e6d349753f4_43362953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_19377436985d9e6d349753f4_43362953',
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
class Block_20827703235d9e6d349795f9_49938675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_20827703235d9e6d349795f9_49938675',
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
