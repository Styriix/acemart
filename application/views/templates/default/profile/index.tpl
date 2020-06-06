{extends file="layouts/profile.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>{$up->user_username|ucfirst}</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->


<!-- Profile Page Start Here -->
<div class="profile-page-area bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="{if $up->user_banner}{$u_photo}{$up->user_banner}{else}{$ast}/img/profile/banner.jpg{/if}" heigth="250px" alt="product" class="img-responsive">
                    </div>                                
                    <div class="author-summery">
                        <div class="single-item">
                            <div class="item-title">Country:</div>
                            <div class="item-details">{$up->user_country} ({$up->user_region})</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Member Since:</div>
                            <div class="item-details">{Carbon\Carbon::parse($up->user_created_at)->format('d F, Y')}</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Last Seen</div>
                            <div class="item-detail">{Carbon\Carbon::parse($up->user_last_seen)->format('d F, Y')}</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Total Sales:</div>
                            <div class="item-name">{$total_sale}</div>                                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">{$up->user_firstname} {$up->user_lastname}</h3>
                            <div class="sidebar-author-info">
                                <div class="sidebar-author-img">
                                    <img src="{$u_photo}{$up->user_avater}" alt="userprofile" class="img-responsive">
                                </div>
                                <div class="sidebar-author-content">
                                    <h3>{$up->user_username|ucfirst}</h3>
                                </div>
                            </div>
                            {if $c_badge}
                            <span><img src="{$url.main}static/badges/collector/{$c_badge}" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Buyer Level {$c_badge|replace:'.png':''}: Purchase between {$c_min} to {$c_max} Items"></span>
                            {/if}
                            {if $s_badge}
                                <span><img src="{$url.main}static/badges/sell/{$s_badge}" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Seller Level {$s_badge|replace:'.png':''}: Sold between {$app.currency}{$s_min} and {$app.currency}{$s_max} worth of items"></span>
                            {/if}
                            {if $a_badge}
                                <span><img src="{$url.main}static/badges/affiliate/{$a_badge}" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Affilate Level {$a_badge|replace:'.png':''}: Refer between {$a_min} and {$a_max} Users"></span>
                            {/if}
                            {if $giftBadge}
                                <span><img src="{$url.main}static/badges/oth/7.png" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Giffter! Has an item on Free File of the Week!"></span>
                            {/if}
                            {if $flashBadge}
                                <span><img src="{$url.main}static/badges/oth/6.png" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="MindSetter! Has an item on Flash Sale of the Week!"></span>
                            {/if}
                        </div>
                    </div>
                    <ul class="social-default">
                        {if $up->user_fb}
                            <li><a href="http://fb.me/{$up->user_fb}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        {/if}
                        {if $up->user_tw}
                            <li><a href="http://twitter.com/{$up->user_tw}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        {/if}
                        {if $up->user_ln}
                            <li><a href="http://linkedin.com/{$up->user_ln}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        {/if}
                        {if $up->user_google}
                            <li><a href="mailto:{$up->user_google}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        {/if}
                    </ul>

                    <ul class="sidebar-product-btn">
                        <li><a href="{$url.main}message{if $usr.myid != $up->user_id}/{$up->user_username}{/if}" class="buy-now-btn" id="buy-button"><i class="fa fa-envelope-o" aria-hidden="true"></i> {if $usr.myid != $up->user_id}Send Message{else}Messages{/if}</a></li>
                    </ul>


                    {if $is_login}
                        {if $usr.myid != $up->user_id}
                            {if $isFollowing}
                                <form method="post" id="let_unfolo" action="#">
                                    {$csrf_token}
                                    <button type="submit" id="unfolo_user_btn" class="btn btn-warning btn-block">Un-Follow {$up->user_username|ucfirst}</button>
                                </form>
                            {else}
                                <form method="post" id="let_folo" action="#">
                                    {$csrf_token}
                                    <button type="submit" id="folo_user_btn" class="btn btn-info btn-block">Follow {$up->user_username|ucfirst}</button>
                                </form>
                            {/if}
                        {/if}
                    {/if}                                
                    
                </div>
            </div>                                                
        </div>
        <div id="follow"></div>
        <div id="unfollow"></div>
        <div class="row profile-wrapper">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <ul class="profile-title">
                    <li class="active"><a href="#Profile" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> About Me</a></li>
                    <li><a href="#Products" data-toggle="tab" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Shops</a></li>
                    <li><a href="#Followers" data-toggle="tab" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Followers ({$num_folo})</a></li>
                    <li><a href="#Following" data-toggle="tab" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Following ({$num_following})</a></li>
                    {if $usr.myid eq $up->user_id}
                        <li><a href="{$url.main}my-items"><i class="fa fa-cog" aria-hidden="true"></i> My Items</a></li>
                        <li><a href="{$url.main}settings"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                    {/if}
                </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12"> 
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="Profile">
                        <div class="inner-page-details inner-page-content-box">
                            <h3>About Me:</h3>
                            <p>{$up->user_about|default:'Not Specify!'}</p>
                        </div> 
                    </div> 
                    <div class="tab-pane fade" id="Products">
                        <h3 class="title-inner-section">Shops</h3>
                        <div class="inner-page-main-body"> 
                            {if $shops}
                            <div class="row more-product-item-wrapper">
                                {foreach from=$shops item=$sh}
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="{$prd_img}{$sh->thumb_name}" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="{$url.main}item/{$sh->item_id}/{$sh->item_slug}" data-toggle="tooltip" data-placement="top" title="{$sh->item_name}">{$sh->item_name|truncate:20}</a></h4>
                                            <div class="p-title">{$sh->sub_cat_name}</div>
                                            <div class="p-price">{$app.currency}{$sh->item_regu_price}</div>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}  
                                
                                
                            </div>
                            {/if}
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    {* <ul class="pagination-align-left">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul> *}
                                </div>  
                            </div>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <h3 class="title-inner-section">Settings</h3>
                        
                    </div>
                    
                    <div class="tab-pane fade" id="Followers">
                        <h3 class="title-inner-section">Followers</h3>
                        <div class="inner-page-main-body"> 
                            <div class="row more-product-item-wrapper">

                                {if $follo_lists}
                                {foreach from=$follo_lists item=$f_list}
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="{$u_photo}{$f_list->user_avater}" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="{$url.main}{$f_list->user_username}">{$f_list->user_username}</a></h4>
                                            <div class="a-item">{$f_list->u_item} Items</div>
                                            <div class="a-followers">{$f_list->u_folo} Followers</div>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}  
                                {/if}
                                
                            </div>
                                {* <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="pagination-align-left">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                </div>   *}
                            </div>
                        </div>


                        <div class="tab-pane fade" id="Following">
                        <h3 class="title-inner-section">Following</h3>
                        <div class="inner-page-main-body"> 
                            <div class="row more-product-item-wrapper">

                                {if $following_lists}
                                {foreach from=$following_lists item=$fo_list}
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="{$u_photo}{$fo_list->user_avater}" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="{$url.main}{$fo_list->user_username}">{$fo_list->user_username}</a></h4>
                                            <div class="a-item">{$f0_list->u_item} Items</div>
                                            <div class="a-followers">{$fo_list->u_folo} Followers</div>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}  
                                {/if}
                                
                            </div>
                                {* <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="pagination-align-left">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                    </ul>
                                </div>   *}
                            </div>
                        </div>




                    </div>


                </div> 
            </div>  
        </div>
    </div>
</div>
<!-- Profile Page End Here -->


{/block}

{block name=profle_script}
<script>
{literal}
    $(document).ready(function(){

        //* Following User
        $('#let_folo').on('submit', function(e) {
            e.preventDefault();
            $('#folo_user_btn').prop('disabled', true);
            $('#folo_user_btn').text('Following...');

            $.ajax({
                url: '{/literal}{$url.main}follow_user/{$up->user_id}/{$up->user_username}{literal}',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#follow').html(data);
                }
            });
        });

         //* Un Following User
        $('#let_unfolo').on('submit', function(e) {
            e.preventDefault();
            $('#unfolo_user_btn').prop('disabled', true);
            $('#unfolo_user_btn').text('Un Following...');

            $.ajax({
                url: '{/literal}{$url.main}unfollow_user/{$up->user_id}/{$up->user_username}{literal}',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#unfollow').html(data);
                }
            });
        });
    });
{/literal}
</script>
{/block}