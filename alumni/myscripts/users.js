$(document).ready(function () {
  let currentPage = 1;
function loadUsers(page = 1, search = '') {
    $.ajax({
        url: 'ajax/users.php',
        type: 'GET',
        data: { page: page, search: search },
        success: function (response) {
            try {
                const data = JSON.parse(response);
                const users = data.users;
                const totalPages = data.total_pages;
                currentPage = data.current_page;

                $('#userCards').html('');
                users.forEach(user => {
                    // Check if user_img is not empty, else use default image
                    const userImg = user.user_img && user.user_img.trim() !== "" ?  'uploads/'+user.user_img : "images/default.jpg";
                    
                    const cardHtml = `
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                          <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                              ${user.position_emp} at ${user.current_emp}
                            </div>
                            <div class="card-body pt-0" style="min-height:120px;">
                              <div class="row">
                                <div class="col-md-9 ">
                                  <h2 class="lead"><b>${user.fname} ${user.lname}</b></h2>
                                  <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"> Phone #: ${user.contact}</li>
                                    <li class="small"> Address: ${user.address}</li>
                                  </ul>
                                </div>
                                <div class="col-3 text-center">
                                  <img src="${userImg}" alt="User Image" style="width:60px;height:60px;object-fit-cover;" class="img-circle img-fluid">
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                              <div class="text-right">
                                <a href="#" class="btn btn-sm bg-danger btn-blockUser" data-user_id=" ${user.user_id}">
                                  <i class="fas fa-thumbs-down"> Block User</i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary user_profile_btn" data-user_id=" ${user.user_id}">
                                  <i class="fas fa-user"></i> View Profile
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>`;
                    $('#userCards').append(cardHtml);
                });

                $('.btn-blockUser').click(function(){
                  User_id = $(this).attr('data-user_id');
                  Swal.fire({
                          title: 'Block This Alumni?',
                          text: 'Are you sure?',
                          icon: 'info',
                          showCancelButton: true,
                          confirmButtonColor: '#399F2E',
                          cancelButtonColor: '#d33',
                          cancelButtonText: "Cancel",
                          confirmButtonText: 'Yes'
                     }).then((result) => {
                         if (result.value == true) {
                             $.ajax({
                                  url:'ajax/block_alumni.php',
                                  type:'GET',
                                  data:{userid:User_id},
                                  dateType:'html'
                                }).done(function(data){
                                  if (data == 1) {
                                    Swall('Alumni Blocked!', 'The Selected Alumni Blocked!', 'success');
                                    setTimeout(function() {
                                              location.reload();
                                          }, 3000); // 3000 milliseconds = 3 seconds

                                  }else{
                                    Swall('Ooops Error!', 'Try Again Later!', 'warning');
                                  }
                              });
                           }     
                        
                      });
                });
                $('.user_profile_btn').click(function() {
              User_id = $(this).attr('data-user_id');
                $.ajax({
                        url: 'modal_content/users_profile.php',
                        type: 'GET',
                        data:{userid:User_id},
                        dataType: 'html',
                    }).done(function(data) {
                        $('#modalContent').html('');
                        $('#modalContent').html(data);
                        $("#My_modal").modal('show');
                        $(".selectGrade").select2();
                        // Attach the onchange event to the element with id 'gradehere'
                        $('#gradehere').change(function() {
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
                        $("#insert_new_userx").submit(function(e){
                              e.preventDefault();
                              const form_data = new FormData(this);
                              form_data.append('insert_new_userx', 'true');
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
                                            title: 'Adding New Section Successful',
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
                });
            });

                // Pagination
                $('#pagination').html('');
                for (let i = 1; i <= totalPages; i++) {
                    $('#pagination').append(`<button class="page-link" data-page="${i}">${i}</button>`);
                }
            } catch (e) {
                console.error("Parsing error:", e, response);
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);
            console.log(xhr.responseText); // Output error details from the server
        }
    });
}



  loadUsers(); // Initial load

  $(document).on('click', '.page-link', function () {
    const page = $(this).data('page');
    const search = $('#searchInput').val();
    loadUsers(page, search);
  });

  $('#searchBtn').on('click', function () {
    const search = $('#searchInput').val();
    loadUsers(1, search);
  });
});