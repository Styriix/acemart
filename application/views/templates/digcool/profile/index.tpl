{extends file="layouts/profile.tpl"}

{block name=contents}

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{$url.main}">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">{$up->user_username|ucfirst} Profile</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">{$up->user_username|ucfirst}'s Profile</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="author-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar_author">
                    <div class="author-card sidebar-card">
                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="{$u_photo}{$up->user_avater}" alt="User Profile">
                            </div>

                            <div class="author">
                                <h4>{$up->user_username|ucfirst}</h4>
                                <p><b>Joined:</b> {Carbon\Carbon::parse($up->user_created_at)->format('d F, Y')}</p>
                                <p><b>Last Seen:</b> {Carbon\Carbon::parse($up->user_last_seen)->format('d F, Y')}</p>
                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">

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
                                <hr>
                                <ul>
                                    {if $up->user_fb}
                                    <li>
                                        <a href="http://fb.me/{$up->user_fb}" target="_blank">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    {/if}
                                    {if $up->user_tw}
                                    <li>
                                        <a href="http://linkedin.com/{$up->user_ln}" target="_blank">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    {/if}
                                    {if $up->user_google}
                                    <li>
                                        <a href="mailto:{$up->user_google}" target="_blank">
                                            <span class="fa fa-google"></span>
                                        </a>
                                    </li>
                                    {/if}
                                    {if $up->user_ln}
                                    <li>
                                        <a href="http://linkedin.com/{$up->user_ln}" target="_blank">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    {/if}
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                {if $is_login}
                                    {if $usr.myid != $up->user_id}
                                        {if $isFollowing}
                                            <form method="post" id="let_unfolo" action="#">
                                                {$csrf_token}
                                                <button type="submit" id="unfolo_user_btn" class="btn btn--md btn--round">Un-Follow</button>
                                            </form>
                                        {else}
                                            <form method="post" id="let_folo" action="#">
                                                {$csrf_token}
                                                <button type="submit" id="folo_user_btn" class="btn btn--md btn--round">Follow {$up->user_username|ucfirst}</button>
                                            </form>
                                        {/if}
                                    {/if}
                                {/if}
                                <a href="{$url.main}message{if $usr.myid != $up->user_id}/{$up->user_username}{/if}" class="btn btn--md btn--round">{if $usr.myid != $up->user_id}Send Message{else}Messages{/if}</a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->

                    
                    <div class="shortcode_modules">
                        <div class="tab tab4">
                        <div class="item-navigation">
                        <ul class="nav nav-tabs nav--tabs2">
                            <li>
                                <a href="#Profile" aria-controls="Profile" role="tab" data-toggle="tab" aria-expanded="true" class="active">Profile</a>
                            </li>
                            <li>
                                <a href="#Products" aria-controls="#Products" role="tab" data-toggle="tab" aria-expanded="false">Items</a>
                            </li>
                            <li>
                                <a href="#Followers" aria-controls="#Followers" role="tab" data-toggle="tab" aria-expanded="false">Followers</a>
                            </li>
                            <li>
                                <a href="#Following" aria-controls="#Following" role="tab" data-toggle="tab" aria-expanded="false">Following</a>
                            </li>
                            {if $usr.myid eq $up->user_id}
                            <li>
                                <a href="{$url.main}my-items"> My Items</a>
                            </li>
                            <li>
                                <a href="{$url.main}settings"> Settings</a>
                            </li>
                            {/if}
                        </ul>
                        </div>
                        </div>
                    </div>
                    <!-- end /.author-menu -->

                    
                </aside>
            </div>
            <!-- end /.sidebar -->

            <div class="col-lg-8 col-md-12">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="author-info pcolorbg">
                            <p>Total sales</p>
                            <h3>{$total_sale}</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-4 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="author-info scolorbg">
                            <p>Country</p>
                            <h5 class = "text-warning">{$up->user_country} ({$up->user_region})</h5>
                        </div>
                    </div>
                    <!-- end /.col-md-4 -->

                    <div class="col-md-12 col-sm-12">
                        <div class="author_module">
                            <img src="{if $up->user_banner}{$u_photo}{$up->user_banner}{else}{$ast}/img/profile/banner.jpg{/if}" alt="author image">
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="fade show tab-pane product-tab active" id="Profile">
                                <div class="author_module about_author">
                                    <h2>About
                                        <span>{$up->user_username}</span>
                                    </h2>
                                    <p>{$up->user_about|default:'Not Specify!'}</p>
                                </div>
                            </div>

                            <div role="tabpanel" class="fade tab-pane product-tab" id="Products">
                                <div class="author_module shortcode_wrapper">
                                    {if $shops}
                                        <div class="row">
                                            {foreach from=$shops item=$sh}
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- start .single-product -->
                                                    <div class="product product--card product--card-small">

                                                        <div class="product__thumbnail">
                                                            <img src="{$prd_img}{$sh->pre_name}" alt="Product Image">
                                                            <div class="prod_btn">
                                                                <a href="{$url.main}item/{$sh->item_id}/{$sh->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                                                                <a href="{$sh->item_live_demo}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                                                            </div>
                                                        </div>
                                                        <!-- end /.product__thumbnail -->

                                                        <div class="product-desc">
                                                            <a href="{$url.main}item/{$sh->item_id}/{$sh->item_slug}" data-toggle="tooltip" data-placement="top" title="{$sh->item_name}" class="product_title">
                                                                <h4>{$sh->item_name|truncate:23}</h4>
                                                            </a>
                                                            <ul class="titlebtm">
                                                                <li>
                                                                    <img class="auth-img" src="{$u_photo}{$sh->user_avater}" data-toggle="tooltip" data-placement="top" title="By: {$sh->user_firstname} {$sh->user_lastname}" alt="author image">
                                                                    <p>
                                                                        <a href="{$url.main}{$sh->user_username}">{$sh->user_username}</a>
                                                                    </p>
                                                                </li>
                                                                <li class="out_of_class_name">
                                                                    
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            {if $sh->item_rate eq 0}
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                            {elseif $sh->item_rate >= 1 && $sh->item_rate < 2}
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                            {elseif $sh->item_rate >=2 && $sh->item_rate < 3}
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                            {elseif $sh->item_rate >= 3 && $sh->item_rate < 4}
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                            {elseif $sh->item_rate < 5}
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star-o"></span>
                                                                                </li>
                                                                            {elseif $sh->item_rate >= 5}
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="fa fa-star"></span>
                                                                                </li>
                                                                            {/if}
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                        <!-- end /.product-desc -->

                                                        <div class="product-purchase">
                                                            <div class="price_love">
                                                                <span>{$app.currency}{$sh->item_regu_price}</span>
                                                            </div>
                                                            <a href="#">
                                                                <span class="lnr lnr-book"></span>{$sh->sub_cat_name}</a>
                                                        </div>
                                                        <!-- end /.product-purchase -->
                                                    </div>
                                                    <!-- end /.single-product -->
                                                </div>
                                            {/foreach}
                                        </div>
                                    {/if}
                                </div>
                            </div>

                            <div role="tabpanel" class="fade show tab-pane product-tab" id="Followers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-title-area">
                                            <div class="product__title">
                                                <h2>
                                                    <span class="bold">{$num_folo}</span> Followers</h2>
                                            </div>
                                        </div>
                                        <!-- end /.product-title-area -->
                                        {if $follo_lists}
                                        <div class="user_area">
                                            <ul>
                                                {foreach from=$follo_lists item=$f_list}
                                                <li>
                                                    <div class="user_single">
                                                        <div class="user__short_desc">
                                                            <div class="user_avatar">
                                                                <img src="{$u_photo}{$f_list->user_avater}" width="35px" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <a href="{$url.main}{$f_list->user_username}">{$f_list->user_username}</a>
                                                                <p>Member Since: {Carbon\Carbon::parse($f_list->user_created_at)->format('d F, Y')}</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- end /.user_single -->
                                                </li>
                                                {/foreach}

                                                

                                                
                                            </ul>

                                            
                                        </div>
                                        {/if}
                                        <!-- end /.user_area -->
                                    </div>
                                    <!-- end /.col-md-12 -->
                                </div>
                                <!-- end /.row -->
                            </div>

                            <div role="tabpanel" class="fade show tab-pane product-tab" id="Following">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-title-area">
                                            <div class="product__title">
                                                <h2>
                                                    <span class="bold">{$num_following}</span> Following</h2>
                                            </div>
                                        </div>
                                        <!-- end /.product-title-area -->
                                        {if $following_lists}
                                        <div class="user_area">
                                            <ul>
                                                {foreach from=$following_lists item=$fo_list}
                                                <li>
                                                    <div class="user_single">
                                                        <div class="user__short_desc">
                                                            <div class="user_avatar">
                                                                <img src="{$u_photo}{$fo_list->user_avater}" width="35px" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <a href="{$url.main}{$fo_list->user_username}">{$fo_list->user_username}</a>
                                                                <p>Member Since: {Carbon\Carbon::parse($fo_list->user_created_at)->format('d F, Y')}</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- end /.user_single -->
                                                </li>
                                                {/foreach}

                                                

                                                
                                            </ul>

                                            
                                        </div>
                                        {/if}
                                        <!-- end /.user_area -->
                                    </div>
                                    <!-- end /.col-md-12 -->
                                </div>
                                <!-- end /.row -->
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end /.row -->

                
            </div>
            <!-- end /.col-md-8 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
    
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