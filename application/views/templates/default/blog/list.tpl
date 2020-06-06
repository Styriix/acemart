{extends file="layouts/blog.tpl"}

{block name=contents}


<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>  
</div> 



<div class="blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-secondary">Our Blog</h2>
    </div>  
    <div class="container">
        <div class="blog-page-wrapper">
            <div class="row">

                {if $blogs}
                {foreach from=$blogs item=$blog}
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="item-img-holder">
                            <a href="{$url.main}blog/{$blog->blog_slug}"><img src="{if $blog->blog_preview}{$blogg.blog_img}{$blog->blog_preview}{else}{$blogg.blog_no_img}{/if}" class="img-responsive" alt="research"></a>
                            <span>{Carbon\Carbon::parse($blog->blog_created_at)->format('d M, Y')}</span>
                        </div>
                        <div class="item-content-holder">
                            <h3><a href="{$url.main}blog/{$blog->blog_slug}">{$blog->blog_title}</a></h3>
                                <p>{strip_tags($blog->blog_contents)|truncate:150}</p>
                            <ul class="item-comments">
                                <li><i class="fa fa-folder" aria-hidden="true"></i>{$blog->bc_name}</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i>{$blog->user_username}</li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i>{$blog->blog_view}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/foreach}
                {/if}


                </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {$pages}
                </div>  
            </div>
        </div>
    </div>  
</div> 

    
{/block}