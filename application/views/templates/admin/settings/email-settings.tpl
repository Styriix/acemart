{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Email Configuration</h3>
        <p class="text-info text-center">This configuration allows your application to send email to your users. If the settings not correctly set email will no be sending.</p>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/update_email_settings" id="basic-form" method="post" novalidate>
            {$csrf_token}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="default_email">Sender Email</label>
                        <input id="default_email" class="form-control" type="email" value="{$smtp->smtp_default_email}" name="sender_email" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sender_name">Sender Name</label>
                        <input id="sender_name" class="form-control" type="text" value="{$smtp->smtp_display_name}" name="sender_name" minlength="4" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_username">SMTP username</label>
                        <input id="smtp_username" class="form-control" type="text" value="{$smtp->smtp_username}" name="smtp_user" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_password">SMTP Password</label>
                        <input id="smtp_password" class="form-control" type="password" value="{$smtp->smtp_password}" name="smtp_pass" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_port">SMTP Port</label>
                        <input id="smtp_port" class="form-control" type="number" name="smtp_port" value="{$smtp->smtp_port}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="smtp_host">SMTP Host</label>
                        <input id="smtp_host" class="form-control" type="text" value="{$smtp->smtp_host}" name="smtp_host" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="smtp_type">SMTP Type</label>
                        <select id="smtp_type" class="form-control" name="smtp_type" required>
                            <option value="">Select Type</option>
                            <option value="tls" {if $smtp->smtp_type eq 'tls'}selected{/if}>TLS</option>
                            <option value="ssl" {if $smtp->smtp_type eq 'ssl'}selected{/if}>SSL</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
                </div>
            </div>
        </form>
    </div>
</div>    


{/block}