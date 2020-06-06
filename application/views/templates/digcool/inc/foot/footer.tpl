
{$foot.foot}
<footer class="footer-area">

        <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-footer">
                            <div class="info__logo">
                                <img src="{$app.logo}" alt="footer logo">
                            </div>
                            <p class="info--text">{$app.short_descrip}</p>
                            <ul class="info-contact">
                                <li>
                                    <span class="lnr lnr-briefcase info-icon"></span>
                                    <span class="info">{$cal_item} items for Sale.</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-cart info-icon"></span>
                                    <span class="info">{$cal_sales} item sold.</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-users info-icon"></span>
                                    <span class="info">{$cal_users} Registerd Users.</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.info-footer -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Quick Link</h4>
                            <ul>
                                <li><a href="{$app.main}">Home</a></li>
                                <li><a href="{$app.main}free-files">Free Files</a></li>
                                <li><a href="{$app.main}flash-sale">Flash Sale</a></li>
                                {if $c_pages}
                                    {foreach from=$c_pages item=$pg}
                                        <li><a href="{$url.main}pages/{$pg->page_slug}">{$pg->page_name}</a></li>
                                    {/foreach}
                                {/if}
                                {if $is_blog}
                                    <li><a href="{$url.main}blog"> Blog</a></li>
                                {/if}
                                <li><a href="{$url.main}contact"> Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title text--white">Follow Us</h4>

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    {if $m_social}
                                        {foreach from=$m_social item=$social}
                                            <li><a href="{$social->sl_link}" target="_blank"><span class="fa fa-{$social->sl_icon}" aria-hidden="true"></s></a></li>
                                        {/foreach}
                                    {/if}
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; {date('Y')} {$app.name} market place. All Rigth Reserve.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {include file="pack/auth.tpl"}