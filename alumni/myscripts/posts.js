$(document).ready(function() {
    $('#postsTable').DataTable({
        "processing": true,
        "responsive": true,
        "serverSide": true,
        "ajax": {
            "url": "ajax/server-side.php", // URL to your PHP script
            "type": "POST",
            "data": function(d) {
                // Send category filter along with the request
                d.category_filter = $('#category_filter').val();
            }
        },
        "columns": [
            { "data": "post_date" }, 
            { "data": "post_title" },
            { "data": "post_category" },
            { "data": "post_status" }
        ],
        "rowCallback": function(row, data) {
            // Attach a click event to the row
            $(row).css('cursor', 'pointer');
            $(row).on('click', function() {
                // Change cursor style to pointer
                // Redirect to another page with the post_id as a query parameter
                window.location.href = '?q=edit_post&post_id=' + data.post_id;
            });
        }
    });

    // Redraw DataTable when the category filter changes
    $('#category_filter').on('change', function() {
        $('#postsTable').DataTable().draw();
    });
});
