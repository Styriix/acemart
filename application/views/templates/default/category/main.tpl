{extends file="layouts/category.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>{$main_cats->main_cat_name}</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->


<!-- Product Page Grid Start Here -->
<div class="product-page-grid bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="page-controls">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                <div class="page-controls-sorting">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<i class="fa fa-sort" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="layout-switcher">
                                    <ul>
                                        <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>    
                                        <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                            <div class="product-grid-view padding-narrow">
                                {if $items}
                                <div class="row">
                                    {foreach from=$items item=$item} 
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="single-item-grid">
                                            <div class="item-img">
                                                <img src="{$prd_img}{$item->pre_name}" alt="product" class="img-responsive">
                                            </div>
                                            <div class="item-content">
                                                <div class="item-info">
                                                    <h3><a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$item->item_name}">{$item->item_name|truncate:25}</a></h3>
                                                    <span>{$item->sub_cat_name}</span>
                                                    <div class="row" style="botton:5px;">
                                                        {if $item->isFree}
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price"><small><del>{$app.currency}{$item->item_regu_price}</del></small><em class="frees">Free</em></div>
                                                            </div>
                                                        {elseif $item->isFlash}
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price"><small><del>{$app.currency}{$item->item_regu_price}</del></small><em class="flashs">{$app.currency}{$item->fs_price}</em></div>
                                                            </div>
                                                        {else}
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price">{$app.currency}{$item->item_regu_price}</div>
                                                            </div>
                                                        {/if}
                                                    </div>
                                                </div>
                                                <div class="item-profile">
                                                    <div class="profile-title">
                                                        <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: {$item->user_firstname} {$item->user_lastname}" src="{$u_photo}{$item->user_avater}" alt="profile" class="img-responsive img-circle"></div>
                                                        <span>{$item->user_username}</span>
                                                    </div>
                                                    <div class="profile-rating">
                                                        <ul>
                                                            {if $item->item_rate eq 0}
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 1 && $item->item_rate < 2}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >=2 && $item->item_rate < 3}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 3 && $item->item_rate < 4}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate < 5}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 5}
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
                                    </div>
                                    {/foreach}
                                    
                                                                            
                                </div>
                                {else}
                                    <h3 class="text-center">No Product Available Yet!</h3>
                                {/if}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        {$pages}
                                    </div>  
                                </div>
                            </div> 
                        </div>
                        <div role="tabpanel" class="tab-pane fade clear products-container" id="list-view">
                            <div class="product-list-view">
                                {if $items}
                                {foreach from=$items item=$item}
                                <div class="single-item-list">
                                    <div class="item-img">
                                        <img src="{$prd_img}{$item->pre_name}" alt="product" class="img-responsive">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-info">
                                            <div class="item-title">
                                                <h3><a href="{$url.main}item/{$item->item_id}/{$item->item_slug}">{$item->item_name}</a></h3>
                                                <span>{$item->sub_cat_name}</span>
                                                <p>{$item->item_description|strip_tags|truncate:60} </p>
                                            </div>
                                            <div class="item-sale-info">
                                                <div class="price">{$app.currency}{$item->item_regu_price}</div>
                                            </div>
                                        </div>
                                        <div class="item-profile">
                                            <div class="profile-title">
                                                <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: {$item->user_firstname} {$item->user_lastname}" src="{$u_photo}{$item->user_avater}" alt="profile" class="img-responsive img-circle"></div>
                                                <span>{$item->user_username}</span>
                                            </div>
                                            <div class="profile-rating-info">
                                                <ul>
                                                    <li>
                                                        <ul class="profile-rating">
                                                            {if $item->item_rate eq 0}
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 1 && $item->item_rate < 2}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >=2 && $item->item_rate < 3}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 3 && $item->item_rate < 4}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate < 5}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            {elseif $item->item_rate >= 5}
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                            {/if}
                                                            <li>(<span> {$item->item_rate}</span> )</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                {/foreach}
                                {else}
                                    <h3 class="text-center">No Product Available Yet</h3>
                                {/if}
                                



                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        {$pages}
                                    </div>  
                                </div>
                            </div>
                        </div>                               
                    </div>                               
                </div>
            </div>





            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Categories</h3>
                            <ul class="sidebar-categories-list">
                                {if $sub_cats}
                                    {foreach from=$sub_cats item=sub_cat}
                                        <li><a href="#">{$sub_cat->sub_cat_name}<span>({$sub_cat->chi_total})</span></a></li>
                                    {/foreach}
                                {/if}
                            </ul>
                        </div>
                    </div>


                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Top 10 Sellers</h3>

                            {if $top_sales}
                            {foreach from=$top_sales item=$top}
                            <div class="sidebar-single-item-grid">
                                <div class="item-img">
                                    <img src="{$prd_img}{$top->pre_name}" alt="product" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <div class="item-info">
                                        <h3><a href="{$url.main}item/{$top->item_id}/{$top->item_slug}" data-toggle="tooltip" data-placement="top" title="{$top->item_name}">{$top->item_name|truncate:25}</a></h3>
                                        <span>{$top->sub_cat_name}</span>
                                        <div class="price">{$app.currency}{$top->item_regu_price}</div>
                                    </div>
                                    <div class="item-profile">
                                        <div class="profile-title">
                                            <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: {$top->user_firstname} {$top->user_lastname}" src="{$u_photo}{$top->user_avater}" alt="profile" class="img-responsive img-circle" width="35px"></div>
                                            <span>{$top->user_username}</span>
                                        </div>
                                        <div class="profile-rating">
                                            <ul>
                                                {if $top->item_rate eq 0}
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                {elseif $top->item_rate >= 1 && $top->item_rate < 2}
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                {elseif $top->item_rate >=2 && $top->item_rate < 3}
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                {elseif $top->item_rate >= 3 && $top->item_rate < 4}
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                {elseif $top->item_rate < 5}
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                {elseif $top->item_rate >= 5}
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
            </div>                        
        </div>
    </div>
</div>
<!-- Product Page Grid End Here -->

    
{/block}

{block name=cat_foot}
<script src="{$ast}/vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
<script src="{$ast}/js/wNumb.js" type="text/javascript"></script>
{/block}

{block name=cat_head}
<link rel="stylesheet" href="{$ast}/vendor/noUiSlider/nouislider.min.css">
{/block}

{block name=item_liker_script}
{include file="inc/extra/like_main_cat.tpl"}
{/block}