{if $convers}
    {foreach from=$convers item=$convo}
    <a href="{$url.main}message/{if $convo->msg_to_id != $uid}{$convo->user_username}{else}{$convo->alt_user->user_username}{/if}" style="cursor:pointer">
    {if $convo->msg_to_id != $uid}
    <div class="chat_list{if $url_3 eq $convo->user_username} active_chat{/if}">
    {else}
    <div class="chat_list{if $url_3 eq $convo->alt_user->user_username} active_chat{/if}">
    {/if}
        <div class="chat_people">
        {if $convo->msg_to_id != $uid}
            <div class="chat_img"> <img src="{$u_photo}{$convo->user_avater}" alt="{$convo->user_username}"> </div>
        {else}
            <div class="chat_img"> <img src="{$u_photo}{$convo->alt_user->user_avater}" alt="{$convo->user_username}"> </div>
        {/if}
        <div class="chat_ib">
            <h5>{if $convo->msg_to_id != $uid}{$convo->user_firstname} {$convo->user_lastname}{else}{$convo->alt_user->user_firstname} {$convo->alt_user->user_lastname}{/if} {if $convo->msg_unread}<b class="badge badge-success">{$convo->msg_unread}</b>{/if} <span class="chat_date">{Carbon\Carbon::parse($convo->msg_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span></h5>
            <p>{$convo->msg_body|truncate:50}</p>
        </div>
        </div>
    </div>
    </a>
    {/foreach}
{/if}