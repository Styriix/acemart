{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}

<form action="{$url.admin}/update_website_footer_contents" method="post">
{$csrf_token}
<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">After Main Page Contents</h4>
        <h5 class="text-primary text-center">This footer contents will appear after the main page contents of every pages</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inner_head">Contents Here</label>
                    <textarea id="inner_head" class="form-control" name="fc_bottom_page" rows="10">{$foot.foot}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Final Bottom Contents</h4>
        <h5 class="text-primary text-center">This contents will appear before the <code>< /body></code> tags</h5>
        <hr>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="after_header_head">Contents Here</label>
                    <textarea id="after_header_head" class="form-control" name="fc_bottom_close" rows="10">{$foot.inn_foot}</textarea>
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