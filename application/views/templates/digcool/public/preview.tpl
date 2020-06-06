{extends file="layouts/preview.tpl"}

{block name=contents}

<nav class="navbar fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="{$url.main}"><img src="{$app.logo}" alt=""></a>
  <span class="navbar-toggler">
    <a href="{$url.main}item/{$item->item_id}/{$item->item_slug}" class="btn btn-md w-sm btn-info m-r-sm m-t-xxs"><strong>Purchase - {$app.currency}{number_format($item->item_regu_price, 2)}</strong></a>
    <a href="{$item->item_live_demo}" class="btn btn-warning btn-md">Remove frame</a>
  </span>
 </nav>

  




  <iframe src="{$item->item_live_demo}" frameborder="0" allowfullscreen></iframe>


{/block}