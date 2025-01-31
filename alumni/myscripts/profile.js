$('.edit_profile').click(function(){
  Userid = $(this).attr('data-user_id');
  $.ajax({
    url:'modal_content/edit_profile.php',
    type:'GET',
    data:{
      userid:Userid
    },
    dataType:'html'
  }).done(function(data){
   $('#modalContent').html('');
   $('#modalContent').html(data);
   $("#My_modal").modal('show');
   $('#edit_profile').change(function() {
                            $.ajax({
                              url:'ajax/gradeSelectChange.php',
                              type:'POST',
                              data:{grade_id:$(this).val()},
                              dataType:'html'
                            }).done(function(data){
                              $('#sectionhere').html('');
                              $('#sectionhere').html(data);
                            });
                        });
                        $("#edit_profile").submit(function(e){
                              e.preventDefault();
                              const form_data = new FormData(this);
                              form_data.append('edit_profile', 'true');
                              form_data.append('userid', Userid);
                              $.ajax({  
                                url:'includes/queries.php',
                                type: "POST",
                                data: form_data,
                                contentType: false,
                                cache: false,
                                processData:false,
                                success: function(data){
                                  console.log(data)
                                  if (parseInt(data) > 0) {
                                         Swal.fire({
                                            title: 'Successfully Edited Profile!',
                                            text: "Data saved to database",
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 3000
                                         }).then((result) => {
                                          window.location.reload();
                                         });
                                   }else{
                                           Swal.fire({
                                                    title: 'Query Error',
                                                    text: "Failed to add new data!",
                                                    icon: 'warning',
                                                    showConfirmButton: false,
                                                    timer: 3000
                                               })

                                      }

                                }
                        });

                    });
})
});