{extends file="layouts/profile.tpl"}

{block name=contents}


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="active">
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Author's Settings</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="dashboard-area">

    <div class="dashboard_contents">
        <div class="container">
            {$form_alert}
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>Account Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <form class="setting_form" action="{$url.main}update-base-info" method="post" class="form-horizontal">
                {$csrf_token}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Basic Information
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse show" id="collapse2">
                                <div class="information_wrapper form--fields">
                                    <div class="form-group">
                                        <label for="acname">First Name
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="first-name" name="firstname" class="text_field" placeholder="First Name" value="{$user->user_firstname}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="acname">Last Name
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="last-name" name="lastname" class="text_field" placeholder="Last Name" value="{$user->user_lastname}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select id="country" class='text_field gds-cr' country-data-region-id="gds-cr-one" name="country" country-data-default-value="{$user->user_country}" required></select>
                                    </div>

                                    <div class="form-group">
                                        <label for="region">Region</label>
                                        <select class='text_field' name="region" id="gds-cr-one" region-data-default-value="{$user->user_region}" required></select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Old Password
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="oldpass" class="text_field" name="oldpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="newpass">New Password
                                                </label>
                                                <input type="password" id="newpass" name="newpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="conpass">Confirm Password
                                                </label>
                                                <input type="password" id="conpass" name="conpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                    <div class="dashboard_setting_btn">
                                            <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Brief Information
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse" id="collapse1">
                                <form class="setting_form" action="{$url.main}update-profile-avater" method="post" class="form-horizontal">
                                {$csrf_token}
                                <div class="information_wrapper form--fields">
                                    <div class="">
                                         <div class="form-group">
                                            <label for="authbio">About You</label>
                                            <textarea name="about" id="authbio" class="text_field" placeholder="Short brief about yourself or your account...">{$user->user_about}</textarea>
                                        </div>
                                    </div>
                                    <div class="">
                                    <div class="dashboard_setting_btn">
                                            <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Profile Image & Cover
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                <form class="setting_form" action="{$url.main}update-profile-avater-digcool" enctype="multipart/form-data" method="post" class="form-horizontal">
                                {$csrf_token}
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <img src="{$u_photo}{$user->user_avater}" width=35px alt="Author profile area">
                                        <div class="img_info">
                                            <p class="bold">Profile Image</p>
                                            <p class="subtitle">JPG or PNG 200x200 px</p>
                                        </div>

                                        <label for="cover_photo" class="upload_btn">
                                            <input type="file" id="cover_photo" name="avater">
                                            <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                        </label>
                                    </div>

                                    <div class="prof_img_upload">
                                        <p class="bold">Cover Image</p>
                                        <img src="{if $user->user_banner}{$u_photo}{$user->user_banner}{else}{$ast}/img/profile/banner.jpg{/if}" height="190px" alt="Cover Image">

                                        <div class="upload_title">
                                            <p>JPG, GIF or PNG 750x370 px</p>
                                            <label for="dp" class="upload_btn">
                                                <input type="file" name="banner" id="dp">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="dashboard_setting_btn">
                                        <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Social Profiles
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <form action="{$url.main}update-social" method="post">
                            {$csrf_token}
                            <div class="information__set social_profile toggle_module collapse " id="collapse5">
                                <div class="information_wrapper">
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-facebook"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: www.facebook.com/name" name="fb" value="{$user->user_fb}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: www.twitter.com/name" name="tw" value="{$user->user_tw}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-google-plus"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: name@zubdev.net" name="google" value="{$user->user_google}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-behance"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: LinkedIn profile url" name="ln" value="{$user->user_ln}">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->
                                    <div class="dashboard_setting_btn">
                                        <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                    </div>
                                   
                                    <!-- end /.social__single -->
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.social_profile -->
                            </form>
                        </div>
                        <!-- end /.information_module -->

                        
                </div>
                <!-- end /.row -->
            
            <!-- end /form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>


    
{/block}

{block name=p_s_foot}
<script src="{$contf}/js/geodatasource-cr.min.js"></script>
{/block}

{block name=p_s_head}
<link rel="stylesheet" href="{$contf}/css/geodatasource-countryflag.css">
<script type="text/javascript" src="{$contf}/js/Gettext.js"></script>
{/block}