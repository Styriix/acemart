{extends file="layouts/blog-show.tpl"}

{block name=contents}
    
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="{$url.main}">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">{$blog->blog_title}</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">{$blog->blog_title}</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="blog_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_blog blog--default">
                    <article>
                        <figure>
                            <img src="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.blog_no_img}{/if}" alt="Blog image">
                        </figure>
                        <div class="blog__content">
                            <a href="#" class="blog__title">
                                <h4>{$blog->blog_title}</h4>
                            </a>

                            <div class="blog__meta">
                                <div class="author">
                                    <span class="lnr lnr-user"></span>
                                    <p>by
                                        <a href="#">{$blog->user_username}</a>
                                    </p>
                                </div>
                                <div class="date_time">
                                    <span class="lnr lnr-clock"></span>
                                    <p>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M Y')}</p>
                                </div>
                                <div class="comment_view">
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span>{$blog->blog_view}</p>
                                </div>
                            </div>
                        </div>

                        <div class="single_blog_content">
                            {$blog->blog_contents}
                            <div class="share_tags">
                                <div class="share">
                                    <div class="social_share active">
                                        <ul class="social_icons">
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}blog/{$blog->blog_slug}" target="_blank">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/intent/tweet?url={$url.main}blog/{$blog->blog_slug}&text={$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}" target="_blank">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://pinterest.com/pin/create/button/?url={$url.main}blog/{$blog->blog_slug}={if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.no-img}{/if}&description={$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}", target="_blank">
                                                    <span class="fa fa-pinterest"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&url={$url.main}blog/{$blog->blog_slug}&title={$blog->blog_title}">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end social_share -->
                                </div>
                                <!-- end bog_share_ara  -->
                            </div>
                        </div>
                    </article>
                </div>
                {if !empty($cmt->blog_cmt_code)}
                <div class="comment_area">
                    <div class="comment__title">
                        <h4>comments</h4>
                    </div>
                    <div class="comment___wrapper">
                       <div class="comment___wrapper" id="disqus_thread"></div>
                        {$cmt->blog_cmt_code}

                    </div>
                    <!-- end /.comment___wrapper -->
                </div>
                <!-- end /.col-md-8 -->
                {/if}

            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--blog">

                    <div class="sidebar-card sidebar--post card--blog_sidebar">
                        <div class="card-title">
                            <!-- Nav tabs -->
                            <ul class="nav post-tab" role="tablist">
                                <li>
                                    <a href="#popular" id="popular-tab" class="active" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Popular Posts</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab">
                                    {if $recents}
                                    <ul class="post-list">
                                        {foreach from=$recents item=$res}
                                        <li>
                                            <div class="thumbnail_img">
                                                <img src="{if $res->blog_preview}{$blogg.blog_img}{$res->blog_preview}{else}{$blogg.blog_no_img}{/if}" alt="blog thumbnail">
                                            </div>
                                            <div class="title_area">
                                                <a href="{$url.main}blog/{$res->blog_slug}">
                                                    <h4>{$res->blog_title}</h4>
                                                </a>
                                                <div class="date_time">
                                                    <span class="lnr lnr-clock"></span>
                                                    <p>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M, Y')}</p>
                                                </div>
                                            </div>
                                        </li>
                                        {/foreach}
                                    </ul>
                                    {/if}
                                    <!-- end /.post-list -->
                                </div>
                                <!-- end /.tabpanel -->

                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <!-- end /.banner -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>

{/block}