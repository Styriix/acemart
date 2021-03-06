{extends file="layouts/category.tpl"}

{block name=contents}
    
<div class="filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar">
                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                            <span class="lnr lnr-chevron-down"></span>
                        </a>
                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                            {if $childs}
                                {foreach from=$childs item=$chi}
                                <li>
                                    <a href="{$url.main}/childcat/{$chi->child_cat_slug}">{$chi->child_cat_name}
                                        <span>{$chi->item_tot}</span>
                                    </a>
                                </li>
                                {/foreach}
                            {/if}
                            
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                   
                </div>
                <!-- end /.filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>


<section class="products">
    <!-- start container -->
    <div class="container">

        {if $a_items}
        <div class="row">
            {foreach from=$a_items item=$item}
            <div class="col-lg-3 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card product--card-small">

                    <div class="product__thumbnail">
                        <img src="{$prd_img}{$item->pre_name}" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                            <a href="{$url.main}item-preview/{$item->item_id}/{$item->item_slug}" target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$item->item_name}" class="product_title">
                            <h4>{$item->item_name|truncate:23}</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img data-toggle="tooltip" data-placement="top" title="By: {$item->user_firstname} {$item->user_lastname}" class="auth-img" src="{$u_photo}{$item->user_avater}" alt="author image">
                                <p>
                                    <a href="{$url.main}{$item->user_username}">{$item->user_username}</a>
                                    <span style="padding-left:65px;">
                                        <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                                    </span>
                                </p>
                            </li>
                            <li class="out_of_class_name">
                                <div class="sell">
                                    {if $item->isFree}
                                        <p>
                                            <strong><font color="red">Free</font></strong>
                                        </p>
                                    {elseif $item->isFlash}
                                        <p>
                                            <strong><font color="red">{$app.currency}{$item->fs_price}</font></strong>
                                        </p>
                                    {/if}
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
                            {if $item->isFree}
                                <span><del>{$app.currency}{$item->item_regu_price}</del></span>
                            {elseif $item->isFlash}
                                <span><del>{$app.currency}{$item->item_regu_price}</del></span>
                            {else}
                                <span>{$app.currency}{$item->item_regu_price}</span>
                            {/if}
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
        {else}
            <h3 class="text-center">No Product Available Yet!</h3>
        {/if}

        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area categorised_item_pagination">
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            {$pages}
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>


{/block}

{block name=item_liker_script}
{include file="inc/extra/like_child_cat.tpl"}
{/block}