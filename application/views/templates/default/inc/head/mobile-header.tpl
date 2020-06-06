<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li {if not $url_1}class="active"{/if}><a href="{$url.main}">Home</a></li>
                            <li {if $url_1 eq 'free-files'}class="active"{/if}><a href="{$url.main}free-files">Free Files</a></li>
                            <li {if $url_1 eq 'flash-sale'}class="active"{/if}><a href="{$url.main}flash-sale">Flash Sale</a></li>
                            
                            <!-- List of category section -->
                            {if $main_g_cats}
                                {foreach from=$main_g_cats item=h_cat}

                                    <li {if $url_2 eq $h_cat->main_cat_slug}class="active"{/if}><a href="{$url.main}category/{$h_cat->main_cat_slug}">{$h_cat->main_cat_name}</a>
                                        {if not empty($h_cat->sub_cats)}
                                            <ul>
                                                {foreach from=$h_cat->sub_cats item=$subs}
                                                    <li><a href="{$url.main}subcategory/{$subs->sub_cat_slug}">{$subs->sub_cat_name}</a></li>
                                                {/foreach}
                                            </ul>
                                        {/if}   
                                    </li>

                                {/foreach}
                            {/if}
                            
                            {if $c_pages}
                                {foreach from=$c_pages item=$pg}
                                    <li><a href="{$url.main}pages/{$pg->page_slug}">{$pg->page_name}</a></li>
                                {/foreach}
                            {/if}
                            <li><a href="{$url.main}contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>           
            </div>
        </div>
    </div>
</div>