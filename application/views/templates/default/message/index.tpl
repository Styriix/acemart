{extends file="layouts/message.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Messaging</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->


<div class="container">
<hr>
<h4 class=" text-center">Messaging</h4>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            
          </div>
          <div class="inbox_chat">

            <span id="get_convos"></span>
            
            
            
            
            
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="chatHistory">

            {if $msg_to}
            {if $messages}
            {foreach from=$messages item=$msg}
            {if $msg->msg_from_id != $sender->user_id}
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="{if $msg->msg_from_id == $uid}{$u_photo}{$msg->user_avater}{else}{$u_photo}{$msg->alt_user->user_avater}{/if}" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p style="min-height:60px">{auto_link($msg->msg_body)}</p>
                  <span class="time_date"> {Carbon\Carbon::parse($msg->msg_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span></div>
              </div>
            </div>
            {else}
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p style="min-height:60px">{auto_link($msg->msg_body)}</p>
                <span class="time_date"> {Carbon\Carbon::parse($msg->msg_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])}</span> </div>
            </div>
            {/if}
            {/foreach}
            {/if}
            {/if}

            
          </div>
          {if $msg_to}
          <div class="type_msg">
            <form method="post" action="{$url.main}send_msg/{$msg_to->user_id}" autocomplete="off">
              {$csrf_token}
              <div class="input_msg_write">
                <input type="text" class="write_msg" name="message" placeholder="Type a message" required/>
                <button class="msg_send_btn" type="submit" name="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>
            </form>
          </div>
          {/if}


        </div>
      </div>
      
      
    </div></div>

{/block}

{block name=message_script}
<script>
{literal}
  var msgBody = document.getElementById("chatHistory");
  msgBody.scrollTop = msgBody.scrollHeight;

  $(document).ready(function() {

    function loadConvos() {
        $.get("{/literal}{$url.main}/profile/load_convos{if $url_2}/{$url_2}{/if}{literal}", function(data) {
            $('#get_convos').html(data);
            });
    }
    setInterval(function(){
        loadConvos();
    },500);

  });
{/literal}
</script>
{/block}