{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Bitcoin Gateway Infomations</h3>
        <h5 class="text-center text-danger"><strong>How To Set Up?</strong></h5>
    </div>
    <div class="grid-body">
    <p>
        <ol class="text-primary">
            <li>Create an account at: http://gourl.lo</li>
            <li>Create a bitcoin payment box credential on the same website</li>
            <li>Copy out your Private and Public key</li>
            <li>Go to you server root where this script was install</li>
            <li>Open: lib >> crtypto>config.php</li>
            <li>Please fill in the space that requires your database infomations</li>
            <li>Fill in the space that require your private. <b>Note:</b> This step are to be done in the crypto.config.php in the lib folder</li>
            <li>Finally fill in the bellow field with you credentials and all is done.</li>
            <li>Please if you need help or confuse please use the support section where you purchase this script i will be glad to help you out.</li>
        </ol>
    </p>
    <hr>
        <form action="{$url.admin}/update_bitcoin_gateway" method="post" class="validate">
            {$csrf_token}
            <div class="form-group">
                <label for="api_key">Bitcoin Public Key</label>
                <input id="api_key" class="form-control" type="text" value="{$btc->btc_public_key}" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Bitcoin Private/Secrete key</label>
                <input id="api_secret_key" class="form-control" type="text" value="{$btc->btc_private_key}" name="secret_key" required>
            </div>
            <div class="form-group">
                <label for="allow">Accept Bitcoin</label>
                <select id="allow" class="form-control" name="btc_status">
                    <option value="1" {if $btc->btc_status eq 1}selected{/if}>Accept</option>
                    <option value="0" {if $btc->btc_status eq 0}selected{/if}>Disabled</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>
</div>
    
{/block}