<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{$app.name} | Create Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$ast}/img/favicon.png">

    <!-- Normalize CSS --> 
    <link rel="stylesheet" href="{$ast}/css/normalize.css">

    <!-- Main CSS -->         
    <link rel="stylesheet" href="{$ast}/css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="{$ast}/css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{$ast}/css/font-awesome.min.css">
    
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{$ast}/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{$ast}/vendor/OwlCarousel/owl.theme.default.min.css">
    
    <!-- Main Menu CSS -->      
    <link rel="stylesheet" href="{$ast}/css/meanmenu.min.css">

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{$ast}/css/jquery.datetimepicker.css">

        <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{$ast}/css/reImageGrid.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{$ast}/css/hover-min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{$ast}/css/style.css">

    <!-- Modernizr Js -->
    <script src="{$ast}/js/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="{$contf}/css/geodatasource-countryflag.css">
<script type="text/javascript" src="{$contf}/js/Gettext.js"></script>

</head>
<body>

{include file="inc/head/pc-header.tpl"}
{include file="inc/head/mobile-header.tpl"}

{include file="inc/body/banner-area-sec.tpl"}

{block name=contents} {/block}


{include file="inc/foot/footer.tpl"}
<!-- jquery-->  
        <script src="{$ast}/js/jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="{$ast}/js/plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="{$ast}/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="{$ast}/js/wow.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="{$ast}/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="{$ast}/js/jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="{$ast}/js/jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="{$ast}/js/jquery.counterup.min.js"></script>
        <script src="{$ast}/js/waypoints.min.js"></script>

        <!-- Isotope js -->
        <script src="{$ast}/js/isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Gridrotator js -->
        <script src="{$ast}/js/jquery.gridrotator.js" type="text/javascript"></script>

        {block name=item_details_js} {/block}
        {block name=cat_foot} {/block}
        
        <!-- Custom Js -->
        <script src="{$ast}/js/main.js" type="text/javascript"></script>

        <script src="{$contf}/js/geodatasource-cr.min.js"></script>

        <script>
        {literal}
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        {/literal}
        </script>

        <script>
        {literal}
            $(document).ready(function() {
                $('#user-login').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#signin-btn').prop('disabled', true);
                    $('#signin-btn').text('Please Wait');

                    $.ajax({
                        url: '{/literal}{$url.main}auth/user_login{literal}',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#password').val("");
                            $('#sign_info').html(data).fadeIn();
                        }
                    });

                    $(document).ajaxComplete(function() {
                        $('#signin-btn').prop('disabled', false);
                        $('#signin-btn').text('Login');
                    });
                });
            });
        {/literal}
        </script>

        {if not $is_login}
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-login" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="avatar">
                                <img src="{$ast}/img/avatar.png" alt="Avatar">
                            </div>				
                            <h4 class="modal-title">Member Login</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div id="quick_info"></div>
                            <form action="#" method="post" id="quick-login">
                                {$csrf_token}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">	
                                </div>        
                                <div class="form-group">
                                    <button type="submit" id="btn-log" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                {literal}
                    $(document).ready(function() {
                        $('#quick-login').on('submit', function(e) {
                            e.preventDefault();
                            $('#quick_info').hide();
                            $('#btn-log').prop('disabled', true);
                            $('#btn-log').text('Please Wait');

                            $.ajax({
                                url: '{/literal}{$url.main}auth/user_login{literal}',
                                method: 'POST',
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(data) {
                                    $('#password').val("");
                                    $('#quick_info').html(data).fadeIn();
                                }
                            });

                            $(document).ajaxComplete(function() {
                                $('#btn-log').prop('disabled', false);
                                $('#btn-log').text('Login');
                            });
                        });
                    });
                {/literal}
                </script>


        {/if}

    </body>
</html>