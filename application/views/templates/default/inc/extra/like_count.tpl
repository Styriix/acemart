{* For hom new item section *}
{if $is_login}
<script>
{if $new_items}
{foreach from=$new_items item=$new_item}
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
{* For home new item section end here *}

{* Follower authors section *}
{if $follo_feed}
<script>
{foreach from=$follo_feed item=$new_item}
{literal}
    $(document).ready(() => {
        $('.like{/literal}{$new_item->item_id}{literal}').on('click', () => {
            e.stopPropagation();
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
</script>
{/if}
{* Followr authors section ends here *}

{* Free files section *}
{if $freebies}
<script>
{foreach from=$freebies item=$new_item}
{literal}
    $(document).ready(() => {
        $('.like{/literal}{$new_item->item_id}{literal}').on('click', () => {
            e.stopPropagation();
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
</script>
{/if}
{* Free file section ends here *}

{* Flash sale item section *}
{if $flashes}
<script>
{foreach from=$flashes item=$new_item}
{literal}
    $(document).ready(() => {
        $('.like{/literal}{$new_item->item_id}{literal}').on('click', () => {
            e.stopPropagation();
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
</script>
{/if}
{* Flash slae item ends here *}

{* Item popular start here *}
{if $pops}
<script>
{foreach from=$pops item=$new_item}
{literal}
    $(document).ready(() => {
        $('.like{/literal}{$new_item->item_id}{literal}').on('click', () => {
            e.stopPropagation();
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
</script>
{/if}
{* Item popular ends here *}
{/if}