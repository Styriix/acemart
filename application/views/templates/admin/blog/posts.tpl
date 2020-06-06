{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<a href="{$url.admin}/blog/create-new-blog"><button type="button" class="btn btn-success">Create New Post</button></a>
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Blog Posts Section</h4>
    </div>
    <div class="grid-body">

        <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="example">
                <thead>
                    <tr>
                        <th style="width:1%">
                        <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                        <input type="checkbox" value="1" id="checkbox0">
                        <label for="checkbox0"></label>
                        </div>
                        </th>
                        <th>#</th>
                        <th>Blog Preview</th>
                        <th>Blog Title</th>
                        <th>Blog Cateogry</th>
                        <th>Author</th>
                        <th>Blog Status</th>
                        <th>view(s)</th>
                        <th>Date Created</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $blogs}
                    {assign var="i" value="1"}
                    {foreach from=$blogs item=$blog}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$blog->blog_id}">
                        <label for="checkbox{$blog->blog_id}"></label>
                        </div>
                        </td>

                        <td>{$i++}</td>
                        <td><img src="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.blog_no_img}{/if}" width="50px" alt="Blog Preview"></td>
                        <td><a href="#">{$blog->blog_title}</a></td>
                        <td class="text-danger">{$blog->bc_name}</td>
                        <td class="text-primary"><b>{$blog->user_firstname} {$blog->user_lastname} ({$blog->user_username})</b></td>
                        <td>
                            {if $blog->blog_status_id eq 1}
                                <span class="badge badge-success">Active</span>
                            {else}
                                <span class="badge badge-warning">Draft</span>
                            {/if}
                        </td>
                        <td><span class="badge badge-info">{$blog->blog_view}</span></td>
                        <td>{Carbon\Carbon::parse($blog->blog_created_at)->diffForHumans(['options'=> Carbon\Carbon::ONE_DAY_WORDS])}</td>
                        <td>
                        <div class="row">
                            <form action="{$url.admin}/delete_blog_post/{$blog->blog_id}" method="post" id="del">
                            {$csrf_token}
                            <input type="hidden" name="del" value="{$blog->blog_id}">
                            <div class="col-md-6">
                                <a href="{$url.admin}/blog/edit-blog/{$blog->blog_id}/{$blog->blog_slug}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="col-md-6">
                                <a href="" onclick="document.getElementById('del').submit(); return false;" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>
                            </div>
                            </form>
                        </td>
                        
                    </tr>
                    {/foreach}
                    {/if}
                </tbody>
            </table>
        </div>
        
    </div>
</div>
    
{/block}