$(document).ready(function() {
    $('#coment_box').on('keypress', function(event) {
        // Check if the Enter key was pressed
        if (event.which === 13) {
            event.preventDefault();
            var comment = $(this).val();
                Post_id = $(this).attr('data-post_id');
                Alumni_id = $(this).attr('data-alumni_id');
            $.ajax({
                url: 'ajax/submit_comment.php', // Replace with your server endpoint
                type: 'POST',
                data: { 
                    comment: comment,
                    post_id: Post_id,
                    alumni_id: Alumni_id
                     },
                success: function(response) {
                    console.log(response);
                                $('#coment_box').val("");
                                 $('.card-comments').prepend(response); // Load the new messages                    
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('Error submitting comment:', error);
                }
            });
        }
    });
});

loadComments();
 setInterval(loadComments, 5000);  // Poll every 5 seconds

$('.mark_attend').click(function(){
    var $this = $(this);  // Cache the clicked button element
    var Liker = $this.attr('data-post_liker');
    var Post_id = $this.attr('data-post_id');
    $.ajax({
        url: 'ajax/mark_attend.php',
        type: 'GET',
        data: {
            liker: Liker,
            post_id: Post_id
        },
        dataType: 'html'
    }).done(function(data){
        console.log(data);
        window.location.reload();
    });
});