{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Paypal Payment Gateway Infomations</h3>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/update_papal_gateway" method="post" class="validate">
            {$csrf_token}
            <div class="form-group">
                <label for="api_key">Paypal API Public Key</label>
                <input id="api_key" class="form-control" type="text" value="{$paypal->pg_api_public_key}" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Paypal API Secret key</label>
                <input id="api_secret_key" class="form-control" type="text" value="{$paypal->pg_api_secret_key}" name="secret_key" required>
            </div>
            <div class="form-group">
                <label for="mode">Payment Mode</label>
                <select id="mode" class="form-control" name="mode" required>
                    <option value="">Select Option</option>
                    <option value="1" {if $paypal->pg_mode eq 1}selected{/if}>Live Mode</option>
                    <option value="0" {if $paypal->pg_mode != 1}selected{/if}>Test Mode</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mode">PayPal Payment Status</label>
                <select id="mode" class="form-control" name="pg_status" required>
                    <option value="">Select Option</option>
                    <option value="1" {if $paypal->pg_status eq 1}selected{/if}>Enable</option>
                    <option value="0" {if $paypal->pg_status != 1}selected{/if}>Disabled</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>
</div>
    
{/block}