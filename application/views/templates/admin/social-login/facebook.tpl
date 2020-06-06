{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">FAcebook Social Login API Credentials</h3>
        <h5 class="text-center text-danger"><strong>How To Set Up?</strong></h5>
    </div>
    <div class="grid-body">
    <p>
        <ol class="text-primary">
            <li>Create an App key from: http://developers.facebook.com</li>
            <li>Make sure your Redirect url is set to: {$url.main}auth/fb_auth</li>
            <li>Copy out your App id and App Secret key</li>
        </ol>
    </p>
    <hr>
        <form action="{$url.admin}/update_fb_login_key" method="post" class="validate">
            {$csrf_token}
            <div class="form-group">
                <label for="api_key">Facebook Application Key</label>
                <input id="api_key" class="form-control" type="text" value="{$fb_key->fb_app_key}" name="fb_app_key">
            </div>
            <div class="form-group">
                <label for="api_secret_key">Facebook Application Secret Key</label>
                <input id="api_secret_key" class="form-control" type="password" value="{$fb_key->fb_app_secret}" name="fb_app_secret_key">
            </div>
            <div class="form-group">
                <label for="allow">Allow Facebook Login</label>
                <select id="allow" class="form-control" name="fb_app_status">
                    <option value="1" {if $fb_key->fb_status eq 1}selected{/if}>Accept</option>
                    <option value="0" {if $fb_key->fb_status eq 0}selected{/if}>Disabled</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>
</div>
    
{/block}