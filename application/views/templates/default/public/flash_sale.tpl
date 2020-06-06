{extends file="layouts/flash-sale.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Flash Sale</li>
            </ul>
        </div>
    </div>  
</div>

<div class="bg-primaryText section-space-default" style="text-align:center;">
<h2 class="text-center" style="color:white;">Falsh Sale Ends In</h2>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

</div>
<hr>


<div class="category-product-grid bg-secondary section-space-bottom">                
    <div class="container">
        <div class="inner-page-main-body">
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                    <div class="product-grid-view padding-narrow">
                        {if $flashes}
                        <div class="row">
                            {foreach from=$flashes item=$item}                                        
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item-grid">
                                    <div class="item-img">
                                        <img src="{$prd_img}{$item->pre_name}" alt="product" class="img-responsive">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-info">
                                            <h3><a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" data-toggle="tooltip" data-placement="top" title="{$item->item_name}">{$item->item_name|truncate:20}</a></h3>
                                            <span>{$item->sub_cat_name}</span>
                                            <div class="row" style="botton:5px;">
                                                <div class="col-sm-8">
                                                    <div class="price-set">
                                                        <i class="fa fa-thumbs-up like{$item->item_id}{if $item->isLiked} text-primary{/if}"{if not $is_login} data-toggle="tooltip" data-placement="top" title="Please Login"{/if}></i> <small class="item_id_{$item->item_id}">({number_format($item->item_likes)})</small>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="price"><small><del>{$app.currency}{$item->item_regu_price}</del></small><em class="flashs">{$app.currency}{$item->fs_price}</em></div>
                                                </div>
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
                            <h3 class="text-center">No Item Available Yet</h3>
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
</div>
<!-- Product Page Grid End Here -->

{/block}

{block name=count-down-timer}


<script type="text/javascript">
{literal}

  function getTimeRemaining(endtime) {
  var t = Date.parse('{/literal}{Carbon\Carbon::parse($last_update_flash)->addDays(7)->format("Y/m/d")}{literal}') - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

  {/literal}
</script>
{/block}

{block name=css}
<link rel="stylesheet" href="{$ast}/css/pure-min.css">
{/block}

{block name=item_liker_script}
{include file="inc/extra/like_flash_files.tpl"}
{/block}