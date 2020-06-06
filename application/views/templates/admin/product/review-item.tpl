{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4>Create A New Product</h4>
    </div>
    <form action="{$url.admin}/review_item/{$edit->item_slug}/{$edit->item_id}" method="post" class="validate">
        {$csrf_token}
        <div class="grid-body">
            {$form_alert}
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input id="item_name" class="form-control" type="text" value="{$edit->item_name}" name="item_name" maxlength="100" required>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="item_author">Item Author</label>
                        <select id="item_author" class="form-control" name="item_author" required>
                            <option value="">Select Author</option>
                            {if $list_users}
                                {foreach from=$list_users item=$list_user}
                                    <option value="{$list_user->user_id}" {if $edit->item_user_id eq $list_user->user_id}selected{/if}>{$list_user->user_firstname} {$list_user->user_lastname} ({$list_user->user_username})</option>
                                {/foreach}
                            {/if}
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="item_description">Item Description</label>
                        <textarea id="editor" class="form-control" name="item_description" rows="3" required>{$edit->item_description}</textarea>
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
                <a href="{$url.main}static/files/{$edit->thumb_name}" target="_blank">View Image</a>
            </div>
            <div class="col-md-6">
                <h4 class="text-danger">Current Item Preview</h4>
                <a href="{$url.main}static/files/{$edit->pre_name}" target="_blank">View Image</a>
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
                                            <option value="{$chi->child_cat_id}" {if $chi->child_cat_id eq $edit->item_cat_id}selected{/if}>{$chi->child_cat_name}</option>
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
                            <input id="item_version" class="form-control" type="number" value="{$edit->item_version}" name="item_version">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_demo">Live Demo Url</label>
                            <input id="item_demo" class="form-control" value="{$edit->item_live_demo}" type="url" name="item_demo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Regular Licence Price</label>
                            <input id="item_price" class="form-control" type="number" value="{$edit->item_regu_price}" name="item_r_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="item_price">Extended Licence Price</label>
                            <input id="item_price" class="form-control" type="number" value="{$edit->item_exte_price}" name="item_e_liecence" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item_tags">Tags</label>
                            <textarea id="item_tags" class="form-control" placeholder="Exmple: PHP, script, social, chat, login, admin" name="item_tags" rows="3" required>{$edit->item_tags}</textarea>
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
<link href="{$upl}/styles.css" rel="stylesheet">
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