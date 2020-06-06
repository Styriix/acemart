{extends file="layouts/page.tpl"}

{block name=contents}
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>{$page->page_name}</li>
            </ul>
        </div>
    </div>  
</div>
{$page->page_contents}
    
{/block}