$("#new_post").submit(function(e){

       e.preventDefault();

       const form_data = new FormData(this);

       form_data.append('new_post', 'true');

        $.ajax({  url:'includes/queries.php',

                  type: "POST",

                  data: form_data,

                  contentType: false,

                  cache: false,

                  processData:false,

                  success: function(data){

                    console.log(data)
                    if (parseInt(data) > 0) {
                      Swall('New Post', 'Successfully Saved The Post', 'success');
                           setTimeout(function() {
                                          location.reload();
                                      }, 3000); // 3000 milliseconds = 3 seconds
                    }else{
                          Swall('Oops Error!', 'Try Again Later', 'warning');
                    }

                  }

               });

      });
$('#thumbnailInput').change(function(e) {
    const file = e.target.files[0]; // Get the selected file
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            // Set the src attribute of the img to the loaded file
            $('#thumbnailPreview').attr('src', event.target.result);
        };
        reader.readAsDataURL(file); // Read the file as a data URL
    }
});

$(document).ready(function() {
    $('#category_filter').on('change', function() {
        var value = $(this).val();
        
        console.log("Category selected: " + value); // Debugging log

        // First remove any previously added hidden fields
        $('.amazing_hidden').remove();

        if (value == "Events" || value == "Trainings") {
            console.log("Adding Event Date and Time inputs"); // Debugging log

            // Add Event Date input
            $('.addhere').prepend(
                '<div class="form-group amazing_hidden"><small>Event Date</small><input type="date" required class="form-control" name="event_date"></div>'
            );
            // Add Event Time input
            $('.addhere').prepend(
                '<div class="form-group amazing_hidden"><small>Event Time</small><input type="time" required class="form-control" name="event_time"></div>'
            );
        }
    });
});


