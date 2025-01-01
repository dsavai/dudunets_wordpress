jQuery(document).ready(function ($) {
    let page = 2; // Start at page 2 since the first page is already loaded

    $('.load-more-btn').on('click', function (e) {
        e.preventDefault();
        const button = $(this);
        const taxonomy = button.data('taxonomy');
        const term = button.data('term');
        const post_type = button.data('post_type');
        const container = button.data('container');

        $.ajax({
            url: loadMoreParams.ajaxUrl, // AJAX URL
            type: 'POST',
            cache: false,
            data: {
                action: 'load_more_posts_by_taxonomy', // AJAX action
                nonce: loadMoreParams.nonce,
                paged: page, // Current page to load
                taxonomy: taxonomy,
                type: term,
                post_type: post_type,
            },
            beforeSend: function () {
                button.text('Loading...'); // Change button text during loading
            },
            success: function (response) {
                if (response.trim() !== '<p>No more posts to load.</p>') {
                    $(container).append(response); // Append the new posts
                    page++; // Increment the page count
                    button.html(' <span>Load more</span><span><svg class="w-8 h-8 fill-current"><use xlink:href="#icon-menudots"></use></svg></span>'); // Reset button text
                } else {
                    button.text('No More Posts').prop('disabled', true); // Disable button
                }
            },
            error: function () {
                button.text('Error Loading Posts');
            },
        });
    })

    //on installation select change
    $("#installation_chooser").change(function (e){
        e.preventDefault();
        let page = 1;
        var val = $(this).val();
        var selected = $(this).find('option:selected');
        const taxonomy = selected.data('taxonomy');
        const term = selected.data('term');
        const post_type = selected.data('post_type');
        const container = selected.data('container');



        $.ajax({
            url: loadMoreParams.ajaxUrl, // AJAX URL
            type: 'POST',
            cache: false,
            data: {
                action: 'load_more_posts_by_taxonomy', // AJAX action
                nonce: loadMoreParams.nonce,
                paged: page, // Current page to load
                taxonomy: taxonomy,
                type: term,
                post_type: post_type,
            },
            beforeSend: function () {
                //button.text('Loading...'); // Change button text during loading
            },
            success: function (response) {
                if (response.trim() !== '<p>No more posts to load.</p>') {
                    $('.first_posts').hide();
                    $(container).append(response); // Append the new posts
                    page++; // Increment the page count
                    //button.html(' <span>Load more</span><span><svg class="w-8 h-8 fill-current"><use xlink:href="#icon-menudots"></use></svg></span>'); // Reset button text
                    const button = $("#load_more_installations");
                    button.attr('data-taxonomy',taxonomy);
                    button.attr('data-term',term);
                    button.attr('data-post_type',post_type);
                    button.attr('data-container',container);
                    button.html(' <span>Load more</span><span><svg class="w-8 h-8 fill-current"><use xlink:href="#icon-menudots"></use></svg></span>'); // Reset button text
                } else {
                    alert('No More Posts');
                }
            },
            error: function () {
                alert('Error Loading Posts');
            },
        });


    })
});
