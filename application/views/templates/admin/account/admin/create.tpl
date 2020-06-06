{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-title no-border">
                <h4>Create New Admin Access Account</h4>
                <hr>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="{$url.admin}/create_new_admin" role="form" enctype="multipart/form-data" class="validate">
                    {$csrf_token}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" class="form-control" type="text" name="last_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" class="form-control" type="text" maxlength="50" name="username" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" class="form-control" type="email" name="email" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="profile_pic">Profile Picture</label>
                                <input id="profile_pic" class="form-control" type="file" name="profile_pic">
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
                                <label for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" class="form-control" type="password" minlength="8" name="con_password" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-success btn-block">Create New Account</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
{/block}