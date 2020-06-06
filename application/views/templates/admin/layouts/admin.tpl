{* main header file *}
{include file="inc/head/main-header.tpl"}

{* Top Menu Bar *}
{include file="inc/head/top-menu.tpl"}

<!-- Page started -->
<div class="page-container row-fluid">

{* Left side bar contents *}
{include file="inc/body/left-sidebar.tpl"}

<!-- Page contents start here-->
<div class="page-content">
<div class="clearfix"></div>

<!-- Page start -->
<div class="content">
{* Title bar section *}
{include file="inc/body/title-bar.tpl"}

{* Page contents goes here *}
{block name=contents} {/block}

</div>

</div>
<!-- Page contents ends here-->



{* footer contents *}
{include file="inc/foot/main-footer.tpl"}