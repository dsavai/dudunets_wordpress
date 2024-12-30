jQuery(document).ready(function ($) {
    let page = 2; // Start at page 2 since the first page is already loaded

    $('.load-more-btn').on('click', function (e) {
        e.preventDefault();
        const button = $(this);
        const taxonomy = button.data('taxonomy');
        const term = button.data('term');
        const post_type = button.data('post_type');
        const container = button.data('container')

        $.ajax({
            url: loadMoreParams.ajaxUrl, // AJAX URL
            type: 'POST',
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
                    $('#post-container').append(response); // Append the new posts
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
    });
});
