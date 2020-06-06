{extends file="layouts/admin.tpl"}

{block name=contents}
    
<div class="grid simple">
    <form action="{$url.admin}/update_amazon_s3_storage" method="post">
        {$csrf_token}
        <div class="card grid-body">
            {$form_alert}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="public_key">Access Key</label>
                            <input id="public_key" class="form-control" value="{$aws->s3_access_key}" type="text" name="s3_access">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Secret Key</label>
                            <input id="sceret_key" class="form-control" value="{$aws->s3_secret_key}" type="text" name="sc_key">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Bucket</label>
                            <input id="sceret_key" class="form-control" value="{$aws->s3_bucket_name}" type="text" name="s3_bucket">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="enable">Activation</label>
                            <select id="enable" class="form-control" name="enable">
                                <option value="1" {if $aws->s3_status eq 1}selected{/if}>Activate</option>
                                <option value="0" {if $aws->s3_status != 1}selected{/if}>DeActivate</option>
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