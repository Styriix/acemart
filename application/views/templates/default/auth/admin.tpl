{extends file="layouts/auth-admin.tpl"}


{block name=login_contents}

<div class="container">
    <div class="row login-container column-seperation">
        <div class="col-md-5 col-md-offset-1">
            <h2>
            Sign in to {$app.name}
            </h2>
            <br>
            
        </div>
        <div class="col-md-5">
            <br>
            {$form_alert}
            <form action="{$url.main}admin-login" class="login-form validate" id="login-form" method="post" name="login-form">
                {$csrf_token}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Email Address</label>
                        <input class="form-control" id="txtusername" name="txtemail" type="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Password</label> <span class="help"></span>
                        <input class="form-control" id="txtpassword" name="txtpassword" type="password" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button name="submit" class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
{/block}