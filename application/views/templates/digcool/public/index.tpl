{extends file="layouts/main.tpl"}

{block name=contents}
<section class="section--padding2 bgcolor">

{* free files *}
{include file="pack/free-files.tpl"}

{* Flash sale *}
{include file="pack/flashsale.tpl"}

{* Following Feeds *}
{include file="pack/feed.tpl"}

{* newest files *}
{include file="pack/home-new-items.tpl"}

{* Popular *}
{include file="pack/pop-item.tpl"}

</section>

{include file="pack/blog.tpl"}

{* services *}
{include file="pack/service.tpl"}

{* Counter *}
{include file="pack/counter.tpl"}
    
{/block}

{block name=item_liker_script}
{include file="inc/extra/like_count.tpl"}
{/block}
