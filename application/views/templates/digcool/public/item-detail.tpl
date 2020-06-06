{extends file="layouts/item-show.tpl"}

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
                        <li>
                            <a href="{$url.main}category/{$item->main_cat_slug}">{$item->main_cat_name}</a>
                        </li>

                        <li>
                            <a href="{$url.main}subcategory/{$item->sub_cat_slug}">{$item->sub_cat_name}</a>
                        </li>

                        <li class="active">
                            <a href="{$url.main}childcat/{$item->child_cat_slug}">{$item->child_cat_name}</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">{$item->item_name}</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>




<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                {$form_alert}
                <div class="item-preview item-preview2">
                    <div class="prev-slide">
                        <img src="{$prd_img}{$item->pre_name}" alt="{$item->item_name}" width="730px" class="img-responsive">
                    </div>

                    <div class="item__preview-thumb">
                        <div class="item-action">
                            <div class="action-btns">
                                <a href="{$url.main}item-preview/{$item->item_id}/{$item->item_slug}" target="_blank" class="btn btn--round btn--lg">Live Preview</a>
                                {if $is_purchased and $u_rate}
                                <a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn--round btn--lg btn--icon">
                                    <span class="lnr lnr-star"></span>Review</a>
                                {/if}
                                {if $is_login}
                                    {if $is_free}
                                        <a href="{$url.main}getfreebie/{$item->item_id}" class="btn btn--round btn--lg btn--icon">Free Download</a>
                                    .{/if}
                                {/if}
                            </div>
                        </div>
                        <!-- end /.item__action -->

                        <div class="item_social_share">
                            

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}item/{$item->item_id}/{$item->item_slug}" target="_blank">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/home?status={$url.main}item/{$item->item_id}/{$item->item_slug} " target="_blank">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://pinterest.com/pin/create/button/?url={$url.main}item/{$item->item_id}/{$item->item_slug}&media=&description={$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}" target="_blank">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={$url.main}item/{$item->item_id}/{$item->item_slug}&title=Buy {$item->item_name}&summary={$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}&source={$url.main}" target="_blank">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social-->

                        </div>
                        <!-- end /.item__preview-thumb-->
                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                            </li>
                            <li>
                                <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Reviews
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="tab-pane fade show product-tab active" id="product-details">
                            <div class="tab-content-wrapper">
                                {$item->item_description}
                            </div>
                        </div>
                        <!-- end /.tab-content -->

                        <div class="tab-pane fade product-tab" id="product-comment">
                            <div class="thread">
                                {if $comments}
                                <ul class="media-list thread-list">
                                    {foreach from=$comments item=$cmt}
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{$url.main}{$cmt->user_username}">
                                                    <img class="media-object" src="{$u_photo}{$cmt->user_avater}" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="{$url.main}{$cmt->user_username}">
                                                            <h4>{$cmt->user_username}</h4>
                                                        </a>
                                                        <span>{Carbon\Carbon::parse($cmt->cmt_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span>
                                                    </div>
                                                    {if $item->user_id eq $cmt->cmt_user_id}
                                                        <span class="comment-tag author">Author</span>
                                                    {elseif $cmt->u_cmt}
                                                        <span class="comment-tag buyer">Purchased</span>
                                                    {/if}
                                                    {if $is_login}
                                                    <a href="javascript.void(0);" class="reply-link">Reply</a>
                                                    {/if}
                                                </div>
                                                <p>{$cmt->cmt_body}</p>
                                            </div>
                                        </div>

                                        {if $cmt->replies}
                                        <!-- nested comment markup -->
                                        <ul class="children">
                                            {foreach from=$cmt->replies item=$c_r}
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="{$url.main}{$c_r->user_username}">
                                                            <img class="media-object" src="{$u_photo}{$c_r->user_avater}" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>{$c_r->user_username}</h4>
                                                            <span>{Carbon\Carbon::parse($c_r->rp_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span>
                                                        </div>
                                                        {if $item->user_id eq $c_r->rp_user_id}
                                                            <span class="comment-tag author">Author</span>
                                                        {/if}
                                                        <p>{$c_r->rp_body}</p>
                                                    </div>
                                                </div>

                                            </li>
                                            {/foreach}
                                        </ul>
                                        {/if}

                                        {if $is_login}
                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{$u_photo}{$usr.avater}" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form method="post" action="{$url.main}reply-cmt/{$cmt->cmt_id}/{$item->item_id}/{$item->item_slug}">
                                                    {$csrf_token}
                                                    <textarea id="reply_cmt" name="r_cmt" class="bla" name="reply-comment" placeholder="Write your comment..." required></textarea>
                                                    <button class="btn btn--md btn--round" type="submit" name="submit">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                        {/if}
                                    </li>
                                    <!-- end single comment thread /.comment-->
                                    {/foreach}

                                </ul>
                                {else}
                                    <h3 class="text-center">No Comment Yet</h3>
                                {/if}

                                {if $is_login}
                                <div class="comment-form-area">
                                    <h4>Leave a comment</h4>
                                    <!-- comment reply -->
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{$u_photo}{$usr.avater}" width="40px" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form method="post" action="{$url.main}post-comment/{$item->item_id}/{$item->item_slug}">
                                                {$csrf_token}
                                                <textarea id="my-textarea" name="cmt_body" placeholder="Support questions or Comments" required></textarea>
                                                <button type="submit" name="submit" class="btn btn--sm btn--round">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- comment reply -->
                                </div>
                                <!-- end /.comment-form-area -->
                                {/if}
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        <div class="tab-pane fade product-tab" id="product-review">
                            <div class="thread thread_review">
                                {if $reviews}
                                <ul class="media-list thread-list">
                                    {foreach from=$reviews item=$review}
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#\{$url.main}{$u_photo}{$review->user_username}">
                                                    <img class="media-object" src="{$u_photo}{$review->user_avater}" alt="Loading">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>{$review->user_username}</h4>
                                                            </a>
                                                            <span>{Carbon\Carbon::parse($review->rating_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                            {if $review->rating_value == 1}
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
                                                            {elseif $review->rating_value == 2}
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
                                                            {elseif $review->rating_value== 3}
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
                                                            {elseif $review->rating_value == 4}
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
                                                            {elseif $review->rating_value >= 5}
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
                                                        {if $usr.myid eq $review->user_id}
                                                        <span class="review_tag"><form action="{$url.main}remove-rating" method="post" id="rmv_rate">
                                                        {$csrf_token}
                                                        <input type="hidden" name="r" value="{$review->rating_id}">
                                                        <a href="javascript:{}" onclick="document.getElementById('rmv_rate').submit(); return false;"><p class="text-danger">Delete</p></a>
                                                    </form></span>
                                                    {/if}
                                                    </div>
                                                    
                                                </div>
                                                <p>{$review->rating_comment}</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        
                                        <!-- comment reply -->
                                    </li>
                                    {/foreach}
                                    <!-- end single comment thread /.comment-->
                                </ul>
                                {else}
                                    <h4 class="text-center">No Review Yet</h4>
                                {/if}

                                    

                                    
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        

                        
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing card--pricing2">
                        <div class="price">
                            <h1>
                                <sup>{$app.currency}</sup>
                                {if $is_flash}
                                <span><small><del class="text-warning">{$item->item_regu_price}</del></small></span>
                                <span>{$fs_price}</span>
                                {else}
                                <span>{$item->item_regu_price}</span>
                                {/if}
                            </h1>
                        </div>
                        <ul class="pricing-options">
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                    <label for="opt1" data-price="{$item->item_regu_price}">
                                        <span class="circle"></span>Regular License </label>
                                </div>

                                <p>Regular Liecene use on only one Application</p>
                            </li>

                            {* <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt2" class="" name="filter_opt">
                                    <label for="opt2" data-price="120">
                                        <span class="circle"></span>2 Sites License</label>
                                </div>

                                <p>Nunc placerat mi id nisi interdum is mollis. Praesent pharetra, justo ut sceleris que
                                    the mattis, leo quam.</p>
                            </li> *}
                        </ul>
                        <!-- end /.pricing-options -->

                        <div class="purchase-button">
                            {if not $is_login}
                                <a href="javascript:void(0)" onclick="openLoginModal();" class="btn btn--lg btn--round">Purchase Now</a>
                            {elseif $is_login}
                                
                            {if $is_purchased}
                                <li><div class="text-primary">Your have already purchase this item you can download</div></li>
                                <li>
                                    <form action="{$url.main}download" method="post" id='download'>
                                        {$csrf_token}
                                        <input type="hidden" name="item" value="{$item->item_id}">
                                        <button type="submit" name="submit" class="btn btn--lg btn--round">Download Now</button>
                                    </form>
                                </li>
                            {elseif $is_author}
                                <li><div class="text-danger">You are the auhor of this item you can download</div></li>
                                <li>
                                    <form action="{$url.main}download" method="post" id='download_a'>
                                        {$csrf_token}
                                        <input type="hidden" name="item" value="{$item->item_id}">
                                        <button type="submit" name="submit" class="btn btn--lg btn--round">Download Now</button>
                                    </form>
                                </li>
                            {else}
                                <a href="#buyItem" class="btn btn--lg btn--round" data-toggle="modal" id="buy-button">Purchase Now</a>
                                <a href="javascript:void(0);" class="btn btn--lg btn--round cart-btn">
                                <span class="lnr lnr-cart"></span> Secured Payment</a>
                            {/if}
                            {/if}
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->
                    {if $is_flash}
                    <div class="" style="background:red;">
                        <div class="clock" style="top:23px;"></div>
                        <div class="text-center" style="color:#501804;">This item is <b>50%</b> Discount for Limited Time Get it now!</div>
                    </div>
                    {/if}

                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-cart pcolor"></span>Total Sales</p>
                                <span>{$item_sales}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Product Information</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Released</p>
                                <p class="info">{Carbon\Carbon::parse($item->item_created_at)->format('d F, Y')}</p>
                            </li>
                            <li>
                                <p class="data-label">Updated</p>
                                <p class="info">{Carbon\Carbon::parse($item->item_updated_at)->format('d F, Y')} </p>
                            </li>
                            <li>
                                <p class="data-label">Version</p>
                                <p class="info">{$item->item_version}</p>
                            </li>
                            <li>
                                <p class="data-label">Category</p>
                                <p class="info"><a href="{$url.main}category/{$item->main_cat_slug}">{$item->main_cat_name}</a> / <a href="{$url.main}subcategory/{$item->sub_cat_slug}">{$item->sub_cat_name}</a> / <a href="{$url.main}/childcat/{$item->child_cat_slug}">{$item->child_cat_name}</a></p>
                            </li>
                            
                            <li>
                                <p class="data-label">Tags</p>
                                <p class="info">{$item->item_tags}</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Share & Earn</h4>
                        </div>
                        <ul class="infos">
                        <div class="ssk-block" style="width: auto">
                            <p>You will earn <b>{$app.affi_rate}%</b> on each sale when your friends buy via your ref link.</p>
                            <hr>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" target="_blank" class="ssk ssk-text ssk-facebook">Share On Facebook</a>
                            <a href="https://twitter.com/home?status={$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" target="_blank" class="ssk ssk-text ssk-twitter">Share On Twitter</a>
                            <a href="#" class="ssk ssk-text ssk-google-plus">Share On Google</a>
                            <hr>
                            <input style="width:100%;" onClick="this.select();" value="{$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" />
                        </div>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Author</h4>
                        </div>

                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="{$u_photo}{$item->user_avater}" alt="Loading">
                            </div>

                            <div class="author">
                                <h4>{$item->user_username}</h4>
                                <br>
                            </div>
                            <!-- end /.author -->
                            <!-- end /.social -->
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

                            <div class="author-btn">
                                <a href="{$url.main}{$item->user_username}" class="btn btn--sm btn--round">View Profile</a>
                                {if $is_login}
                                <a href="{$url.main}message/{{$item->user_username}}" class="btn btn--sm btn--round">Message</a>
                                {/if}
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


{if $p_authors}
<section class="more_product_area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>More By
                            <span class="highlighted"> {$item->user_username|ucfirst}</span>
                        </h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->

                {foreach from=$p_authors item=$p_author}
                <div class="col-lg-3 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card-small">

                        <div class="product__thumbnail">
                            <img src="{$prd_img}{$p_author->pre_name}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{$url.main}item/{$p_author->item_id}/{$p_author->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                                <a href="{$p_author->item_live_demo}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="{$url.main}item/{$p_author->item_id}/{$p_author->item_slug}" data-toggle="tooltip" data-placement="top" title="{$p_author->item_name}" class="product_title">
                                <h4>{$p_author->item_name|truncate:23}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li class="out_of_class_name">
                                    <div class="sell">
                                       
                                    </div>
                                    <div class="rating product--rating">
                                        <ul>
                                            {if $p_author->item_rate eq 0}
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
                                            {elseif $p_author->item_rate >= 1 && $p_author->item_rate < 2}
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
                                            {elseif $p_author->item_rate >=2 && $p_author->item_rate < 3}
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
                                            {elseif $p_author->item_rate >= 3 && $p_author->item_rate < 4}
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
                                            {elseif $p_author->item_rate < 5}
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
                                            {elseif $p_author->item_rate >= 5}
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
                                <span>{$app.currency}{$p_author->item_regu_price}</span>
                            </div>
                            <a href="#">
                                <span class="lnr lnr-book"></span>{$p_author->sub_cat_name}</a>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
                {/foreach}
                

                

            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.container -->
    </section>
    {/if}

<!-- Item Rating Form Goes here -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Leave A Review On This Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{$url.main}subnit-review/{$item->item_id}/{$item->item_slug}">
            {$csrf_token}
            <div class="form-group">
                <input type="radio" name="r_value" value="1" required> 1. <b>Bad</b>
                <input type="radio" name="r_value" value="2" required> 2. <b>Fair</b>
                <input type="radio" name="r_value" value="3" required> 3. <b>Okay</b>
                <input type="radio" name="r_value" value="4" required> 4. <b>Good</b>
                <input type="radio" name="r_value" value="5" required> 5. <b>Excelent</b>
            </div>

            <div class="form-group">
                <textarea id="my-textarea" class="form-control" name="r_cmt" rows="3" placeholder="Review Comment"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">Submit Review</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


{if $is_login}
<!-- Modal -->

<div class="modal fade rating_modal" id="buyItem" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modalg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Payment Methods</h3>
                    <h5 class="text-center text-info">Select Prefered Payment Method</h5>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                        
                    <div class="row">
                        {if $paypal->pg_status eq 1}
                        <div class="{if $stripe->sg_status != 1}col-md-12 col-xs-12 col-sm-12{else}col-md-6 col-xs-6 col-sm-6{/if}">
                            <center><div id="paypal-button"></div></center>
                        </div>
                        {/if}

                        {if $stripe->sg_status eq 1}
                        <div class="{if $paypal->pg_status != 1}col-md-12 col-xs-12 col-sm-12{else}col-md-6 col-xs-6 col-sm-6{/if}">
                            <div id="buynow">
                                <button class="btn btn-primary btn-block btn--round btn-lg stripe-button" id="payButton">Pay With Stripe</button>
                                <input type="hidden" id="payProcess" value="0"/>
                            </div>
                        </div>
                        {/if}

                        {if $btc->btc_status eq 1}
                        <div class="col-md-6 col-sm-6 col-xs-6 col-6">
                            <form action="{$url.main}checkout/bitcoin_gateway" id="payWithBTC" method="post">
                                {$csrf_token}
                                <input type="hidden" name="item_id" value="{$item->item_id}">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWithBTC').submit();"><img src="{$url.main}static/pay/btc.png" height="100px" alt=""></a></center>
                            </form>
                        </div>
                        {/if}

                        <div class="{if $btc->btc_status eq 1}col-md-6 col-sm-6 col-xs-6 col-6{else}col-md-12 col-sm-12 col-xs-12 col-12{/if}">
                            <form action="{$url.main}checkout/buy_with_credit" id="payWitCredit" method="post" data-toggle="tooltip" data-placement="top" title="Your Available Bal Is: {$app.currency}{$usr.balance}">
                                {$csrf_token}
                                <input type="hidden" name="item_id" value="{$item->item_id}">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWitCredit').submit();"><img src="{$url.main}static/pay/credit.png" height="100px" alt=""></a></center>
                            </form>
                        </div>

                        <div class="col-md-12 text-center">
                            <div id="paymentDetails" style="display: none;">
                                <p class="aligncenter green bigger" text-center>Your payment was successful.</p>
                                <h4 class="text-center">Payment Information</h4>
                                <p>
                                Order ID: <span class="text-center" id="orderID">&#x3C;ORDER_ID&#x3E;</span><br/>
                                Transaction ID: <span class="text-center" id="txnID">&#x3C;TX_ID&#x3E;</span><br/>
                                </p>
                                <a href="{$url.main}my-download" type="button" class="btn btn-Primary btn-block btn-lg">Click Here If Not Redirected</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<script>
{literal}
    $('#btcPayment').on('click', function() {
        $('#payWithBTC').submit();
    });
{/literal}
</script>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
{literal}
paypal.Button.render({
    // Configure environment
    env: '{/literal}{$env}{literal}',
    client: {
        sandbox: '{/literal}{$sandbox}{literal}',
        production: '{/literal}{$production}{literal}'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'responsive',
        color: 'gold',
        shape: 'pill',
        label: 'buynow',
        tagline: 'true',
        fundingicons: 'true',
    },
    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
           transactions: [
            {
                amount: { total: '{/literal}{$item->item_regu_price}', currency: '{$app.currency_code}{literal}' },
                item_list: {
                    items: [
                        {
                        name: '{/literal}{$item->item_name}',
                        description: 'Purchase {$item->item_name} From {$app.name}',
                        quantity: '1',
                        price: '{$item->item_regu_price}',
                        currency: '{$app.currency_code}' {literal}
                        }
                    ]
                }
            }
        ]
      });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute()
        .then(function () {
            // Show a confirmation message to the buyer
            //window.alert('Thank you for your purchase!');
            
            // Redirect to the payment process page
            window.location = "{/literal}{$url.main}{literal}checkout/process?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&itd={/literal}{$item->item_id}{literal}&pay_method=paypal";
        });
    }
}, '#paypal-button');
{/literal}
</script>

<script type="text/javascript">

$("#paypal-button").trigger('click');

</script>

<script>
{literal}
    
var handler = StripeCheckout.configure({
    key: '{/literal}{$publishable_key}',
    image: '{$app.logo}{literal}',
    locale: 'auto',
    token: function(token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        
        $('#paymentDetails').hide();
        $('#payProcess').val(1);
        $.ajax({
            url: '{/literal}{$url.main}checkout/stripe_process{literal}',
            type: 'POST',
            data: {_token: '{/literal}{$csrf_value}', item_id: {$item->item_id}{literal}, stripeToken: token.id, stripeEmail: token.email, itemName: '{/literal}{$item->item_name}', itemPrice: {$stripe_item_price}, currency: '{$app.currency_code|strtolower}{literal}'},
            dataType: "json",
            beforeSend: function(){
                $('#payButton').prop('disabled', true);
                $('#payButton').html('Please wait...');
            },
            success: function(data){
                $('#payProcess').val(0);
                if(data.status == 1){
                    $('#buynow').hide();
                    $('#txnEmail').html(token.email);
                    $('#orderID').html(data.txnData.id);
                    $('#txnID').html(data.txnData.balance_transaction);
                    $('#paymentDetails').show();
                }else {
                    $('#payButton').prop('disabled', false);
                    $('#payButton').html('Buy Now');
                    alert('Some problem occurred, please try again.');
                }
            },
            error: function(data) {
                $('#payProcess').val(0);
                $('#payButton').prop('disabled', false);
                $('#payButton').html('Buy Now');
                alert('Some problem occurred, please try again but paid.');
            }
        });
    }
});

var stripe_closed = function(){
    var processing = $('#payProcess').val();
    if (processing == 0){
        $('#payButton').prop('disabled', false);
        $('#payButton').html('Pay With Stripe');
    }
};

var eventTggr = document.getElementById('payButton');
if(eventTggr){
    eventTggr.addEventListener('click', function(e) {
        $('#payButton').prop('disabled', true);
        $('#payButton').html('Please wait...');
        
        // Open Checkout with further options:
        handler.open({
            name: '{/literal}{$app.name}',
            description: 'Purchase {$item->item_name} From {$app.name}',
            amount: {$stripe_item_price},
            currency: '{$app.currency_code|strtolower}{literal}',
            closed:	stripe_closed
        });
        e.preventDefault();
    });
}

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});


{/literal}

</script>
{/if}
    
{/block}

{block name=stripe_js}
<script src="https://checkout.stripe.com/checkout.js"></script>
{/block}

{block name=flip_timer}
    {if $is_flash}
        <script type="text/javascript">
    {literal}
        var clock;
        
        $(document).ready(function() {
            // Set dates.
            var futureDate  = new Date("{/literal}{Carbon\Carbon::parse($last_update_flash)->addDays(7)->format("m d, Y")}{literal} 00:00:00");
            var currentDate = new Date();

            // Calculate the difference in seconds between the future and current date
            var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

            // Calculate day difference and apply class to .clock for extra digit styling.
            function dayDiff(first, second) {
                return (second-first)/(1000*60*60*24);
            }

            if (dayDiff(currentDate, futureDate) < 100) {
                $('.clock').addClass('twoDayDigits');
            } else {
                $('.clock').addClass('threeDayDigits');
            }

            if(diff < 0) {
                diff = 0;
            }

            // Instantiate a coutdown FlipClock
            clock = $('.clock').FlipClock(diff, {
                clockFace: 'DailyCounter',
                countdown: true
            });
        });
        {/literal}
    </script>
    {/if}
    {/block}