{$foot.foot}
<!-- Footer Area Start Here -->
<footer>

    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">{$app.name}</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-comment" aria-hidden="true"></i><a href="Phone(01)800433633.html">{$app.short_descrip}</a></li>
                            <li><i class="fa fa-file" aria-hidden="true"></i>{$cal_item} items for Sale.</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>{$cal_sales} item sold.</li>
                            <li><i class="fa fa-users" aria-hidden="true"></i>{$cal_users} Registerd Users.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Quick Link </h3>
                        <ul class="featured-links">
                            <li>
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
                                        <li><a href="{$url.main}blog">Blog</a></li>
                                    {/if}
                                    <li><a href="{$url.main}contact"> Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>                             
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                        <ul class="footer-social">
                            {if $m_social}
                                {foreach from=$m_social item=$social}
                                    <li><a href="{$social->sl_link}" target="_blank"><i class="fa fa-{$social->sl_icon}" aria-hidden="true"></i></a></li>
                                {/foreach}
                            {/if}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-area-bottom">
        <div class="container">
            <p>@ {date('Y')} {$app.name} market place. All Rigth Reserve.</p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
{include file="pack/auth.tpl"}
</div>
<!-- Main Body Area End Here -->
