{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4>Main Item Categories</h4>
    </div>
    <div class="grid-body">
        {$form_alert}
        {if $url_5}
            <form action="{$url.admin}/update_child_category/{$edit->child_cat_id}/{$edit->child_cat_slug}" method="post" role="form" class="validate" autocomplete="off">
                {$csrf_token}
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-5">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" value="{$edit->child_cat_name}" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-8 col-sm-4">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="main_cat" required>
                                <option value="">Select Sub Categroy</option>
                                {if $list_subs}
                                    {foreach from=$list_subs item=$smc}
                                        <option value="{$smc->sub_cat_id}" {if $edit->child_sub_cat_id eq $smc->sub_cat_id}selected{/if}>{$smc->sub_cat_name}</option>
                                    {/foreach}
                                {/if}
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4 col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Update Category</button>
                        </div>
                    </div>
                </div>
            </form>
        {else}

            <form action="{$url.admin}/create_child_category" method="post" role="form" class="validate" autocomplete="off">
                {$csrf_token}
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-5">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-8 col-sm-4">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="main_cat" required>
                                <option value="">Select Sub Categroy</option>
                                {if $list_subs}
                                    {foreach from=$list_subs item=$smc}
                                        <option value="{$smc->sub_cat_id}">{$smc->sub_cat_name}</option>
                                    {/foreach}
                                {/if}
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4 col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Category</button>
                        </div>
                    </div>
                </div>
            </form>
        {/if}

        <hr>

        <div class="">
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
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Created</th>
                        <th>Actions</th>
                        <th>Deleting</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $child_cats}
                    {assign var="i" value="1"}
                    {foreach from=$child_cats item=$cat}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$cat->child_cat_id}">
                        <label for="checkbox{$cat->child_cat_id}"></label>
                        </div>
                        </td>
                        <td>{$i++}</td>
                        <td>{$cat->child_cat_name}</td>
                        <td>{$cat->sub_cat_name}</td>
                        <td>{Carbon\Carbon::parse($cat->child_cat_created_at)->format('d, F Y')}</td>
                        <td><a href="{$url.admin}/category/child-category/edit-category/{$cat->child_cat_slug}"><span class="badge badge-primary">Edit Category</span></a></td>
                        <td>
                            <form action="{$url.admin}/delete_child_category/{$cat->child_cat_id}" method="post" onsubmit="return confirm('Are you sure? If you delte all item and category relate wil be remove.');">
                                {$csrf_token}
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
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

{block name=data_table_css}
<link href="{$asset}/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="{$asset}/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
 <link href="{$asset}/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
{/block}

{block name=data_table_js}
<script src="{$asset}/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="{$asset}/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{$asset}/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{$asset}/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="{$asset}/plugins/datatables-responsive/js/lodash.min.js"></script>

<script src="{$asset}/js/datatables.js" type="text/javascript"></script>
{/block}