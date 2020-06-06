{extends file="layouts/download.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>My Downloads</li>
            </ul>
        </div>
    </div>  
</div>

<!-- Sales Statement Page Start Here -->
<div class="sales-statement-page-area bg-secondary section-space-bottom">
    <div class="container">
        {$form_alert}
        <h2 class="title-section">My Downloads</h2>
        <div class="sales-statement-wrapper inner-page-padding">
            
            <div class="table-responsive">
                <table class="table table-striped">
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
                                    <a href="javascript:{}" onclick="document.getElementById('download{$download->item_id}').submit(); return false;"><span class="badge badge-success">Download</span></a>
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
<!-- Sales Statement Page End Here -->
    
{/block}