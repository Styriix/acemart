{extends file="layouts/category.tpl"}

{block name=contents}


<div class="filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar filter--bar2">
                    <div class="pull-left">
                        <div class="filter__option filter--select">
                            <h3>{$main_cats->main_cat_name}</h3>
                        </div>
                        
                        <div class="filter__option filter--layout">
                            
                        </div>
                    </div>
                </div>
                <!-- end filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>




<section class="products section--padding2">
    <!-- start container -->
    <div class="container">
        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-3 -->
            <div class="col-lg-3">
                <!-- start aside -->
                <aside class="sidebar product--sidebar">
                    <div class="sidebar-card card--category">
                        <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                            <h4>Categories
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse1">
                            <ul class="card-content">
                                {if $sub_cats}
                                    {foreach from=$sub_cats item=sub_cat}
                                        <li>
                                            <a href="{$url.main}subcategory/{$sub_cat->sub_cat_slug}">
                                                <span class="lnr lnr-chevron-right"></span>{$sub_cat->sub_cat_name}
                                                <span class="item-count">{$sub_cat->chi_total}</span>
                                            </a>
                                        </li>
                                    {/foreach}
                                {/if}
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--filter">
                        <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                            <h4>Top 10 Sellers
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        
                        <div class="card-content">
                        {if $top_sales}
                        <div class="row">
                            {foreach from=$top_sales item=$top}
                            <div class="col-lg-12 col-md-12">
                            <!-- start .single-product -->
                            <div class="product product--card product--card-small">

                                <div class="product__thumbnail">
                                    <img src="{$prd_img}{$top->pre_name}" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="{$url.main}item/{$top->item_id}/{$top->item_slug}" class="transparent btn--sm btn--round">More Info</a>
                                        <a href="{$url.main}item-preview/{$top->item_id}/{$top->item_slug}" target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="{$url.main}item/{$top->item_id}/{$top->item_slug}" data-toggle="tooltip" data-placement="top" title="{$top->item_name}" class="product_title">
                                        <h4>{$top->item_name|truncate:25}</h4>
                                    </a>
                                    <ul class="titlebtm">
                                            <li>
                                            <div class="rating product--rating">
                                                <ul>
                                                {if $top->item_rate eq 0}
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
                                                {elseif $top->item_rate >= 1 && $top->item_rate < 2}
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
                                                {elseif $top->item_rate >=2 && $top->item_rate < 3}
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
                                                {elseif $top->item_rate >= 3 && $top->item_rate < 4}
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
                                                {elseif $top->item_rate < 5}
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
                                                {elseif $top->item_rate >= 5}
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
                                        <span>{$app.currency}{$top->item_regu_price}</span>
                                    </div>
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>{$top->sub_cat_name}</a>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end col -->
                        {/foreach}
                        
                        </div>
                        {/if}
                        </div>
                    </div>
                    <!-- end /.sidebar-card -->
                </aside>
                <!-- end aside -->
            </div>
            <!-- end /.col-md-3 -->
            {if $items}
            <!-- start col-md-9 -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shortcode_module_title">
                            <div class="dashboard__title">
                                <h3>Products</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {foreach from=$items item=$item}
                    <div class="col-lg-4 col-md-6">
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
            </div>
            <!-- end /.col-md-9 -->
            {else}
                <h3 class="text-center">No Product Available Yet!</h3>
            {/if}
        </div>
        <!-- end /.row -->

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
        <!-- end /.row -->
    </div>
    <!-- end /.container -->

</section>


    
{/block}

{block name=item_liker_script}
{include file="inc/extra/like_main_cat.tpl"}
{/block}