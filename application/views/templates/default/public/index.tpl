{extends file="layouts/main.tpl"}

{block name=contents}

{* Weekly free files *}
{include file="pack/freebies.tpl"}

{* Falsh sales files *}
{include file="pack/flashsale.tpl"}

{* Following Feeds *}
{include file="pack/feed.tpl"}

{* newest files *}
{include file="pack/home-new-items.tpl"}

{* Popular *}
{include file="pack/pop-item.tpl"}

{* Blog *}
{include file="pack/blog.tpl"}

{* Services *}
{include file="pack/service.tpl"}

{/block}

{block name=item_liker_script}
{include file="inc/extra/like_count.tpl"}
{/block}