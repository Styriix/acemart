<!-- Main Banner 1 Area Start Here -->
<div class="inner-banner-area">
    <div class="container" style="padding-top: 25px;">
        <div class="inner-banner-wrapper">
            <p>{$app.short_descrip}</p>
            <form action="{$url.main}main/search" method="post">
            <div class="banner-search-area input-group">
                    {$csrf_token}
                    <input class="form-control" placeholder="Search Your Keywords e.g script social networks" name="key" type="text">
                    <span class="input-group-addon">
                        <button type="submit" name="search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Main Banner 1 Area End Here -->
{$head.b_main}