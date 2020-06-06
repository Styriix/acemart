{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}

<form action="{$url.admin}/update_website_header_contents" method="post">
{$csrf_token}
<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Inner Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper before the <code> < /head> </code> tags on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inner_head">Contents Here</label>
                    <textarea id="inner_head" class="form-control" name="inner_head" rows="10">{$head.inn}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">After Nav Bar Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper after the nav menu on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_nav_head">Contents Here</label>
                    <textarea id="after_nav_head" class="form-control" name="after_nav_head" rows="10">{$head.a_nav}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Before main content Header Contents</h4>
        <h5 class="text-primary text-center">This header content will apper before the main contents on every page.</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_header_head">Contents Here</label>
                    <textarea id="after_header_head" class="form-control" name="after_header_head" rows="10">{$head.b_main}</textarea>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Save Changes</button>
            </div>
        </div>
        
    </div>
</div>
</form>
    
{/block}