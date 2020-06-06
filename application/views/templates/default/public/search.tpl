{extends file="layouts/category.tpl"}

{block name=contents}
<!-- Inner Page Banner Area Start Here -->
    <div class="pagination-area bg-secondary">
        <div class="container">
            <div class="pagination-wrapper">
                <ul>
                    <li><a href="{$url.main}">Home</a><span> -</span></li>
                    <li>Search</li>
                </ul>
            </div>
        </div>  
    </div>
<!-- Product Page Grid Start Here -->
            <div class="category-product-grid bg-secondary section-space-bottom">                
                <div class="container">
                    <div class="inner-page-main-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                                <div class="product-grid-view padding-narrow">
                                {if $keys}
                                    <div class="row">  


                                        {foreach from=$keys item=$item}                                        
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-item-grid">
                                            <div class="item-img">
                                                <img src="{$prd_img}{$item->pre_name}" alt="product" class="img-responsive">
                                            </div>
                                            <div class="item-content">
                                                <div class="item-info">
                                                    <h3><a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$item->item_name}">{$item->item_name|truncate:25}</a></h3>
                                                    <span>{$item->sub_cat_name}</span>
                                                    <div class="price">{$app.currency}{$item->item_regu_price}</div>
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
                                    {/if}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            
                                        </div>  
                                    </div>
                                </div>                                
                            </div>
                            


                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Page Grid End Here -->
    
{/block}