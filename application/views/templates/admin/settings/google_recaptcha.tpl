{extends file="layouts/admin.tpl"}

{block name=contents}
    
<div class="grid simple">
    <form action="{$url.admin}/update_google_recaptcha" method="post">
        {$csrf_token}
        <div class="card grid-body">
            {$form_alert}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="public_key">Public key</label>
                            <input id="public_key" class="form-control" value="{$robot.p_key}" type="text" name="pb_key">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Secret Key</label>
                            <input id="sceret_key" class="form-control" value="{$robot.s_key}" type="text" name="sc_key">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="enable">Activation</label>
                            <select id="enable" class="form-control" name="enable">
                                <option value="1" {if $robot.enable eq 1}selected{/if}>Activate</option>
                                <option value="0" {if $robot.enable != 1}selected{/if}>DeActivate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


{/block}