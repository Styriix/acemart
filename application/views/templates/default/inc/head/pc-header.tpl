<div id="header2" class="header2-area right-nav-mobile">
    <div class="header-top-bar">
        <div class="container">
            <div class="row">                         
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <div class="logo-area">
                        <a href="{$url.main}"><img class="img-responsive" src="{$app.logo}" alt="logo"></a>
                    </div>
                </div> 
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <ul class="profile-notification">                                            
                        <li>
                            <div class="notify-contact"></div>
                        </li>                                        
                        <li>
                            <div class="cart-area">
                                <a href="#"><i class="" aria-hidden="true"></i></a>
                                
                            </div>
                        </li>
                        {if not $is_login}                                        
                            <li>
                                    <div class="apply-btn-area">
                                    <a class="apply-now-btn" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
                                </div>
                            </li>
                            <li><a class="apply-now-btn-color" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></li>
                        {else}

                            <li>
                                <div class="user-account-info">
                                    <div class="user-account-info-controler">
                                        <div class="user-account-img">
                                            <img class="img-responsive img-circle" src="{$u_photo}{$usr.avater}" width="40px" alt="profile">
                                        </div>
                                        <div class="user-account-title">
                                            <div class="user-account-name">{$usr.username|ucfirst}</div>
                                            <div class="user-account-balance">{$app.currency}{$usr.balance}</div>
                                        </div>
                                        <div class="user-account-dropdown">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><a href="{$url.main}{$usr.username}">My Profile</a></li>
                                        <li><a href="{$url.main}settings">Account Setting</a></li>
                                        <li><a href="{$url.main}my-download">Downloads</a></li>
                                        {if $is_author}
                                        <li><a href="{$url.main}upload-item">Upload Item</a></li>
                                        <li><a href="{$url.main}my-items">My Items</a></li>
                                        <li><a href="{$url.main}withdraw">Withdraws</a></li>
                                        <li><a href="{$url.main}sale-statement">Sale Statement</a></li>
                                        {/if}
                                        {if $is_login and not $is_author}
                                        <div><a class="apply-now-btn btn-block" href="{$url.main}upload-item" id="logout-button">Became An Author</a></div>
                                        {/if}
                                    </ul>
                                </div>
                            </li>
                            <li><a class="apply-now-btn" href="{$url.main}signout" id="logout-button">Logout</a></li>


                        {/if}
                    </ul>
                </div>                          
            </div>                          
        </div>
    </div>
    <div class="main-menu-area bg-primaryText" id="sticker">
        <div class="container">
            <nav id="desktop-nav">
                <ul>
                    <li {if not $url_1}class="active"{/if}><a href="{$url.main}">Home</a></li>
                    <li {if $url_1 eq 'free-files'}class="active"{/if}><a href="{$url.main}free-files">Free Files</a></li>
                    <li {if $url_1 eq 'flash-sale'}class="active"{/if}><a href="{$url.main}flash-sale">Flash Sale</a></li>

                    <!-- Main category listing section -->
                    {if $main_g_cats}
                        {foreach from=$main_g_cats item=h_cat}

                            <li {if $url_2 eq $h_cat->main_cat_slug or $h_cat->main_cat_id eq $main_cat->main_cat_id}class="active"{/if}><a href="{$url.main}category/{$h_cat->main_cat_slug}">{$h_cat->main_cat_name}</a>
                                {if not empty($h_cat->sub_cats)}
                                    <ul>
                                        {foreach from=$h_cat->sub_cats item=$subs}
                                            <li><a href="{$url.main}subcategory/{$subs->sub_cat_slug}">{$subs->sub_cat_name}</a></li>
                                        {/foreach}
                                    </ul>
                                {/if}   
                            </li>

                        {/foreach}
                    {/if}
                    
                    {if $c_pages}
                        {foreach from=$c_pages item=$pg}
                            <li {if $url_2 eq $pg->page_slug}class="active"{/if}><a href="{$url.main}pages/{$pg->page_slug}">{$pg->page_name}</a></li>
                        {/foreach}
                    {/if}

                    {if $is_blog}
                        <li {if $url_1 eq 'blog'}class="active"{/if}><a href="{$url.main}blog">Blog</a></li>
                    {/if}

                    <li {if $url_1 eq 'contact'}class="active"{/if}><a href="{$url.main}contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
{$head.a_nav}