<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login Area</h4>
        </div>
        <div class="modal-body">
            <div class="box">
                    <div class="content">
                    {* <div class="social">
                        <center><img class="img-responsive" src="{$app.logo}" alt="logo"></center>
                    </div> *}
                   <div class="social" style="width:100%; margin:auto">
                        <a id="google_login" class="circle google" href="{$google_login}">
                            <i class="fa fa-google-plus fa-fw"></i>
                        </a>
                        <a id="facebook_login" class="circle facebook" href="{$fb_login}">
                            <i class="fa fa-facebook fa-fw"></i>
                        </a>
                    </div>

                    <div class="division">
                        <div class="line l"></div>
                            <span>or</span>
                        <div class="line r"></div>
                    </div>
                    <div id="sign_info"></div>
                    <div class="form loginBox">
                         <form action="#" method="POST" id="user-login">
                                {$csrf_token}
                                <input class="form-control" type="text" name="username" placeholder="UserName" required>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                                <button class="btn-default btn-login" id="signin-btn" type="submit" value="Login">Login</button>
                        </form>
                    </div>
                    </div>
            </div>
            <div class="box">
                <div class="content registerBox" style="display:none;">
                    <div class="form">
                    <form method="POST" id="reg_user" data-remote="true" action="{$url.main}registration" accept-charset="UTF-8">
                    {$csrf_token}
                    {if $myRef}
                        <input type="hidden" name="ref" value="{$myRef}">
                    {/if}
                    <div class="">
                        <div class="">
                            <input type="text" id="first-name" name="firstname" class="form-control"placeholder="FirstName" required>
                        </div>

                        <div class="">
                            <input type="text" id="last-name" name="lastname" class="form-control"placeholder="Lastname" required>
                        </div>

                        <div class="">
                            <input type="text" id="user-name" name="username" class="form-control"placeholder="Username" required>
                        </div>

                        <div class="">
                            <input type="text" id="last-name" name="email" class="form-control"placeholder="Email" required>
                        </div>

                        <div class="">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="">
                            <input type="password" id="con_pass" name="con_pass" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        {if $robot.isRobotCheck}
                        <div class="">
                            <div class="g-recaptcha form-field"></div>
                        </div>
                        {/if}
                    </div>
                    <button type="submit" name="commit" class="btn btn-default btn-register reg-btn" id="reg_btn" {if $robot.isRobotCheck}disabled{/if}> Create Account </button>
                    </form>
                    </div>
                </div>

                    <div class="form passBox" style="display:none;">
                         <form action="#" method="POST" id="reset-pass">
                                {$csrf_token}
                                <input class="form-control" type="text" name="pass_user" placeholder="UserName" required>
                                <input class="form-control" type="text" name="pass_email" id="email" placeholder="email" required>
                                <button class="btn-default btn-login" id="findpass" type="submit" value="Login">Reset Password</button>
                        </form>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="forgot login-footer">
			<!-- <p><b>Demo User Details:</b></p>
			<p>Username: 'user'</p>
			<p>Password: '12345678'</p> -->
                <span>Looking to
                        <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
                <span>Or <a href="javascript: showPassForm();">Recover Password</a></span>
            </div>
            <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
            </div>
        </div>
        </div>
    </div>
    </div>
    {if $robot.isRobotCheck}
    <script type="text/javascript">
    {literal}
    var onloadCallback = function() {
        var captchaContainer = document.querySelector('.g-recaptcha');
        grecaptcha.render(captchaContainer, {
          'sitekey' : '{/literal}{$robot.p_key}{literal}'
        });
        document.querySelector('.reg-btn[type="submit"]').disabled = false;
    };
    {/literal}
    </script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>&onload=onloadCallback&render=explicit" async defer></script>
    {/if}