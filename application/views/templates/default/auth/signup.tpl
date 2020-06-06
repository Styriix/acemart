{extends file="layouts/auth.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Create Account</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->

<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Registration</h2>
        {$form_alert}
        <div class="registration-details-area inner-page-padding">
            <form id="personal-info-form" action="{$url.main}registration" method="POST">
                {$csrf_token}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="firstname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="lastname" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">UserName</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">Country</label>
                            <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country" required></select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">Region *</label>
                            <select name="region" id="gds-cr-one" class="form-control" required></select>
                        </div>
                    </div>

                </div>

                 <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">Confirm Password *</label>
                            <input type="password" id="con_pass" name="con_pass" class="form-control" required>
                        </div>
                    </div>

                </div>
                                       
                
                
                <div class="row">
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="submit" name="submit" value="Login">Create Account</button>
                        </div>
                    </div>
                </div> 
            </form>                      
        </div> 
    </div>
</div>
<!-- Registration Page Area End Here -->
    
{/block}