{extends file="layouts/profile.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Settings</li>
            </ul>
        </div>
    </div>  
</div> 

<!-- Settings Page Start Here -->
{$form_alert}
<div class="settings-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row settings-wrapper">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <ul class="settings-title">
                    <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                    <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                    <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
            
                
                    <div class="settings-details tab-content">
                        <div class="tab-pane fade active in" id="Personal">
                            <h2 class="title-section">Personal Information</h2>

                            <form action="{$url.main}update-base-info" method="post" class="form-horizontal">
                                {$csrf_token}
                                <div class="personal-info inner-page-padding"> 
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="firstname" value="{$user->user_firstname}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="last-name" name="lastname" value="{$user->user_lastname}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Country / Region</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="custom-select">
                                                        <select id="country" class='select2 form-control gds-cr' country-data-region-id="gds-cr-one" name="country" country-data-default-value="{$user->user_country}" required>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="custom-select">
                                                        <select class='select2 form-control' name="region" id="gds-cr-one" region-data-default-value="{$user->user_region}" required>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Old Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="oldpass" name="oldpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">New Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="newpass" name="newpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Confirm Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="conpass" name="conpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>
                                    
                                   
                                    <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>                                        
                                </div>
                            </form> 
                        </div> 
                        <div class="tab-pane fade" id="Profile">
                            <h3 class="title-section">Public Profile</h3>
                            <form method="post" action="{$url.main}update-profile-avater" enctype="multipart/form-data">
                                {$csrf_token}
                                <div class="public-profile inner-page-padding"> 
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Avatar</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <img class="img-responsive" src="{$u_photo}{$user->user_avater}" width="100px" alt="Avatar">
                                            <div class="file-title">Upload a new avatar:</div>
                                            <input type="file" name="avater" id="avater" class="form-control">
                                            <div class="file-size">JPEG 80x80px</div>
                                        </div>
                                    </div> 
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Banner Image</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <img class="img-responsive" src="{if $user->user_banner}{$u_photo}{$user->user_banner}{else}{$ast}/img/profile/banner.jpg{/if}" alt="Avatar">
                                            <div class="file-title">Upload a new homepage image:</div>
                                            <input type="file" name="banner" id="banner" class="form-control">
                                            <div class="file-size">JPEG 590x242</div>
                                        </div>
                                    </div> 
                                    
                                    
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Profile Text</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <textarea class="profile-heading" rows="5" name="about">{$user->user_about}</textarea>
                                            
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div> 
                        
                        <div class="tab-pane fade" id="Social">
                            <h2 class="title-section">Your Social Networks</h2> 
                            <div class="profile-social inner-page-padding">
                                <form action="{$url.main}update-social" method="post">
                                    {$csrf_token}
                                    <ul class="social-item"> 
                                        <li>
                                        <div class="social-item-img"><img src="{$ast}/img/profile/social2.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="fb" value="{$user->user_fb}" type="text">
                                    </li>
                                        <li>
                                        <div class="social-item-img"><img src="{$ast}/img/profile/social3.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="tw" value="{$user->user_tw}" type="text">
                                    </li>                                      
                                        <li>
                                        <div class="social-item-img"><img src="{$ast}/img/profile/social6.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="google" value="{$user->user_google}" type="text">
                                    </li>
                                        <li>
                                        <div class="social-item-img"><img src="{$ast}/img/profile/social7.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="ln" value="{$user->user_ln}" type="text">
                                    </li>                                                                                    
                                </ul>                                       
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                                </form>
                            </div> 
                        </div>                                       
                    </div> 

                
            </div>  
        </div>  
    </div>  
</div> 
<!-- Settings Page End Here -->
    
{/block}

{block name=p_s_foot}
<script src="{$contf}/js/geodatasource-cr.min.js"></script>
{/block}

{block name=p_s_head}
<link rel="stylesheet" href="{$contf}/css/geodatasource-countryflag.css">
<script type="text/javascript" src="{$contf}/js/Gettext.js"></script>
{/block}