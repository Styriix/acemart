{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="row">
    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Basic Settings</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="{$url.admin}/update_website_basic_settings" role="form" autocomplete="off" class="validate">
                    {$csrf_token}
                    <div class="form-group">
                        <label for="site_name">Website Name:</label>
                        <input id="site_name" class="form-control" type="text" value="{$app.name}" name="site_name" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="site_title">Website Title:</label>
                        <input id="site_title" class="form-control" type="text" value="{$app.title}" name="site_title" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="site_short_description">Website Short Description:</label>
                        <textarea id="site_short_description" class="form-control" name="site_short_description" rows="2" maxlength="250" required>{$app.short_descrip}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="site_description">Website Description</label>
                        <textarea id="site_description" class="form-control" name="site_description" rows="3">{$app.descrip}</textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Basic Settings</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Meta Tags</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="{$url.admin}/update_website_meta_tags" role="form" autocomplete="off" class="validate">
                    {$csrf_token}
                    
                    <div class="form-group">
                        <label for="meta_description">Meta Description:</label>
                        <textarea id="meta_description" class="form-control" name="meta_description" rows="4">{$app.meta_descrip}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea id="meta_keywords" class="form-control" name="meta_keywords" rows="5" placeholder="Example: PHP, Scripts, Codes, etc">{$app.meta_keys}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="theme_color">THeme Color</label>
                        <input id="theme_color" class="form-control" type="color" value="{$app.site_color|default:'#ff00ff'}" name="theme_color">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Meta Tags</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>Website <span class="semi-bold">Prefrences</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="{$url.admin}/update_website_prefrences" role="form" enctype="multipart/form-data" autocomplete="off">
                    {$csrf_token}
                    
                    <div class="form-group">
                        <label for="site_logo">Change Website Logo</label>
                        <input id="site_logo" class="form-control" type="file" name="site_logo">
                    </div>

                    <div class="form-group">
                        <label for="site_favicon">Change Website Favicon</label>
                        <input id="site_favicon" class="form-control" type="file" name="site_favicon">
                    </div>

                    <div class="form-group">
                        <label for="currency">Website Currency</label>
                        <select id="currency" class="form-control" name="site_currency" required>
                            <option value="">Select Preffered Currency</option>
                            <option value="USD" {if $app.currency_code eq 'USD'}selected{/if}>$ USD</option>
                            <option value="EUR" {if $app.currency_code eq 'EUR'}selected{/if}>€ EUR</option>
                            <option value="UKP" {if $app.currency_code eq 'UKP'}selected{/if}>£ UKP</option>
                            <option value="JPY" {if $app.currency_code eq 'JPY'}selected{/if}>¥ JPY</option>
                            <option value="NGN" {if $app.currency_code eq 'NGN'}selected{/if}>₦ NGN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="site_status">Website Status</label>
                        <select id="site_status" class="form-control" name="site_status">
                            <option value="{$app.site_status}">Select Website Status</option>
                            <option value="1">On</option>
                            <option value="0">Off</option>
                        </select>
                    </div>

                    <button type="submit" name="submit" class="btn btn-info btn-block">Save Prefrences</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4>More <span class="semi-bold">UserFull Settings</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="{$url.admin}/update_website_more" role="form" autocomplete="off">
                    {$csrf_token}
                    
                    <div class="form-group">
                        <label for="item_charge">Percent (%) Charge Per Item Sold</label>
                        <input id="item_charge" class="form-control" value="{$app.item_charge}" type="number" name="item_charge" required>
                    </div>

                    <div class="form-group">
                        <label for="min_withdraw">Author Minimum Withdrawal</label>
                        <input id="min_withdraw" class="form-control" value="{$app.min_withdraw}" type="number" name="min_withdraw" required>
                    </div>

                    <div class="form-group">
                        <label for="set_pay_data">Pay Author Earning Every First ... Of Every Month</label>
                        <select name="pay_day" class="form-control" id="pay_day" required>
                            <option value="">Select Day</option>
                            <option value="1" {if $app.pay_day eq 1}selected{/if}>Monday</option>
                            <option value="2" {if $app.pay_day eq 2}selected{/if}>Tuesday</option>
                            <option value="3" {if $app.pay_day eq 3}selected{/if}>Wednessday</option>
                            <option value="4" {if $app.pay_day eq 4}selected{/if}>Thursday</option>
                            <option value="5" {if $app.pay_day eq 5}selected{/if}>Friday</option>
                            <option value="6" {if $app.pay_day eq 6}selected{/if}>Saturday</option>
                            <option value="7" {if $app.pay_day eq 7}selected{/if}>Sunday</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="min_withdraw">Website Email</label>
                        <input id="site_email" class="form-control" value="{$app.email}" type="email" name="site_email" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-info btn-block">Save Settings</button>
                </form>
            </div>
        </div>
    </div>


</div>

{/block}

{block name=form_css}
<link href="{$asset}/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="{$asset}/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="{$asset}/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
{/block}

{block name=form_js}
<script src="{$asset}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="{$asset}/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>

<script src="{$asset}/js/form_validations.js" type="text/javascript"></script>
{/block}