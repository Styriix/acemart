{extends file="layouts/auth.tpl"}

{block name=contents}

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{$url.main}">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Registration</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Create An Account</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
    
<section class="signup_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form id="personal-info-form" action="{$url.main}registration" method="POST">
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                        </div>
                        <!-- end .login_header -->
                        {$form_alert}

                        {$csrf_token}
                        <div class="login--form">

                            <div class="form-group">
                                <label class="control-label" for="first-name">First Name *</label>
                                <input type="text" id="first-name" name="firstname" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="last-name">Last Name *</label>
                                <input type="text" id="last-name" name="lastname" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">UserName</label>
                                <input type="text" id="username" name="username" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">E-mail Address *</label>
                                <input type="email" id="email" name="email" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">Country</label>
                                <select id="country" class="text_field gds-cr" country-data-region-id="gds-cr-one" name="country" required></select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Region *</label>
                                <select name="region" id="gds-cr-one" class="text_field" required></select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">Password</label>
                                <input type="password" id="password" name="password" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Confirm Password *</label>
                                <input type="password" id="con_pass" name="con_pass" class="text_field" required>
                            </div>

                            <button class="btn btn--md btn--round register_btn" type="submit" name="submit">Register Now</button>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                </form>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>


{/block}