{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-warning">Create New Blog Post</h4>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/create_blog_post" method="post" enctype="multipart/form-data" role="form" class="validate" autocomplete="off">
            {$csrf_token}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="blog_title">Blog Title</label>
                        <input id="blog_title" class="form-control" type="text" name="blog_title" value="{$old_title}" minlength="3" maxlength="100" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="blog_category">Blog Category</label>
                        <select id="blog_category" class="form-control" name="blog_cat" required>
                            <option value="">Select Blog Category</option>
                            {if $cats}
                                {foreach from=$cats item=$cat}
                                    <option value="{$cat->bc_id}">{$cat->bc_name}</option>
                                {/foreach}
                            {/if}
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_status">Blog Status</label>
                        <select id="blog_status" class="form-control" name="blog_status" required>
                        <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_preview">Blog Preview</label>
                        <input id="blog_preview" class="form-control" type="file" name="blog_preview">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="blog_contents">Blog Contents</label>
                        <textarea id="editor" class="form-control" name="blog_contents" rows="3" required>{$old_contents}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-success btn-block">Create New Blog</button>
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