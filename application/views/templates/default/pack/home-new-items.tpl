{if $new_items}
<div class="newest-products-area bg-secondary section-space-default">                
    <div class="container">
        <h2 class="title-default pro-title"> New Released </h2>  
    </div>
    <div class="container-fluid" id="isotope-container">
        <div class="row featuredContainer">

            {foreach from=$new_items item=$new_item}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 joomla plugins component">
                <div class="single-item-grid">
                    <div class="item-img">
                        <img src="{$prd_img}{$new_item->pre_name}" alt="product" class="img-responsive">
                        <div class="trending-sign" data-tips="New Released"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                    </div>
                    <div class="item-content">
                        <div class="item-info">
                            <h3><a href="{$url.main}item/{$new_item->item_id}/{$new_item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$new_item->item_name}">{$new_item->item_name|truncate:25}</a></h3>
                            <span>{$new_item->sub_cat_name}</span>
                            <div class="row" style="botton:5px;">
                                {if $new_item->isFree}
                                    <div class="col-sm-8">
                                        <div class="price-set">
                                            <i class="fa fa-thumbs-up like{$new_item->item_id}{if $new_item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$new_item->item_id}">({number_format($new_item->item_likes)})</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="price"><small><del>{$app.currency}{$new_item->item_regu_price}</del></small><em class="frees">Free</em></div>
                                    </div>
                                {elseif $new_item->isFlash}
                                    <div class="col-sm-8">
                                        <div class="price-set">
                                            <i class="fa fa-thumbs-up like{$new_item->item_id}{if $new_item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$new_item->item_id}">({number_format($new_item->item_likes)})</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="price"><small><del>{$app.currency}{$new_item->item_regu_price}</del></small><em class="flashs">{$app.currency}{$new_item->fs_price}</em></div>
                                    </div>
                                {else}
                                    <div class="col-sm-8">
                                        <div class="price-set">
                                            <i class="fa fa-thumbs-up like{$new_item->item_id}{if $new_item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$new_item->item_id}">({number_format($new_item->item_likes)})</small>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="price">{$app.currency}{$new_item->item_regu_price}</div>
                                    </div>
                                {/if}
                            </div>
                            
                        </div>
                        <div class="item-profile">
                            <div class="profile-title">
                                <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: {$new_item->user_firstname} {$new_item->user_lastname}" src="{$u_photo}{$new_item->user_avater}" alt="profile" class="img-responsive img-circle"></div>
                                <span>{$new_item->user_username}</span>
                            </div>
                            <div class="profile-rating">
                                <ul>
                                    {if $new_item->item_rate eq 0}
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    {elseif $new_item->item_rate >= 1 && $new_item->item_rate < 2}
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    {elseif $new_item->item_rate >=2 && $new_item->item_rate < 3}
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    {elseif $new_item->item_rate >= 3 && $new_item->item_rate < 4}
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    {elseif $new_item->item_rate < 5}
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    {elseif $new_item->item_rate >= 5}
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
    </div>
</div>
{/if}