{extends file="layouts/free-files.tpl"}

{block name=contents}
  <section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="{$url.main}static/webiste.home-banner/main-banner.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Free Files Ends In</h1>
                    
                        <div id="timer">
                            <div id='days' class="board">
                            <div class="number"></div>
                            <div class="labels">Days</div>
                            </div>

                            <div id='hours' class="board">
                            <div class="number"></div>
                            <div class="labels">Hours</div>
                            </div>

                            <div id='minutes' class="board">
                            <div class="number"></div>
                            <div class="labels">Minutes</div>
                            </div>

                            <div id='seconds' class="board">
                            <div class="number"></div>
                            <div class="labels">Seconds</div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--padding2 bgcolor">

    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Free Files</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
    {foreach from=$freebies item=$item}
    <div class="col-lg-3 col-md-6">
        <!-- start .single-product -->
        <div class="product product--card product--card-small">

            <div class="product__thumbnail">
                <img src="{$prd_img}{$item->pre_name}" alt="Product Image">
                <div class="prod_btn">
                    <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                    <a href="{$url.main}item-preview/{$item->item_id}/{$item->item_slug}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                </div>
            </div>
            <!-- end /.product__thumbnail -->

            <div class="product-desc">
                <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$item->item_name}" class="product_title">
                    <h4>{$item->item_name|truncate:23}</h4>
                </a>
                <ul class="titlebtm">
                    <li>
                        <img class="auth-img" src="{$u_photo}{$item->user_avater}" data-toggle="tooltip" data-placement="top" title="By: {$item->user_firstname} {$item->user_lastname}" alt="author image">
                        <p>
                            <a href="{$url.main}{$item->user_username}">{$item->user_username}</a>
                            <span style="padding-left:65px;">
                                <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                            </span>
                        </p>
                    </li>
                    <li class="out_of_class_name">
                        <div class="sell">
                            <p>
                                <strong><font color="red">Free</font></strong>
                            </p>
                        </div>
                        <div class="rating product--rating">
                            <ul>
                                {if $item->item_rate eq 0}
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
                                {elseif $item->item_rate >= 1 && $item->item_rate < 2}
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
                                {elseif $item->item_rate >=2 && $item->item_rate < 3}
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
                                {elseif $item->item_rate >= 3 && $item->item_rate < 4}
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
                                {elseif $item->item_rate < 5}
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
                                {elseif $item->item_rate >= 5}
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
                    <span><del>{$app.currency}{$item->item_regu_price}</del></span>
                </div>
                <a href="#">
                    <span class="lnr lnr-book"></span>{$item->sub_cat_name}</a>
            </div>
            <!-- end /.product-purchase -->
        </div>
        <!-- end /.single-product -->
    </div>
    <!-- end /.col-md-4 -->
    {/foreach}
    </div>
        </div>
    </div>

</section>
    
{/block}

{block name=timer_css}
<link rel="stylesheet" href="{$ast}/css/timer.css">
 {/block}

{block name=timer_js}
<script>
{literal}
    // Set the date we're counting down to
    var countDownDate = new Date('{/literal}{Carbon\Carbon::parse($last_update_free)->addDays(7)->format("m d, Y")}{literal} 00:00:00').getTime();  // CHANGE DATE AND TIME HERE

    // Update the count down every 1 second
    var countdown = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the difference between now and the count down date
    var difference = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // If the difference is less than 0, stop countdown
    if (difference < 0) {
        clearInterval(countdown);
        days = 0, hours = 0, minutes = 0, seconds = 0;
    }

    // Output the result
    document.getElementById("days").children[0].innerText = days;
    document.getElementById("hours").children[0].innerText = hours;
    document.getElementById("minutes").children[0].innerText = minutes;
    document.getElementById("seconds").children[0].innerText = seconds;
    }, 1000);
{/literal}
</script>
 {/block}
 {block name=item_liker_script}
{include file="inc/extra/like_free_files.tpl"}
{/block}