{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Create New Page</h3>
    </div>
    <div class="grid-body">
        <form action="{$url.admin}/create_new_page" method="post" class="validate">
            {$csrf_token}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_name">Page Name</label>
                        <input id="page_name" class="form-control" type="text" name="page_name" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_contents">Page Contents (Only Html tags)</label>
                        <textarea id="code" class="form-control" name="page_contents" rows="3" required></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Create New Page</button>
                </div>
            </div>
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