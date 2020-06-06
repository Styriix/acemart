{extends file="layouts/item-show.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li><a href="#">{$item->sub_cat_name}</a><span> -</span></li>
                <li>{$item->item_name}</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->

<!-- Product Details Page Start Here -->
<div class="product-details-page bg-secondary">                
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                {$form_alert}
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="{$prd_img}{$item->pre_name}" alt="product" class="img-responsive">
                    </div>                                
                    <h2 class="title-inner-default">{$item->item_name}</h2>
                    <p class="para-inner-default">{$item->item_description}</p>


                    <div class="product-tag-line">
                        <ul class="product-tag-item">
                            <li><a href="{$url.main}item-preview/{$item->item_id}/{$item->item_slug}" target="_blank">Live Preview</a></li>
                            {if $is_login}
                                {if $is_free}
                                <li><a href="{$url.main}getfreebie/{$item->item_id}">Free Download</a></li>
                                {/if}
                            {/if}
                            {if $is_purchased and $u_rate}
                                <li><a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter">Leave A Review</a></li>
                            {/if}
                        </ul>


                        <ul class="social-default">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}item/{$item->item_id}/{$item->item_slug}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/home?status={$url.main}item/{$item->item_id}/{$item->item_slug} " target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={$url.main}item/{$item->item_id}/{$item->item_slug}&title=Buy {$item->item_name}&summary={$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}&source={$url.main}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://pinterest.com/pin/create/button/?url={$url.main}item/{$item->item_id}/{$item->item_slug}&media=&description={$item->item_description|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                

                    </div>
                    <div class="product-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="product-details-title">
                                    <li><a class="active" href="#comment" data-toggle="tab" aria-expanded="false">Support</a></li>
                                    <li><a href="#review" data-toggle="tab" aria-expanded="false">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="comment">
                                        {if $comments}
                                        <section class="comment-list">

                                            {foreach from=$comments item=$cmt}
                                            <!-- First Comment -->
                                            <article class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                <figure class="thumbnail">
                                                    <img class="img-responsive" src="{$u_photo}{$cmt->user_avater}" />
                                                    <figcaption class="text-center">{$cmt->user_username}</figcaption>
                                                </figure>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
                                                <div class="panel panel-default arrow left">
                                                    <div class="panel-body">
                                                    <header class="text-left">
                                                        {if $item->user_id eq $cmt->cmt_user_id}
                                                            <div class="comment-user text-danger"><i class="fa fa-user"></i><b> Author</b></div>
                                                        {elseif $cmt->u_cmt}
                                                            <div class="comment-user text-primary"><i class="fa fa-user"></i><b> Purchased</b></div>
                                                        {/if}
                                                        <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> {Carbon\Carbon::parse($cmt->cmt_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</time>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                        {$cmt->cmt_body}
                                                        </p>
                                                    </div>
                                                    {if $is_login}
                                                    <p class="text-right"><a class="btn btn-default btn-sm" data-toggle="collapse" href="#reply{$cmt->cmt_id}" aria-expanded="false" aria-controls="reply{$cmt->cmt_id}"><i class="fa fa-reply"></i> reply</a></p>
                                                    </div>
                                                    <div class="collapse" id="reply{$cmt->cmt_id}">
                                                        <form method="post" action="{$url.main}reply-cmt/{$cmt->cmt_id}/{$item->item_id}/{$item->item_slug}">
                                                            {$csrf_token}
                                                            <div class="form-group">
                                                                <textarea id="reply_cmt" class="form-control" name="r_cmt" rows="3" required></textarea>
                                                            </div>
                                                            <button type="submit" name="submit" class="btn btn-success btn-sm btn-block">Reply To Comment</button>
                                                        </form>
                                                    </div>
                                                    {/if}
                                                </div>
                                                </div>
                                            </article>
                                            {if $cmt->replies}
                                            <!-- Second Comment Reply -->
                                            {foreach from=$cmt->replies item=$c_r}
                                            <article class="row">
                                                <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                                <figure class="thumbnail">
                                                    <img class="img-responsive" src="{$u_photo}{$c_r->user_avater}" />
                                                    <figcaption class="text-center">{$c_r->user_username}</figcaption>
                                                </figure>
                                                </div>
                                                <div class="col-md-9 col-sm-9">
                                                <div class="panel panel-default arrow left">
                                                    <div class="panel-heading right">Reply</div>
                                                    <div class="panel-body">
                                                    <header class="text-left">
                                                        {if $item->user_id eq $c_r->rp_user_id}
                                                            <div class="comment-user text-danger"><i class="fa fa-user"></i><b> Author</b></div>
                                                        {/if}
                                                        <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> {Carbon\Carbon::parse($c_r->rp_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</time>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                        {$c_r->rp_body}
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </article>
                                            {/foreach}
                                            {/if}

                                            {/foreach}

                                            
                                            
                                            </section> 
                                            {else}
                                                <h3 class="text-center">No Comment Yet</h3>
                                            {/if}     
                                            {if $is_login}
                                            <form method="post" action="{$url.main}post-comment/{$item->item_id}/{$item->item_slug}">
                                                {$csrf_token}
                                                <div class="form-group">
                                                    <textarea id="my-textarea" class="form-control" name="cmt_body" rows="6" placeholder="Support questions or Comments" required></textarea>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Post Comment</button>
                                            </form>
                                            {/if}                
                                    </div>
                                    <div class="tab-pane fade" id="review">                           
                                        <div class="card">
                                            <div class="card-body">
                                                {if $reviews}
                                                <div class="row">
                                                    {foreach from=$reviews item=$review}
                                                    <div class="col-md-2">
                                                        <img src="{$u_photo}{$review->user_avater}" class="img img-rounded img-fluid"/>
                                                        <p class="text-secondary text-center">{Carbon\Carbon::parse($review->rating_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <a class="float-left" href=""><strong>{$review->user_firstname} {$review->user_lastname}</strong></a>
                                                            {if $review->rating_value == 1}
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            {elseif $review->rating_value == 2}
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            {elseif $review->rating_value== 3}
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            {elseif $review->rating_value == 4}
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            {elseif $review->rating_value >= 5}
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                            {/if}

                                                    </p>
                                                    <div class="clearfix"></div>
                                                        <p>{$review->rating_comment}</p>
                                                        {if $usr.myid eq $review->user_id}
                                                            <form action="{$url.main}remove-rating" method="post" id="rmv_rate">
                                                                {$csrf_token}
                                                                <input type="hidden" name="r" value="{$review->rating_id}">
                                                                <a href="javascript:{}" onclick="document.getElementById('rmv_rate').submit(); return false;"><p class="text-danger">Delete</p></a>
                                                            </form>
                                                        {/if}
                                                    </div>
                                                    {/foreach}

                                                </div>
                                                {else}
                                                    <h4 class="text-center">No Review Yet</h4>
                                                {/if}
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </div>
                        </div>
                    </div>
                    {if $p_authors}
                    <h3 class="title-inner-section">More Product by {$item->user_username|ucfirst}</h3>                               
                    <div class="row more-product-item-wrapper">
                        {foreach from=$p_authors item=$p_author}
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="{$prd_img}{$p_author->thumb_name}" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="{$url.main}item/{$p_author->item_id}/{$p_author->item_slug}" data-toggle="tooltip" data-placement="top" title="{$p_author->item_name}">{$p_author->item_name|truncate:25}</a></h4>
                                    <div class="p-title">{$p_author->sub_cat_name}</div>
                                    <div class="p-price">{$app.currency}{$p_author->item_regu_price}</div>
                                </div>
                            </div>
                        </div>  
                        {/foreach}

                    </div>
                    {/if}

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Product Price</h3>
                            <ul class="sidebar-product-price">
                                <li>
                                    {if $is_flash}
                                        <small><del>{$app.currency}{$item->item_regu_price}</del></small> <strong><font color="blue">{$app.currency}{$fs_price}</font></strong>
                                    {else}
                                        {$app.currency}{$item->item_regu_price}
                                    {/if}
                                </li>
                                <li>
                                    <form id="personal-info-form">
                                        <div class="custom-select">
                                            <select id="categories" class='select2'>
                                                <option value="0">Regular</option>
                                            </select>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <ul class="sidebar-product-btn">
                                <li><a href="#" class="add-to-favourites-btn" id="favourites-button"><i class="fa fa-lock" aria-hidden="true"></i> Secure Payment</a></li>
                                {if not $is_login}
                                    <li><a href="#myModal" class="buy-now-btn" data-toggle="modal" id="buy-button">Buy Now <strong>{$app.currency}{if !$is_flash}{$item->item_regu_price}{else}{$fs_price}{/if}</strong></a></li>
                                {elseif $is_login}
                                        {if $is_purchased}
                                        <li><div class="text-primary">Your have already purchase this item you can download</div></li>
                                            <li>
                                                <form action="{$url.main}download" method="post" id='download'>
                                                    {$csrf_token}
                                                    <input type="hidden" name="item" value="{$item->item_id}">
                                                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Download Now</button>
                                                </form>
                                            </li>
                                            {elseif $is_author}
                                                <li><div class="text-danger">You are the auhor of this item you can download</div></li>
                                                <li>
                                                    <form action="{$url.main}download" method="post" id='download_a'>
                                                        {$csrf_token}
                                                        <input type="hidden" name="item" value="{$item->item_id}">
                                                        <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Download Now</button>
                                                    </form>
                                                </li>
                                            {else}
                                                <li><a href="#buyItem" class="buy-now-btn" data-toggle="modal" id="buy-button">Buy Now <strong>{$app.currency}{if !$is_flash}{$item->item_regu_price}{else}{$fs_price}{/if}</strong></a></li>   
                                        {/if}
                                {/if}
                            </ul>
                        </div>
                    </div>     
                    {if $is_flash}
                    <div class="" style="background:red;">
                        <div class="clock" style="top:23px;"></div>
                        <div class="text-center" style="color:#501804;">This item is <b>50%</b> Discount for Limited Time Get it now!</div>
                    </div>
                    {/if}                           
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <ul class="sidebar-sale-info">
                                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                                <li>{$item_sales}</li>
                                <li>Sales</li>                                           
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Product Information</h3>
                            <ul class="sidebar-product-info">
                                <li>Category:<span><a href="#">{$item->main_cat_name}</a> / <a href="#">{$item->sub_cat_name}</a> / <a href="#">{$item->child_cat_name}</a></span></li>
                                <li>Released On:<span> {Carbon\Carbon::parse($item->item_created_at)->format('d F, Y')}</span></li>
                                {if $item->item_updated_at}
                                    <li>Last Update:<span> {Carbon\Carbon::parse($item->item_updated_at)->format('d F, Y')}</span></li>
                                {/if}
                                <li>Version:<span> {$item->item_version}</span></li>
                                <li>Tags<span> {$item->item_tags}</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Share & Earn</h3>
                            <div class="sidebar-author-info">
                                <div class="ssk-block" style="width: auto">
                                    <p>You will earn <b>{$app.affi_rate}%</b> on each sale when your friends buy via your ref link.</p>
                                    <hr>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" target="_blank" class="ssk ssk-text ssk-facebook">Share On Facebook</a>
                                    <a href="https://twitter.com/home?status={$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" target="_blank" class="ssk ssk-text ssk-twitter">Share On Twitter</a>
                                    <a href="#" class="ssk ssk-text ssk-google-plus">Share On Google</a>
                                    <hr>
                                    <input style="width:100%;" onClick="this.select();" value="{$url.main}item/{$item->item_id}/{$item->item_slug}{if $is_login}?ref={$usr.username}{/if}" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Item Author</h3>
                            <div class="sidebar-author-info">
                                <img src="{$u_photo}{$item->user_avater}" width="80px" alt="product" class="img-responsive">
                                <div class="sidebar-author-content">
                                    <h3>{$item->user_username}</h3>
                                    <a href="{$url.main}{$item->user_username}" class="view-profile">View Profile</a>
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
                </div>
            </div>                        
        </div>
    </div>
</div>
<!-- Product Details Page End Here -->


<!-- Modal -->
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
            <button type="submit" name="submit" class="btn btn-info btn-block">Submit Review</button>
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
<div class="modal fade" id="buyItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="paymentCont">
                    <div class="headingWrap">
                            <h3 class="headingTop text-center">Select Your Payment Method</h3>	
                            <p class="text-center">Purchasing <strong>{$item->item_name}</strong> For {$app.currency}{$item->item_regu_price}</p>
                    </div>
                    

                    <div class="row">
                        {if $paypal->pg_status eq 1}
                        <div class="{if $stripe->sg_status != 1}col-md-12 col-xs-12 col-sm-12{else}col-md-6 col-xs-6 col-sm-6{/if}">
                            <center><div id="paypal-button"></div></center>
                        </div>
                        {/if}

                        {if $stripe->sg_status eq 1}
                        <div class="{if $paypal->pg_status != 1}col-md-12 col-xs-12 col-sm-12{else}col-md-6 col-xs-6 col-sm-6{/if}">
                            <div id="buynow">
                                <button class="btn btn-success btn-block btn-rounded stripe-button" id="payButton">Pay With Stripe</button>
                                <input type="hidden" id="payProcess" value="0"/>
                            </div>
                        </div>
                        {/if}
                        </div>

                        <div class="row">

                        {if $btc->btc_status eq 1}
                        <div class="col-md-6 col-sm-6 col-xs-6 col-6">
                            <form action="{$url.main}checkout/bitcoin_gateway" id="payWithBTC" method="post">
                                {$csrf_token}
                                <input type="hidden" name="item_id" value="{$item->item_id}">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWithBTC').submit();"><img src="{$url.main}static/pay/btc.png" style="height:100px" alt=""></a></center>
                            </form>
                        </div>
                        {/if}

                        <div class="{if $btc->btc_status eq 1}col-md-6 col-sm-6 col-xs-6 col-6{else}col-md-12 col-sm-12 col-xs-12 col-12{/if}">
                            <form action="{$url.main}checkout/buy_with_credit" id="payWitCredit" method="post" data-toggle="tooltip" data-placement="top" title="Your Available Bal Is: {$app.currency}{$usr.balance}">
                                {$csrf_token}
                                <input type="hidden" name="item_id" value="{$item->item_id}">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWitCredit').submit();"><img src="{$url.main}static/pay/credit.png" style="height:100px" alt=""></a></center>
                            </form>
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-md-12 text-center">
                            <div id="paymentDetails" style="display: none;">
                                <p class="aligncenter green bigger">Your payment was successful.</p>
                                <h4 class="text-center">Payment Information</h4>
                                <p>
                                Order ID: <span class="text-center" id="orderID">&#x3C;ORDER_ID&#x3E;</span><br/>
                                Transaction ID: <span class="text-center" id="txnID">&#x3C;TX_ID&#x3E;</span><br/>
                                </p>
                                <a href="{$url.main}my-download" type="button" class="btn btn-success btn-block">Click Here If Not Redirected</a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






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
                amount: { total: '{/literal}{if !$is_flash}{$item->item_regu_price}{else}{$fs_price}{/if}', currency: '{$app.currency_code}{literal}' },
                item_list: {
                    items: [
                        {
                        name: '{/literal}{$item->item_name}',
                        description: 'Purchase {$item->item_name} From {$app.name}',
                        quantity: '1',
                        price: '{if !$is_flash}{$item->item_regu_price}{else}{$fs_price}{/if}',
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

{block name=item_details_js}
<script src="{$ast}/js/select2.min.js" type="text/javascript"></script>
{/block}

{block name=item_deails_css}
<link rel="stylesheet" href="{$ast}/css/select2.min.css">
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