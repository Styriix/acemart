<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{$app.descrip}">
    <meta name='keyword' content="{$app.meta_keys}">


    <title>{$app.name} | Create Account</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{$ast}/css/plugins.min.css">
    <link rel="stylesheet" href="{$ast}/css/style.css">
    <!-- endinject -->

    <link rel="shortcut icon" type="image/x-icon" href="{$app.favicon}">

    {block name=item_deails_css} {/block}
    {block name=cat_head} {/block}

    <link href="{$ast}/css/login-register.css" rel="stylesheet" />
    <script src="{$ast}/js/login-register.js" type="text/javascript"></script>

    <link rel="stylesheet" href="{$contf}/css/geodatasource-countryflag.css">
    <script type="text/javascript" src="{$contf}/js/Gettext.js"></script>

</head>

<body class="preload signup-page">

{include file="inc/head/menu-area.tpl"}

{block name=contents} {/block}

{include file="inc/foot/footer.tpl"}}

<script src="{$ast}/js/plugins.min.js"></script>
    <script src="{$ast}/js/script.min.js"></script>
    <!-- endinject -->

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