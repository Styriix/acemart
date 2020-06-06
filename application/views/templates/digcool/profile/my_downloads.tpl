{extends file="layouts/download.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<section class="dashboard-area">
<div class="dashboard_contents">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="dashboard_title_area clearfix">
            <div class="dashboard__title pull-left">
                <h3>My Downloads</h3>
            </div>
        </div>
        <!-- end /.dashboard_title_area -->
    </div>
    <!-- end /.col-md-12 -->
</div>



<div class="withdraw_module withdraw_history">
{$form_alert}
<div class="table-responsive">
<table id="example" class="table withdraw__table table-striped table-bordered">
    <thead>
        <tr>
        <th>#</th>
        <th>Item Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Last Updated</th>
        <th>Download</th>
        <th>Liecense</th>
        </tr>
    </thead>
    <tbody>
        {if $downloads}
        {assign var='i' value="1"}
        {foreach from=$downloads item=$download}
        <tr>
            <th scope="row">{$i++}.</th>
            <td><a href="{$url.main}item/{$download->item_id}/{$download->item_slug}">{$download->item_name}</a></td>
            <td>{$download->user_username|ucfirst}</td>
            <td>{$app.currency}{$download->item_regu_price}</td>
            <td>
                {if $download->item_updated_at}
                    {Carbon\Carbon::parse($download->item_updated_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}
                {else}
                    {Carbon\Carbon::parse($download->item_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}
                {/if}
            </td>
            <td>
                <form action="{$url.main}download" method="post" id='download{$download->item_id}'>
                    {$csrf_token}
                    <input type="hidden" name="item" value="{$download->item_id}">
                    <a href="javascript:{}" onclick="document.getElementById('download{$download->item_id}').submit(); return false;"><span class="btn btn--round btn-sm cancel_btn">Download</span></a>
                </form>
            </td>
            <td><a href="{$url.main}item-license/{$download->item_id}" target="_blank">View Liecense</a></td>
        </tr>
        {/foreach}
        {/if}

    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</section>
<!-- Sales Statement Page End Here -->
    
{/block}