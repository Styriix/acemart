{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Stripe Payment Gateway Infomations</h3>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/update_stripe_gateway" method="post" class="validate">
            {$csrf_token}
            <div class="form-group">
                <label for="api_key">Stripe API Public Key</label>
                <input id="api_key" class="form-control" type="text" value="{$stripe->sg_public_key}" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Stripe API Secret key</label>
                <input id="api_secret_key" class="form-control" type="text" value="{$stripe->sg_secret_key}" name="secret_key" required>
            </div>

            <div class="form-group">
                <label for="mode">Stripe Payment Status</label>
                <select id="mode" class="form-control" name="sg_status" required>
                    <option value="">Select Option</option>
                    <option value="1" {if $stripe->sg_status eq 1}selected{/if}>Enable</option>
                    <option value="0" {if $stripe->sg_status != 1}selected{/if}>Disabled</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>
</div>
    
{/block}