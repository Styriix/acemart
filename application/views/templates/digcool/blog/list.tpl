{extends file="layouts/blog.tpl"}

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
                            <a href="#">Blogs</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Our Blogs</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
{if $blogs}
<section class="blog_area section--padding2">
    <div class="container">
        <div class="row" data-uk-grid>

            {foreach from=$blogs item=$blog}
            <div class="col-lg-4 col-md-6">
                <div class="single_blog blog--card">
                    <figure>
                        <img src="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.blog_no_img}{/if}" alt="Blog image">

                        <figcaption>
                            <div class="blog__content">
                                <a href="{$url.main}blog/{$blog->blog_slug}" class="blog__title">
                                    <h4>{$blog->blog_title}</h4>
                                </a>
                                <p>{strip_tags($blog->blog_contents)|truncate:150}</p>
                            </div>

                            <div class="blog__meta">
                                <div class="date_time">
                                    <span class="lnr lnr-clock"></span>
                                    <p>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M Y')}</p>
                                </div>
                                <div class="comment_view">
                                    <p class="comment">
                                        <span class="lnr lnr-user"></span>{$blog->user_username|ucfirst}</p>
                                    <p class="view">
                                        <span class="lnr lnr-eye"></span>{$blog->blog_view}</p>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end /.single_blog -->
            </div>
            <!-- end /.col-md-4 -->
            {/foreach}

            
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {$pages}
            </div>  
        </div>
    </div>
    <!-- end /.container -->
</section>
{/if}
    
{/block}