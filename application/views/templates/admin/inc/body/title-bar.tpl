<ul class="breadcrumb">
    <li>
        <p><h4>{$url_2|ucfirst|replace:'-':' '}</h4></p>
    </li>
    {if $url_3}
        <li><a class="{if not $url_4}active{/if}" href="javascript:void(0);">{$url_3|ucfirst|replace:'-':' '}</a></li>
    {/if}

    {if $url_4}
        <li><a class="{if not $url_5}active{/if}" href="javascript:void(0);">{$url_4|ucfirst|replace:'-':' '}</a></li>
    {/if}
</ul>
{if $v.check}
    <div class="alert alert-info" align="center">
        New AceMart version <strong>{$v.version}</strong> is now Available.
    </div>
{/if}
<br>