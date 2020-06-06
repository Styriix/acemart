<section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="{$url.main}static/website/home-banner/main-banner.jpg" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    {$app.short_descrip}</h3>
                            </div>
                            <div class="search__field">
                                <form action="{$url.main}main/search" method="POST">
                                    {$csrf_token}
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" name="key" type="text" placeholder="Search your products">
                                        <button class="btn btn--round" name="search" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="{$url.main}">Home</a>
                                    </li>
                                    {if $url_1 eq 'category'}
                                    <li class="active">
                                        <a href="#">{$main_cats->main_cat_name}</a>
                                    </li>
                                    {elseif $url_1 eq 'subcategory'}
                                    <li class="active">
                                        <a href="#">{$sub_cat->sub_cat_name}</a>
                                    </li>
                                    {elseif $url_1 eq childcat}
                                    <li>
                                        <a href="{$url.main}subcategory/{$sub_cat->sub_cat_slug}">{$sub_cat->sub_cat_name}</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">{$child_cat->child_cat_name}</a>
                                    </li>
                                    {elseif $url_1 == 'pages'}
                                    <li class="active">
                                        <a href="#">{$page->page_name}</a>
                                    </li>
                                    {elseif $url_1 == 'contact'}
                                    <li class="active">
                                        <a href="#">Contact Us</a>
                                    </li>
                                    {/if}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->

    </section>
    {$head.b_main}