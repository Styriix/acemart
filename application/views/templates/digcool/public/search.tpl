{extends file="layouts/category.tpl"}

{block name=contents}
    
<section class="section--padding2 bgcolor">
    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Search</h3>
                        </div>
                    </div>
                </div>
            </div>
    {if $keys}
    <div class="row">
    {foreach from=$keys item=$item}
    <div class="col-lg-3 col-md-6">
        <!-- start .single-product -->
        <div class="product product--card product--card-small">

            <div class="product__thumbnail">
                <img src="{$prd_img}{$item->pre_name}" alt="Product Image">
                <div class="prod_btn">
                    <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                    <a href="{$item->item_live_demo}"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
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
                        </p>
                    </li>
                    <li class="out_of_class_name">
                        <div class="sell">
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
                    <span>{$app.currency}{$item->item_regu_price}</span>
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
    {/if}

        </div>
    </div>
</section>

{/block}