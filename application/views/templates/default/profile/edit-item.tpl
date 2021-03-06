{extends file="layouts/upload.tpl"}

{block name=contents}
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Edit Item</li>
            </ul>
        </div>
    </div>  
</div>

<div class="product-upload-page-area bg-secondary section-space-bottom">
    <div class="container card">
        <h3 class="title-section">Upload Your item</h3>

        <form action="{$url.main}update-item/{$item->item_id}/{$item->item_slug}" method="post" class="product-upload-wrapper inner-page-padding">
            {$csrf_token}
            <div class="card-body">
                {$form_alert}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_description">Item Description</label>
                            <textarea id="editor" class="form-control" name="item_description" rows="3" required>{$item->item_description}</textarea>
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
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="item_version">Item Version</label>
                                <input id="item_version" class="form-control" type="number" value="{$item->item_version}" name="item_version">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_demo">Live Demo Url</label>
                                <input id="item_demo" class="form-control" type="url" value="{$item->item_live_demo}" name="item_demo">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_price">Regular Licence Price</label>
                                <input id="item_price" class="form-control" type="number" value="{$item->item_regu_price}" name="item_r_liecence" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_price">Extended Licence Price</label>
                                <input id="item_price" class="form-control" type="number" value="{$item->item_exte_price}" name="item_e_liecence" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="item_tags">Tags</label>
                                <textarea id="item_tags" class="form-control" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required>{$item->item_tags}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input id="is_free" class="form-check-input" type="checkbox" name="free_item" value="true" {if $item->item_to_free eq 1}checked{/if}>
                                <label for="is_free" class="form-check-label">Apply For Free File Of The Week</label>
                            </div>
                            <div class="form-check">
                                <input id="is_free" class="form-check-input" type="checkbox" name="flash_sale" value="true" {if $item->item_to_flash eq 1}checked{/if}>
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