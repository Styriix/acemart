{if $h_blogs}
<br><br>
<div class="blog-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h4 class="title-secondary">From Our Blog</h4>
    </div>  
    <div class="container">
        <div class="blog-page-wrapper">
            <div class="row">
                {foreach from=$h_blogs item=$hb}
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="item-img-holder">
                            <a href="{$url.main}blog/{$hb->blog_slug}"><img src="{if $hb->blog_preview}{$blogg.blog_img}{$hb->blog_preview}{else}{$blogg.blog_no_img}{/if}" class="img-responsive" alt="research"></a>
                            <span>{Carbon\Carbon::parse($hb->blog_created_at)->format('d M, Y')}</span>
                        </div>
                        <div class="item-content-holder">
                            <h3><a href="{$url.main}blog/{$hb->blog_slug}">{$hb->blog_title}</a></h3>
                                <p>{strip_tags($hb->blog_contents)|truncate:150}</p>
                            <ul class="item-comments">
                                <li><i class="fa fa-folder" aria-hidden="true"></i>{$hb->bc_name}</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i>{$hb->user_username|ucfirst}</li>
                                <li><i class="fa fa-eye" aria-hidden="true"></i>{$hb->blog_view}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/foreach}
                
                
                
            </div>
            
        </div>
    </div>  
</div> 
{/if}