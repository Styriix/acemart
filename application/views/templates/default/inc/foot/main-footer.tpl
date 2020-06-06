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
        <script src="{$timer}/flipclock.js"></script>
        {block name=flip_timer} {/block}
        {block name=count-down-timer} {/block}
        {block name=profle_script} {/block}
        {block name=message_script} {/block}
        

        {block name=p_s_foot} {/block}

        {block name=item_details_js} {/block}
        {block name=cat_foot} {/block}
        {block name=ckeditor_foot} {/block}
        {block name=upl_foot} {/block}

        {block name=datatable_js} {/block}
        {block name=w_js} {/block}

        {block name=date_picker} {/block}
        {block name=item_liker_script} {/block}
        
        <!-- Custom Js -->
        <script src="{$ast}/js/main.js" type="text/javascript"></script>

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

        <script>
        {literal}
            $(document).ready(function() {
                $('#reg_user').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#reg_btn').prop('disabled', true);
                    $('#reg_btn').text('Please Wait');

                    $.ajax({
                        url: '{/literal}{$url.main}registration{literal}',
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
                        $('#reg_btn').prop('disabled', false);
                        $('#reg_btn').text('Register');
                    });
                });
            });
        {/literal}
        </script>

        <script>
        {literal}
            $(document).ready(function() {
                $('#reset-pass').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#findpass').prop('disabled', true);
                    $('#findpass').text('Please Wait');

                    $.ajax({
                        url: '{/literal}{$url.main}auth/reset_password{literal}',
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
                        $('#findpass').prop('disabled', false);
                        $('#findpass').text('Reset');
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

        {if $app.lc}
            {$app.lc}
        {/if}

        {$foot.inn_foot}
    </body>
</html>