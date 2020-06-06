<!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="{$url.main}">
                                <img src="{$app.logo}" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">

                            <!-- Became a seller navigate -->
                            {if $is_login and not $is_author}
                                <a href="{$url.main}upload-item" class="author-area__seller-btn inline" style="margin-top: 25px;">Become a Seller</a>
                            {/if}

                            

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">

                                {if $is_login}
                                <div class="author__avatar">
                                    <img src="{$u_photo}{$usr.avater}" width="35px" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        {$usr.username|ucfirst}
                                    </p>
                                    <p class="ammount">{$app.currency}{$usr.balance}</p>
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="{$url.main}{$usr.username}">
                                                <span class="lnr lnr-user"></span>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}settings">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}my-download">
                                                <span class="lnr lnr-cart"></span>Downloads</a>
                                        </li>
                                        {if $is_author}
                                        <li>
                                            <a href="{$url.main}upload-item">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}my-items">
                                                <span class="lnr lnr-briefcase"></span>My Items</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}withdraw">
                                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}sale-statement">
                                                <span class="lnr lnr-chart-bars"></span>Sale Statements</a>
                                        </li>
                                        {/if}
                                        <li>
                                            <a href="{$url.main}signout">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                {else}
                                <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="author-area__seller-btn inline apply-now-btn">Login / Register</a>
                                {/if}


                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">

                            {if $is_login}
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">

                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="{$u_photo}{$usr.avater}" width="35px" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            {$usr.username|ucfirst}
                                        </p>
                                        <p class="ammount">{$app.currency}{$usr.balance}</p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="{$url.main}{$usr.username}">
                                                <span class="lnr lnr-user"></span>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}settings">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}my-download">
                                                <span class="lnr lnr-cart"></span>Downloads</a>
                                        </li>
                                        {if $is_author}
                                        <li>
                                            <a href="{$url.main}upload-item">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}my-items">
                                                <span class="lnr lnr-briefcase"></span>My Items</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}withdraw">
                                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                        </li>
                                        <li>
                                            <a href="{$url.main}sale-statement">
                                                <span class="lnr lnr-chart-bars"></span>Sale Statements</a>
                                        </li>
                                        {/if}
                                        <li>
                                            <a href="{$url.main}signout">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                {if $is_login and not $is_author}
                                <div class="text-center">
                                    <a href="{$url.main}upload-item" class="author-area__seller-btn inline">Become a Seller</a>
                                </div>
                                {/if}
                            </div>
                            {else}
                            <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><span class="lnr lnr-user menu_icon"></span></a>
                            {/if}
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->





        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        



                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li>

                                        <a href="{$url.main}">HOME</a>
                                       
                                    </li>

                                    <li>

                                        <a href="{$url.main}free-files">Free Files</a>
                                       
                                    </li>

                                    <li>

                                        <a href="{$url.main}flash-sale">Flash Sale</a>
                                       
                                    </li>

                                    {if $main_g_cats}
                                        {foreach from=$main_g_cats item=h_cat}
                                        <li {if not empty($h_cat->sub_cats)}class="has_dropdown"{/if}>
                                            <a href="{$url.main}category/{$h_cat->main_cat_slug}">{$h_cat->main_cat_name}</a>
                                            {if not empty($h_cat->sub_cats)}
                                            <div class="dropdowns dropdown--menu">
                                                <ul>
                                                    {foreach from=$h_cat->sub_cats item=$subs}
                                                    <li>
                                                        <a href="{$url.main}subcategory/{$subs->sub_cat_slug}">{$subs->sub_cat_name}</a>
                                                    </li>
                                                    {/foreach}
                                                </ul>
                                            </div>
                                            {/if}
                                        </li>
                                        {/foreach}
                                    {/if}

                                    {if $c_pages}
                                    {foreach from=$c_pages item=$pg}
                                     <li>
                                        <a href="{$url.main}pages/{$pg->page_slug}">{$pg->page_name}</a>
                                    </li>
                                    {/foreach}
                                    {/if}

                                    {if $is_blog}
                                        <li>
                                            <a href="{$url.main}blog">Blog</a>
                                        </li>
                                    {/if}

                                    <li>
                                        <a href="{$url.main}contact">contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    {$head.a_nav}