{if $h_blogs}
<section class="latest-news section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>From Our
                        <span class="highlighted">Blogs</span>
                    </h1>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">

            {foreach from=$h_blogs item=$hb}
            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="news">
                    <div class="news__thumbnail">
                        <img src="{if $hb->blog_preview}{$blogg.blog_img}{$hb->blog_preview}{else}{$blogg.blog_no_img}{/if}" alt="News Thumbnail">
                    </div>
                    <div class="news__content">
                        <a href="{$url.main}blog/{$hb->blog_slug}" class="news-title">
                            <h4>{$hb->blog_title}</h4>
                        </a>
                        <p>{strip_tags($hb->blog_contents)|truncate:150}</p>
                    </div>
                    <div class="news__meta">
                        <div class="date">
                            <span class="lnr lnr-clock"></span>
                            <p>{Carbon\Carbon::parse($hb->blog_created_at)->format('d M, Y')}</p>
                        </div>

                        <div class="other">
                            <ul>
                                <li>
                                    <span class="lnr lnr-user"></span>
                                    <span>{$hb->user_username|ucfirst}</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-eye"></span>
                                    <span>{$hb->blog_view}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {/foreach}

            
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
{/if}