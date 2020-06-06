{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="row">
    <div class="col-md-4">
    <div class="grid simple" style="width: 18rem;">
    <img class="grid-title" src="/assets/default/theme/default-theme.png" style="width:inherit;" alt="Card image cap">
    <div class="grid-body">
        <h5 class="card-title">AceMart Default</h5>
        <form action="{$url.admin}/change_site_theme/1" method="post">
        {$csrf_token}
        {if $theme eq 'default'}
            <button type="submit" class="btn btn-primary btn-block" disabled>Selected</button>
        {else}
            <button type="submit" name="submit" class="btn btn-primary btn-block">Select</button>
        {/if}
        </form>
    </div>
    </div>
</div>
    <div class="col-md-4">
    <div class="grid simple col-md-3 col-xs-12" style="width: 18rem;">
    <img class="grid-title" src="/assets/default/theme/digcool.png" style="width:inherit;" alt="Card image cap">
    <div class="grid-body">
        <h5 class="card-title">DigCool</h5>
        <form action="{$url.admin}/change_site_theme/2" method="post">
        {$csrf_token}
        {if $theme eq 'digcool'}
            <button type="submit" class="btn btn-info btn-block" disabled>Selected</button>
        {else}
            <button type="submit" name="submit" class="btn btn-info btn-block">Select</button>
        {/if}
        </form>
    </div>
    </div>
</div>
</div>


    
{/block}