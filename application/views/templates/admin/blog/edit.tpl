{extends file="layouts/admin.tpl"}

{block name=contents}
{$from_alert}
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-info">Update Blog Post</h4>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/update_blog_post/{$e_blog->blog_id}/{$e_blog->blog_slug}" method="post" enctype="multipart/form-data" role="form" class="validate" autocomplete="off">
            {$csrf_token}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="blog_title">Blog Title</label>
                        <input id="blog_title" class="form-control" type="text" name="blog_title" value="{$e_blog->blog_title}" minlength="3" maxlength="100" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="blog_category">Blog Category</label>
                        <select id="blog_category" class="form-control" name="blog_cat" required>
                            <option value="">Select Blog Category</option>
                            {if $cats}
                                {foreach from=$cats item=$cat}
                                    <option value="{$cat->bc_id}" {if $e_blog->bc_id eq $cat->bc_id}selected{/if}>{$cat->bc_name}</option>
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
                            <option value="1" {if $e_blog->blog_status_id eq 1}selected{/if}>Active</option>
                            <option value="0" {if $e_blog->blog_status_id eq 0}selected{/if}>Draft</option>
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
                        <textarea id="editor" class="form-control" name="blog_contents" rows="3" required>{$e_blog->blog_contents}</textarea>
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