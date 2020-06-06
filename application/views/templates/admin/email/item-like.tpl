{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title"><h3 class="text-center">Customize Your Auhtor Item Like Notification Message</h3>
    <p class="text-center">This field require a basic html knowledge to design you preferd email template. You can also get free email templates from external resources. <br>
    <b>Note:</b> Do no broken the Specific tags written with {literal}{ and }{/literal} form example {literal}{user_firstname}{/literal} carries the username of the custormer <b> <a href="{$url_sample_tags}"> Click here </a></b> to acess more of the the availabe user tags. <br>
    <strong><font color="red">Only HTML tags is allowed!</font></strong></p></div>
    <div class="grid-bocy">
        <form action="{$url.admin}/update_email_templates/9/{$url_3}" method="post">
            {$csrf_token}
            <div class="form-group">
                <textarea id="code" class="form-control" name="email_body" rows="10" required>{$email->mail_body}</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Save Item LIke Template</button>
        </form>
    </div>
</div>
    
{/block}

{block name=code_head}
<link rel="stylesheet" href="{$asset}/codes/codemirror.css">
<link rel="stylesheet" href="{$asset}/codes/addon/fold/foldgutter.css">
<link rel="stylesheet" href="{$asset}/codes/addon/dialog/dialog.css">
<link rel="stylesheet" href="{$asset}/codes/theme/monokai.css">
<script src="{$asset}/codes/lib/codemirror.js"></script>
<script src="{$asset}/codes/addon/search/searchcursor.js"></script>
<script src="{$asset}/codes/addon/search/search.js"></script>
<script src="{$asset}/codes/addon/dialog/dialog.js"></script>
<script src="{$asset}/codes/addon/edit/matchbrackets.js"></script>
<script src="{$asset}/codes/addon/edit/closebrackets.js"></script>
<script src="{$asset}/codes/addon/comment/comment.js"></script>
<script src="{$asset}/codes/addon/wrap/hardwrap.js"></script>
<script src="{$asset}/codes/addon/fold/foldcode.js"></script>
<script src="{$asset}/codes/addon/fold/brace-fold.js"></script>
<script src="{$asset}/codes/mode/javascript/javascript.js"></script>
<script src="{$asset}/codes/keymap/sublime.js"></script> 
{/block}

{block name=code_foot} 
<script>
{literal}
var value = "// The bindings defined specifically in the Sublime Text mode\nvar bindings = {\n";
var map = CodeMirror.keyMap.sublime;
for (var key in map) {
    var val = map[key];
    if (key != "fallthrough" && val != "..." && (!/find/.test(val) || /findUnder/.test(val)))
    value += "  \"" + key + "\": \"" + val + "\",\n";
}
value += "}\n\n// The implementation of joinLines\n";
value += CodeMirror.commands.joinLines.toString().replace(/^function\s*\(/, "function joinLines(").replace(/\n  /g, "\n") + "\n";
var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    value: value,
    lineNumbers: true,
    mode: "javascript",
    keyMap: "sublime",
    autoCloseBrackets: true,
    matchBrackets: true,
    showCursorWhenSelecting: true,
    theme: "monokai",
    tabSize: 2
});
{/literal}
</script>

{/block}