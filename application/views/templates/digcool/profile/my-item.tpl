{extends file="layouts/profile.tpl"}

{block name=contents}


<section class="dashboard-area">
<div class="dashboard_contents">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="dashboard_title_area clearfix">
            <div class="dashboard__title pull-left">
                <h3>Available Items</h3>
            </div>
        </div>
        <!-- end /.dashboard_title_area -->
    </div>
    <!-- end /.col-md-12 -->
</div>



<div class="withdraw_module withdraw_history">
<div class="table-responsive">
<table id="example" class="table withdraw__table table-striped table-bordered">
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
                    <span class="btn btn-info btn--rounded">In Review</span>
                {elseif $item->item_status eq 1}
                    <span class="btn btn-success btn--rounded">Active</span>
                {elseif $item->item_status eq 2}
                    <span class="btn btn-warning btn--rounded">Pause</span>
                {elseif $item->item_status eq 3}
                    <span class="btn btn-danger btn--rounded">Deleted</span>
                {/if}
            </td>
            <td>{$item->sales}</td>
            <td>{Carbon\Carbon::parse($item->item_created_at)->format('d F, Y')}</td>
            <td><a href="{$url.main}edit-item/{$item->item_id}/{$item->item_slug}"><span class="btn btn-primary">Edit Item</span></a></td>
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
</div>
</div>
</div>

</section>
    
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