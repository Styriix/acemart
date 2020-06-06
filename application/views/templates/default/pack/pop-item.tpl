<!-- Trending Products Area Start Here -->
<div class="trending-products-area section-space-default">                
    <div class="container">
        <h2 class="title-default pro-title">Popular Products</h2>  
    </div>
    <div class="container=fluid">
        <div class="fox-carousel dot-control-textPrimary"
            data-loop="true"
            data-items="4"
            data-margin="30"
            data-autoplay="true"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="true"
            data-nav-speed="false"
            data-r-x-small="1"
            data-r-x-small-nav="false"
            data-r-x-small-dots="true"
            data-r-x-medium="2"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="true"
            data-r-small="2"
            data-r-small-nav="false"
            data-r-small-dots="true"
            data-r-medium="3"
            data-r-medium-nav="false"
            data-r-medium-dots="true"
            data-r-large="4"
            data-r-large-nav="false"
            data-r-large-dots="true">
            {if $pops}
            {foreach from=$pops item=$pop}
            <div class="single-item-grid">
                <div class="item-img">
                    <img src="{$prd_img}{$pop->pre_name}" alt="product" class="img-responsive">
                </div>
                <div class="item-content">
                    <div class="item-info">
                        <h3><a href="{$url.main}item/{$pop->item_id}/{$pop->item_slug}" data-toggle="tooltip" data-placement="top" title="{$pop->item_name}">{$pop->item_name|truncate:25}</a></h3>
                        <span>{$pop->sub_cat_name}</span>
                        <div class="row" style="botton:5px;">
                            {if $pop->isFree}
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like{$pop->item_id}{if $pop->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$pop->item_id}">({number_format($pop->item_likes)})</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><small><del>{$app.currency}{$pop->item_regu_price}</del></small><em class="frees">Free</em></div>
                                </div>
                            {elseif $pop->isFlash}
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like{$pop->item_id}{if $pop->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$pop->item_id}">({number_format($pop->item_likes)})</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><small><del>{$app.currency}{$pop->item_regu_price}</del></small><em class="flashs">{$app.currency}{$pop->fs_price}</em></div>
                                </div>
                            {else}
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like{$pop->item_id}{if $pop->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$pop->item_id}">({number_format($pop->item_likes)})</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price">{$app.currency}{$pop->item_regu_price}</div>
                                </div>
                            {/if}
                        </div>
                    </div>
                    <div class="item-profile">
                        <div class="profile-title">
                            <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: {$pop->user_firstname} {$pop->user_lastname}" src="{$u_photo}{$pop->user_avater}" alt="profile" class="img-responsive img-circle"></div>
                            <span>{$pop->user_username}</span>
                        </div>
                        <div class="profile-rating">
                            <ul>
                                {if $pop->item_rate eq 0}
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                {elseif $pop->item_rate >= 1 && $pop->item_rate < 2}
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                {elseif $pop->item_rate >=2 && $pop->item_rate < 3}
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                {elseif $pop->item_rate >= 3 && $pop->item_rate < 4}
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                {elseif $pop->item_rate < 5}
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                {elseif $pop->item_rate >= 5}
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                {/if}
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            {/foreach}
            {/if}
            

        </div>
    </div>
</div>
<!-- Trending Products Area End Here -->