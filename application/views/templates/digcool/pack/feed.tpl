{if $follo_feed}
<section class="section--padding2 bgcolor">

    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Following Author's Feed</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                {foreach from=$follo_feed item=$new_item}
                <div class="col-lg-3 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card-small">

                        <div class="product__thumbnail">
                            <img src="{$prd_img}{$new_item->pre_name}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{$url.main}item/{$new_item->item_id}/{$new_item->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                                <a href="{$url.main}item-preview/{$new_item->item_id}/{$new_item->item_slug}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="{$url.main}item/{$new_item->item_id}/{$new_item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$new_item->item_name}" class="product_title">
                                <h4>{$new_item->item_name|truncate:23}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{$u_photo}{$new_item->user_avater}" data-toggle="tooltip" data-placement="top" title="By: {$new_item->user_firstname} {$new_item->user_lastname}" alt="author image">
                                    <p>
                                        <a href="{$url.main}{$new_item->user_username}">{$new_item->user_username}</a>
                                        <span style="padding-left:65px;">
                                            <i class="fa fa-thumbs-up like{$new_item->item_id}{if $new_item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$new_item->item_id}">({number_format($new_item->item_likes)})</small>
                                        </span>
                                    </p>
                                </li>
                                <li class="out_of_class_name">
                                    <div class="sell">
                                       {if $new_item->isFree}
                                            <p>
                                                <strong><font color="red">Free</font></strong>
                                            </p>
                                        {elseif $new_item->isFlash}
                                            <p>
                                                <strong><font color="red">{$app.currency}{$new_item->fs_price}</font></strong>
                                            </p>
                                        {/if}
                                    </div>
                                    <div class="rating product--rating">
                                        <ul>
                                            {if $new_item->item_rate eq 0}
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
                                            {elseif $new_item->item_rate >= 1 && $new_item->item_rate < 2}
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
                                            {elseif $new_item->item_rate >=2 && $new_item->item_rate < 3}
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
                                            {elseif $new_item->item_rate >= 3 && $new_item->item_rate < 4}
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
                                            {elseif $new_item->item_rate < 5}
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
                                            {elseif $new_item->item_rate >= 5}
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
                                {if $new_item->isFree}
                                    <span><del>{$app.currency}{$new_item->item_regu_price}</del></span>
                                {elseif $new_item->isFlash}
                                    <span><del>{$app.currency}{$new_item->item_regu_price}</del></span>
                                {else}
                                    <span>{$app.currency}{$new_item->item_regu_price}</span>
                                {/if}
                            </div>
                            <a href="#">
                                <span class="lnr lnr-book"></span>{$new_item->sub_cat_name}</a>
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
{/if}