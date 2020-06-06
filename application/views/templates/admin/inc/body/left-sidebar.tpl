<div class="page-sidebar " id="main-menu">

    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="{$a_photo}{$usr.avater|default:'default.png'}" alt="" data-src="{$a_photo}{$usr.avater|default:'default.png'}" data-src-retina="{$a_photo}{$usr.avater|default:'default.png'}" width="69" height="69" />
            </div>
            <div class="user-info sm">
                <div class="username">{$usr.firstname} <span class="semi-bold">{$usr.lastname}</span></div>
                <div class="status">Administrative</div>
            </div>
        </div>


        <p class="menu-title sm">NAVIGATE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
        <ul>
            <li class="{if $url_2 eq 'dashboard'}active {/if}start">
                <a href="{$url.admin}"> <i class="material-icons">home</i> <span class="title">Dashboard</span></a>
            </li>

            <li class="{if $url_2 eq 'accounts'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">group</i> <span class="title">Accounts</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/accounts/admin"> Admin </a> </li>
                    <li> <a href="{$url.admin}/accounts/users"> Users </a> </li>
                    <li> <a href="{$url.admin}/accounts/users-balance"> Users Balance </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'category'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">folder</i> <span class="title">Item Categories</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/category/main-category"> Main Category </a> </li>
                    <li> <a href="{$url.admin}/category/sub-category"> Sub Category </a> </li>
                    <li> <a href="{$url.admin}/category/child-category"> Child Category </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'product'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">store</i> <span class="title">Products</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/product/add-new"> Add Product </a> </li>
                    <li> <a href="{$url.admin}/product/active-item"> Active Items </a> </li>
                    <li> <a href="{$url.admin}/product/pause-item"> Pause Items </a> </li>
                    <li> <a href="{$url.admin}/product/in-review"> In Review </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'email_templates'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">mail</i> <span class="title">Email Templates</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/email_templates/activate-email"> Activate Email </a> </li>
                    <li> <a href="{$url.admin}/email_templates/welcome-email"> Welcome Email </a> </li>
                    <li> <a href="{$url.admin}/email_templates/user-transaction-email"> User Transaction </a> </li>
                    <li> <a href="{$url.admin}/email_templates/item-rating-email"> Item Rating </a> </li>
                    <li> <a href="{$url.admin}/email_templates/item-like-email"> Item Like </a> </li>
                    <li> <a href="{$url.admin}/email_templates/item-comment-email"> Item Comment </a> </li>
                    <li> <a href="{$url.admin}/email_templates/item-approve-email"> Item Approve </a> </li>
                    <li> <a href="{$url.admin}/email_templates/item-reject-email"> Item Reject </a> </li>
                    <li> <a href="{$url.admin}/email_templates/withdraw-approve-email"> Withdraw Approve </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'transaction'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">screen_share</i> <span class="title">Transactions</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/transaction/paypal"> Paypal </a> </li>
                    <li> <a href="{$url.admin}/transaction/stripe"> Stripe </a> </li>
                    <li> <a href="{$url.admin}/transaction/bitcoin"> Bitcoin </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'payment_gateway'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">spa</i> <span class="title">Payment Gateways</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/payment_gateway/paypal"> Paypal </a> </li>
                    <li> <a href="{$url.admin}/payment_gateway/stripe"> Stripe </a> </li>
                    <li> <a href="{$url.admin}/payment_gateway/bitcoin"> Bitcoin </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'blog'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">web</i> <span class="title">Blog Section</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/blog/categories"> Categories </a> </li>
                    <li> <a href="{$url.admin}/blog/blog-post"> Blog Post </a> </li>
                    <li> <a href="{$url.admin}/blog/comment-setup"> Comment Setup </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'pages'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">spa</i> <span class="title">Pages</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/pages/create-page"> Create New </a> </li>
                    {if $c_pages}
                        {foreach from=$c_pages item=pg}
                            <li> <a href="{$url.admin}/pages/edit/{$pg->page_slug}"> {$pg->page_name} </a> </li>
                        {/foreach}
                    {/if}
                </ul>
            </li>

            <li class="{if $url_2 eq 'withdrawal'}active {/if}start">
                <a href="{$url.admin}/withdrawal"> <i class="material-icons">money</i> <span class="title">Withdrawals</span></a>
            </li>

            <li class="{if $url_2 eq 'email_all_members'}active {/if}start">
                <a href="{$url.admin}/email_all_members"> <i class="material-icons">mail</i> <span class="title">Email All Users</span></a>
            </li>

            <li class="{if $url_2 eq 'themes'}active {/if}start">
                <a href="{$url.admin}/themes"> <i class="material-icons">dashboard</i> <span class="title">Themes</span></a>
            </li>

            <li class="{if $url_2 eq 'social_login'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">dashboard</i> <span class="title">Social Login</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/social_login/facebook"> Facebook </a> </li>
                    <li> <a href="{$url.admin}/social_login/google"> Google </a> </li>
                </ul>
            </li>

            <li class="{if $url_2 eq 'settings'}open active {/if}"> <a href="javascript:void(0)"><i class="material-icons">settings</i> <span class="title">Settings</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{$url.admin}/settings/site-settings"> Site Settings </a> </li>
                    <li> <a href="{$url.admin}/settings/email-settings"> Email Settings </a> </li>
                    <li> <a href="{$url.admin}/settings/live-chat"> Live Chat Settings </a> </li>
                    <li> <a href="{$url.admin}/settings/affinate-program"> Affinate Program </a> </li>
                    <li> <a href="{$url.admin}/settings/header-contents"> Header Contents </a> </li>
                    <li> <a href="{$url.admin}/settings/footer-contents"> Footer Contents </a> </li>
                    <li> <a href="{$url.admin}/settings/social-connect"> Social Connect </a> </li>
                    <li> <a href="{$url.admin}/settings/google-recaptcha"> Google Recaptcha </a> </li>
                    <li> <a href="{$url.admin}/settings/amazon-s3-storage"> Amazone S3 Storage </a> </li>
                </ul>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
</div>
<div class="pull-right">
<a href="{$url.main}admin-logout"><i class="material-icons">power_settings_new</i></a></div>
</div>