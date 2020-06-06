{extends file="layouts/blog-show.tpl"}

{block name=contents}

<div class="pagination-area bg-secondary">
<div class="container">
    <div class="pagination-wrapper">
        <ul>
            <li><a href="{$url.main}">Home</a><span> -</span></li>
            <li>Blog</li>
            <li>{$blog->blog_title}</li>
        </ul>
    </div>
</div>  
</div>

<div class="single-blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <h2 class="title-section">{$blog->blog_title}</h2>
                <div class="inner-page-details inner-page-padding">
                    <div class="single-blog-wrapper">
                        <div class="single-blog-img-holder">
                            <a href="#"><img src="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.blog_no_img}{/if}" alt="blog" class="img-responsive"></a>
                            <ul class="news-date1">
                                <li>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M')}</li>
                                <li>{Carbon\Carbon::parse($blog->blog_created_at)->format('Y')}</li>
                            </ul>
                        </div>
                        <ul class="news-comments">
                            <li><a href="javascript:void();"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> {$blog->user_username|ucfirst}</a></li>
                            <li><a href="#"><i class="fa fa-folder" aria-hidden="true"></i>{$blog->bc_name}</a></li>
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span>({$blog->blog_view})</span> Views</a></li>
                        </ul>
                        <div class="single-blog-content-holder">
                            {$blog->blog_contents}
                        </div>
                        
                        <ul class="tag-share">
                            
                            <li>
                                <ul class="inner-share">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={$url.main}blog/{$blog->blog_slug}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={$url.main}blog/{$blog->blog_slug}&text={$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="http://pinterest.com/pin/create/button/?url={$url.main}blog/{$blog->blog_slug}={if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.no-img}{/if}&description={$blog->blog_contents|strip_tags:true|replace:'"':''|replace:"'":''|truncate:300}", target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url={$url.main}blog/{$blog->blog_slug}&title={$blog->blog_title}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>
                        </ul>          

                        {if !empty($cmt->blog_cmt_code)}                      
                        <div class="blog-comments">
                            <h2>Comments</h2>

                            <div id="disqus_thread"></div>
                                {$cmt->blog_cmt_code}
                            
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Latest posts</h3>
                            <ul class="sidebar-latest-post">
                                {if $recents}
                                {foreach from=$recents item=$res}
                                <li>
                                    <div class="latest-post-img">
                                        <a href="{$url.main}blog/{$res->blog_slug}"><img src="{if $res->blog_preview}{$blogg.blog_img}{$res->blog_preview}{else}{$blogg.blog_no_img}{/if}" class="img-responsive" alt="blog"></a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h4>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M, Y')}</h4>
                                        <p>{$res->blog_title}</p>
                                    </div>
                                </li>
                                {/foreach}
                                {/if}
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
    
{/block}