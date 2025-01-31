$(document).ready(function() {
    let offset = 6; // Start after the initial 10 posts
    $('#load-more').click(function() {
        $.ajax({
            url: 'ajax/load_more_events.php', // Your PHP script to load more posts
            method: 'GET',
            data: { offset: offset },
            success: function(response) {
                $('#post-container').append(response);
                offset += 6; // Increase the offset for the next set of posts
            },
            error: function(xhr, status, error) {
                console.log('Error loading posts:', error);
            }
        });
    });
});
 