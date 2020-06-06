{extends file="layouts/upload.tpl"}

{block name=contents}

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{$url.main}">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Update Your Item</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">{$item->item_name}</h1>
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
            {$form_alert}
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <form action="{$url.main}update-item/{$item->item_id}/{$item->item_slug}" method="post">
                        {$csrf_token}
                        <div class="upload_modules">
                            <div class="modules__title">
                                <h3>Item Name & Description</h3>
                            </div>
                            <!-- end /.module_title -->

                            <div class="modules__content">

                                <div class="form-group no-margin">
                                    <p class="label">Product Description</p>
                                    <textarea id="editor" class="form-control" name="item_description" rows="3" required>{$item->item_description}</textarea>
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
                                                <select name="country" id="list_all_files" class="text_field list_all_files" name="item_thumbnail">
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
                                                <select name="country" id="preview" class="text_field list_all_files" name="item_preview">
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
                                                <select name="country" id="main-files" class="text_field list_all_files" name="item_main_file">
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
                                                {if $upl_subs}
                                                {foreach from=$upl_subs item=$sub}
                                                    {if not empty($sub->child_cats)}
                                                        <optgroup label="{$sub->sub_cat_name}">
                                                            {foreach from=$sub->child_cats item=chi}
                                                                <option value="{$chi->child_cat_id}" {if $item->item_cat_id eq $chi->child_cat_id}selected{/if}>{$chi->child_cat_name}</option>
                                                            {/foreach}
                                                        </optgroup>
                                                    {/if}
                                                {/foreach}
                                                {/if}
                                            </select>
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="item_version">Item Version</label>
                                            <input id="item_version" class="text_field" value="{$item->item_version}" type="number" name="item_version">
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_demo">Live Demo Url</label>
                                            <input id="item_demo" class="text_field" type="url" value="{$item->item_live_demo}" name="item_demo" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_price">Regular Licence Price</label>
                                            <input id="item_price" class="text_field" value="{$item->item_regu_price}" type="number" name="item_r_liecence" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="item_price">Extended Licence Price</label>
                                            <input id="item_price" class="text_field" type="number" value="{$item->item_exte_price}" name="item_e_liecence" required>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-6 -->
                                </div>
                                <!-- end /.row -->


                                <div class="form-group">
                                     <label for="item_tags">Tags</label>
                                    <textarea id="item_tags" class="text_field" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required>{$item->item_tags}</textarea>
                                </div>
                                <div class="form-check">
                                    <input id="is_free" class="form-check-input" type="checkbox" name="free_item" value="true" {if $item->item_to_free eq 1}checked{/if}>
                                    <label for="is_free" class="form-check-label">Apply For Free File Of The Week</label>
                                </div>
                                <div class="form-check">
                                <input id="is_free" class="form-check-input" type="checkbox" name="flash_sale" value="true" {if $item->item_to_flash eq 1}checked{/if}>
                                <label for="is_free" class="form-check-label">Apply For Flash Sale</label>
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

    
{/block}

{block name=ckeditor_head}
<script src="{$ck}/ckeditor.js"></script>    
{/block}

{block name=ckeditor_foot}
<script>
CKEDITOR.replace( 'editor' );
</script>
{/block}

{block name=upl_head}
<link href="{$upl}/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
{/block}

{block name=upl_foot}

<script src="{$upl}/dist/js/jquery.dm-uploader.min.js"></script>
<script src="{$upl}/demo-ui.js"></script>
<script src="{$upl}/demo-config.js"></script>

<!-- File item template -->
<script type="text/html" id="files-template">
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
</script>



<script>
{literal}
    $(document).ready(function() {
        $('#test').on('click', function() {
            //load all brands to table
            $.get("{/literal}{$url.main}/files/load_files{literal}", function(data) {
                $('.list_all_files').html(data);
            });
        });
    });
{/literal}
</script>
{/block}