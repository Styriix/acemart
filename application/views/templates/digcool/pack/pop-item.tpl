{if $pops}

    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Popular Products</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                {foreach from=$pops item=$pop}
                <div class="col-lg-3 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card-small">

                        <div class="product__thumbnail">
                            <img src="{$prd_img}{$pop->pre_name}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{$url.main}item/{$pop->item_id}/{$pop->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                                <a href="{$url.main}item-preview/{$pop->item_id}/{$pop->item_slug}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="{$url.main}item/{$pop->item_id}/{$pop->item_slug}" data-toggle="tooltip" data-placement="top" title="{$pop->item_name}" class="product_title">
                                <h4>{$pop->item_name|truncate:23}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{$u_photo}{$pop->user_avater}" data-toggle="tooltip" data-placement="top" title="By: {$pop->user_firstname} {$pop->user_lastname}" alt="author image">
                                    <p>
                                        <a href="{$url.main}{$pop->user_username}">{$pop->user_username}</a>
                                        <span style="padding-left:65px;">
                                            <i class="fa fa-thumbs-up like{$pop->item_id}{if $pop->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$pop->item_id}">({number_format($pop->item_likes)})</small>
                                        </span>
                                    </p>
                                </li>
                                <li class="out_of_class_name">
                                    <div class="sell">
                                       {if $pop->isFree}
                                            <p>
                                                <strong><font color="red">Free</font></strong>
                                            </p>
                                        {elseif $pop->isFlash}
                                            <p>
                                                <strong><font color="red">{$app.currency}{$pop->fs_price}</font></strong>
                                            </p>
                                        {/if}
                                    </div>
                                    <div class="rating product--rating">
                                        <ul>
                                            {if $pop->item_rate eq 0}
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
                                            {elseif $pop->item_rate >= 1 && $pop->item_rate < 2}
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
                                            {elseif $pop->item_rate >=2 && $pop->item_rate < 3}
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
                                            {elseif $pop->item_rate >= 3 && $pop->item_rate < 4}
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
                                            {elseif $pop->item_rate < 5}
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
                                            {elseif $pop->item_rate >= 5}
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
                                {if $pop->isFree}
                                    <span><del>{$app.currency}{$pop->item_regu_price}</del></span>
                                {elseif $pop->isFlash}
                                    <span><del>{$app.currency}{$pop->item_regu_price}</del></span>
                                {else}
                                    <span>{$app.currency}{$pop->item_regu_price}</span>
                                {/if}
                            </div>
                            <a href="#">
                                <span class="lnr lnr-book"></span>{$pop->sub_cat_name}</a>
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


{/if}