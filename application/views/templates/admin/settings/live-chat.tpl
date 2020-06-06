{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">How to Set Up?</h4>
        <ol>
            <li>Vist <a href="http://tawk.to">WWW.TAWK.TO</a></li>
            <li>Create an account</li>
            <li>Select your language</li>
            <li>Provide your website linke and name</li>
            <li>Add addition admin if any</li>
            <li>Copy your wiget code and paste it in the box below</li>
        </ol>
        <hr>
        <form action="{$url.admin}/set_live_chat" method="post">
        {$csrf_token}
        <div class="form-group">
          <label for="wiget">Wiget Code</label>
          <textarea class="form-control" name="code" rows="13">{$app.lc}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
        </div>
        </form>
    </div>
</div>


{/block}