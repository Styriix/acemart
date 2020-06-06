<?php
/* Smarty version 3.1.33, created on 2019-11-19 01:23:07
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\edit-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd335ebe00501_01870677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55f56896efe40b353b3b7b21b1e41793ac5ddcfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\edit-item.tpl',
      1 => 1574122971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd335ebe00501_01870677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20491952395dd335ebd58049_21275601', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18443673015dd335ebded377_49591296', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12178225335dd335ebdf1de3_70402968', 'ckeditor_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1258683915dd335ebdf4898_85015939', 'upl_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19171465305dd335ebdf7ec9_33347043', 'upl_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/upload.tpl");
}
/* {block 'contents'} */
class Block_20491952395dd335ebd58049_21275601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_20491952395dd335ebd58049_21275601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Update Your Item</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="dashboard-area">

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="pull-left">
                            <div class="dashboard__title">
                                <h3>Upload Your Item</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" method="post">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>Item Name & Description</h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">

                                <div class="form-group no-margin">
                                    <p class="label">Product Description</p>
                                    <textarea id="editor" class="form-control" name="item_description" rows="3" required><?php echo $_smarty_tpl->tpl_vars['item']->value->item_description;?>
</textarea>
                                </div>
                            </div>
                            <!-- end /.modules__content -->
                        </div>
                        <!-- end /.upload_modules -->

                        <div class="upload_modules module--upload">
                            <div class="modules__title">
                                <h3>Upload Files</h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                    
                                    <!-- Our markup, the important part here! -->
                                    <div id="drag-and-drop-zone" class="dm-uploader p-5">
                                        <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                                        <div class="btn btn-primary btn-block mb-5">
                                            <span class="btn btn--round btn--sm">Open the file Browser</span>
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
                                <!-- end /.form-group -->

                            </div>
                            <!-- end /.upload_modules -->
                        </div>
                        <!-- end /.upload_modules -->


                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>Choose Files</h3>
                            </div>
                            <!-- end /.module_title -->


                            <div class="form-group text-center">
                                <label for="my-input" class="text-danger"><small><strong>Please Click To Refresh Tray To Access Your Upload Datas</strong></small></label>
                                <br>
                                <button type="button" id="test" class="btn btn--round btn--sm">Refresh Tray</button>
                            </div>



                            <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="thumbnail">Item Thumbnail <small class="text-danger">(jpg, png, jpeg) size: 200x200</small></label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="list_all_files" class="text_field list_all_files" name="item_thumbnail" required>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="preview_image">Item Preview (jpg, png, jpeg) size: 590x300</label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="preview" class="text_field list_all_files" name="item_preview" required>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="main_file">Main File (.zip) only</label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="main-files" class="text_field list_all_files" name="item_main_file" required>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>
                                <!-- end /.row -->

                            </div>
                            <!-- end /.upload_modules -->
                        </div>



                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>Additional Information</h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="item_category">Category</label>
                                            <select class="text_field id="selected" name="item_cat" required>
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
                                        <!-- end /.form-group -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="item_version">Item Version</label>
                                            <input id="item_version" class="text_field" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_version;?>
" type="number" name="item_version">
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_demo">Live Demo Url</label>
                                            <input id="item_demo" class="text_field" type="url" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_live_demo;?>
" name="item_demo" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_price">Regular Licence Price</label>
                                            <input id="item_price" class="text_field" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
" type="number" name="item_r_liecence" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_price">Extended Licence Price</label>
                                            <input id="item_price" class="text_field" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_exte_price;?>
" name="item_e_liecence" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>
                                <!-- end /.row -->


                                <div class="form-group">
                                     <label for="item_tags">Tags</label>
                                    <textarea id="item_tags" class="text_field" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required><?php echo $_smarty_tpl->tpl_vars['item']->value->item_tags;?>
</textarea>
                                </div>
                                <div class="form-check">
                                    <input id="is_free" class="form-check-input" type="checkbox" name="free_item" value="true" <?php if ($_smarty_tpl->tpl_vars['item']->value->item_to_free == 1) {?>checked<?php }?>>
                                    <label for="is_free" class="form-check-label">Apply For Free File Of The Week</label>
                                </div>
                            </div>
                            <!-- end /.upload_modules -->
                        </div>
                        <!-- end /.upload_modules -->

                        <!-- submit button -->
                        <button type="submit" name="submit" class="btn btn--round btn--fullwidth btn--lg">Update Your Item</button>
                    </form>
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4 col-md-5">
                    <aside class="sidebar upload_sidebar">
                        <div class="sidebar-card">
                            <div class="card-title">
                                <h3>Quick Upload Rules</h3>
                            </div>

                            <div class="card_content">
                                <div class="card_info">
                                    <h4>Can no see Uploaded File</h4>
                                    <p>After uploading your file you are require to clic on the <b>Refresh Tray</b> button so that Your uploaded files will be availble.</p>
                                </div>

                                <div class="card_info">
                                    <h4>Image Upload</h4>
                                    <p>Thumbnail : 200 x 200, Preview image : 590 x 300</p>
                                </div>

                                <div class="card_info">
                                    <h4>File Upload</h4>
                                    <p>Main file must be in zip format</p>
                                </div>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->

                        
                        <!-- end /.sidebar-card -->
                        <!-- end /.sidebar-card -->
                    </aside>
                    <!-- end /.sidebar -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>

    
<?php
}
}
/* {/block 'contents'} */
/* {block 'ckeditor_head'} */
class Block_18443673015dd335ebded377_49591296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_18443673015dd335ebded377_49591296',
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
class Block_12178225335dd335ebdf1de3_70402968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_12178225335dd335ebdf1de3_70402968',
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
class Block_1258683915dd335ebdf4898_85015939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_1258683915dd335ebdf4898_85015939',
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
class Block_19171465305dd335ebdf7ec9_33347043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_19171465305dd335ebdf7ec9_33347043',
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
