{extends file="layouts/profile.tpl"}

{block name=contents}

<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>My Items</li>
            </ul>
        </div>
    </div>  
</div>

<div class="sales-statement-page-area bg-secondary section-space-bottom">
<div class="container">

<table id="example" class="table table-striped table-responsive table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Icon</th>
            <th>Item name</th>
            <th>Status</th>
            <th>Sale</th>
            <th>Release date</th>
            <th>Action</th>
        </tr>
    </thead>



    <tbody>
        {if $items}
        {foreach from=$items item=$item}
        <tr>
            <td><img src="{$prd_img}{$item->thumb_name}" width="35px" alt=""></td>
            <td><a href="{$url.main}item/{$item->item_id}/{$item->item_slug}">{$item->item_name}</a></td>
            <td>
                {if $item->item_status eq 0}
                    <span class="badge badge-info">In Review</span>
                {elseif $item->item_status eq 1}
                    <span class="badge badge-success">Active</span>
                {elseif $item->item_status eq 2}
                    <span class="badge badge-warning">Pause</span>
                {elseif $item->item_status eq 3}
                    <span class="badge badge-danger">Deleted</span>
                {/if}
            </td>
            <td>{$item->sales}</td>
            <td>{Carbon\Carbon::parse($item->item_created_at)->format('d F, Y')}</td>
            <td><a href="{$url.main}edit-item/{$item->item_id}/{$item->item_slug}"><span class="badge badge-primary">Edit Item</span></a></td>
        </tr>
        {/foreach}
        {/if}



    </tbody>
    <tfoot>
        <tr>
            <th>Icon</th>
            <th>Item name</th>
            <th>Status</th>
            <th>Sale</th>
            <th>Release date</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
</div>
</div>


    
{/block}

{block name=datatable_css}
<link rel="stylesheet" href="{$ast}/css/dataTables.bootstrap.min.css">
{/block}

{block name=datatable_js}
<script>
{literal}
    $(document).ready(function() {
    $('#example').DataTable();
} );
{/literal}
</script>
<script src="{$ast}/js/dataTables.bootstrap.min.js"></script>
<script src="{$ast}/js/jquery.dataTables.min.js"></script>
{/block}