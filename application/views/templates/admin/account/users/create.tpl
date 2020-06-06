{extends file="layouts/admin.tpl"}

{block name=contents}
    
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Create A New User Account</h4>
    </div>
    <div class="grid-body">
        {$form_alert}
        <form method="post" action="{$url.admin}/create_new_user" class="validate" enctype="multipart/form-data"enc>
            {$csrf_token}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">FirstName</label>
                        <input id="firstname" class="form-control" type="text" name="firstname" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">LastName</label>
                        <input id="lastname" class="form-control" type="text" name="lastname" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input id="username" class="form-control" type="text" name="username" minlength='4' maxlength="50" required>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" type="email" name="email" required>
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
                            <option value="1">Active</option>
                            <option value="2">Blocked</option>
                            <option value="0">Not Verified</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="region">Region</label>
                        <select id="gds-cr-one" class="form-control" name="region" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" minlength="8" name="password" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="con_pass">Confirm Password</label>
                        <input id="con_pass" class="form-control" type="password" name="con_pass" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Create New User Account</button>
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