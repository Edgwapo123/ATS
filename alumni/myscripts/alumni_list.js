$(document).ready(function() {
    // Initialize DataTables with server-side processing
    var table = $('#alumni-table').DataTable({
        "processing": true,
        "serverSide": true,
        "lengthChange":true,
        "responsive":true,
        "ajax": {
            "url": "ajax/alumni_list.php", // Replace with the actual PHP script URL
            "type": "GET",
            "data": function(d) {
                d.batch_year = $('#batch-filter').val(); // Add batch filter to request
            }
        },
        "columns": [
            { "data": "batch_year" },
            { "data": "fname" },
            { "data": "mname" },
            { "data": "lname" },
            { "data": "contact" },
            { "data": "address" },
            { "data": "gender" },
            { "data": "mar_status" },
            { "data": "current_emp" }
        ],
        "dom": 'Bfrtip', // Add buttons to DataTables
        "buttons": [
            'excelHtml5' // Enable Excel export
        ]
    });

    // Handle batch filter change event
    $('#batch-filter').change(function() {
        table.ajax.reload(); // Reload DataTables with the new filter
    });
});