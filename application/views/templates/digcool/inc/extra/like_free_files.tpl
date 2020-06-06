{if $is_login}
<script>
{if $freebies}
{foreach from=$freebies item=$new_item}
{literal}
    $(document).ready(() => {
        $('.like{/literal}{$new_item->item_id}{literal}').on('click', () => {
            $.ajax({
                url: '{/literal}{$url.main}main/like_item/{$new_item->item_id}/{$usr.myid}{literal}',
                success: function(data) {
                    var data = JSON.parse(data);
                    if(data.status == 'liked') {
                        $('.like{/literal}{$new_item->item_id}{literal}').addClass('text-primary');
                    } else if(data.status == 'disliked') {
                        $('.like{/literal}{$new_item->item_id}{literal}').removeClass('text-primary');
                    }
                    
                    $('.item_id_{/literal}{$new_item->item_id}{literal}').text("("+data.likes+")");
                }
            });
            $('.like{/literal}{$new_item->item_id}{literal}').on('click', (e) => {
                e.stopPropagation();
            });
        });
    });
{/literal}
{/foreach}
{/if}
</script>
{/if}