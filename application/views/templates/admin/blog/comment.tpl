{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Set up blog comments Configuration</h4>
    </div>
    <div class="grid-body">
        <p><strong><h4>How To Set</h4></strong></p>
        <p>
            <ol>
                <li>Visit http://disqus.com</li>
                <li>Create a new wiget/property</li>
                <li>Select "i can not find my platfom"</li>
                <li>In the next screen you will be given a script codes</li>
                <li>Copy the code and paste in box bellow</li>
                <li>Done!</li>
            </ol>
        </p>
        <hr>
        <form action="{$url.admin}/update_blog_comment_code" method="post">
            {$csrf_token}
            <div class="form-group">
                <label for="codes">Disqus code here</label>
                <textarea id="codes" class="form-control" name="code" rows="10">{$cmt->blog_cmt_code}</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Configure Comment</button>
        </form>

    </div>
</div>
    
{/block}