{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Active Items</h4>
    </div>
    <div class="grid-body">
        {$form_alert}
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
                        <th>Author</th>
                        <th>Item Name</th>
                        <th>Item Category</th>
                        <th>Item Status</th>
                        <th>Regular Price</th>
                        <th>Extended Price</th>
                        <th>Zip File</th>
                        <th>Released Date</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $items}
                    {assign var="i" value="1"}
                    {foreach from=$items item=$item}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$item->item_id}">
                        <label for="checkbox{$item->item_id}"></label>
                        </div>
                        </td>
                        <td>{$i++}</td>
                        <td><img src="{$u_photo}{$item->user_avater}" width="35px" alt="Profile Pic" data-toggle="tooltip" data-placement="top" title="{$item->user_firstname} {$item->user_lastname} ({$item->user_username})"></td>
                        <td>{$item->item_name}</td>
                        <td>{$item->sub_cat_name}</td>
                        <td>
                            {if $item->item_status eq 1}
                                <span class="badge badge-success">Active</span>
                            {elseif $item->item_status eq 2}
                                <span class="badge badge-warning">Paused</span>
                            {elseif $item->item_status eq 3}
                                <span class="badge badge-danger">Deleted</span>
                            {else}
                                <span class="badge badge-info">Not Approve</span>
                            {/if}
                        </td>
                        <td>{$app.currency}{$item->item_regu_price}</td>
                        <td>{$app.currency}{$item->item_exte_price}</td>
                        <td>
                            <form action="{$url.admin}/get_item_zip_file" method="post" id='download{$item->item_id}'>
                                {$csrf_token}
                                <input type="hidden" name="download" value="{$item->item_id}">
                                <a href="javascript:{}" onclick="document.getElementById('download{$item->item_id}').submit(); return false;"><span class="badge badge-info">Download</span></a>
                            </form>
                        </td>
                        <td>{Carbon\Carbon::parse($item->item_created_at)->format('d, F Y')}</td>
                        <td><a href="{$url.admin}/product/review-item/{$item->item_slug}/{$item->item_id}"><span class="badge badge-info">Review Item</span></a></td>
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