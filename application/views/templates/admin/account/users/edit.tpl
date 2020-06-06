{extends file="layouts/admin.tpl"}

{block name=contents}
    
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Update <b>{$u_edit->user_firstname} {$u_edit->user_lastname} ({$u_edit->user_username})<b> Accounts</h4>
    </div>
    <div class="grid-body">
        {$form_alert}
        <form method="post" action="{$url.admin}/user_account/{$u_edit->user_username}" class="validate" enctype="multipart/form-data"enc>
            {$csrf_token}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">FirstName</label>
                        <input id="firstname" class="form-control" type="text" name="firstname" value="{$u_edit->user_firstname}" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">LastName</label>
                        <input id="lastname" class="form-control" type="text" name="lastname" value="{$u_edit->user_lastname}" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input id="username" class="form-control" type="text" name="username"value="{$u_edit->user_username}" minlength='4' maxlength="50" disabled>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" value="{$u_edit->user_email}" type="email" name="email" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="avater">Avater</label>
                        <input id="avater" class="form-control" type="file" name="avater">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Account Status</label>
                        <select id="status" class="form-control" name="status" required>
                            <option value="">Select Status</option>
                            <option value="1" {if $u_edit->user_status eq 1}selected{/if}>Active</option>
                            <option value="2" {if $u_edit->user_status eq 2}selected{/if}>Blocked</option>
                            <option value="0" {if $u_edit->user_status eq 0}selected{/if}>Not Verified</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country"  country-data-default-value="{$u_edit->user_country}" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="region">Region</label>
                        <select id="gds-cr-one" class="form-control" name="region" region-data-default-value="{$u_edit->user_region}" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" minlength="8" name="password" placeholder="Leave empty to make no changes">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="con_pass">Confirm Password</label>
                        <input id="con_pass" class="form-control" type="password" name="con_pass">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Update User Account</button>
                </div>

            </div>
        </form>
    </div>
</div>

{/block}


{block name=contf_head} 
<link rel="stylesheet" href="{$contf}/css/geodatasource-countryflag.css">
<script type="text/javascript" src="{$contf}/js/Gettext.js"></script>
{/block}

{block name=contf_foot} 
<script src="{$contf}/js/geodatasource-cr.min.js"></script>
{/block}