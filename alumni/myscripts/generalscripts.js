  $('#logout').click(function(){
    Swal.fire({
        title: "Logout Now?",
        text: "Are you sure?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#399F2E',
        cancelButtonColor: '#d33',
        cancelButtonText: "Stay",
        confirmButtonText: 'Logout'
   }).then((result) => {
    if (result.value == true) {
          $.ajax({
              url:'includes/queries.php',
              type: "POST",
              data:{logoutnow:'true'},
              dataType:'html'
          }).done(function(){
            window.location.href="?w=true";
          });
    }
    });
})
$(function () {

    $('#example1').DataTable({
        "responsive": true,
        "autowidth": false,
        "searching": false,
        "lengthChange": true,
        "paging":true,
        "info": false,

    });
    $('.example1').DataTable({
        "responsive": true,
        "autowidth": false,
        "searching": true,
        "lengthChange": false,
        "paging":true,
        "info": true,

    });
    $('#example3').DataTable({
        "responsive": true,
        "autowidth": false,
        "searching": false,
        "lengthChange": false,
        "info": false,
    }); 
    $('#example2').DataTable({
        "paging": true,
        "lengthChange":true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autowidth": true,
        "responsive": false,
    });
    $('#example4').DataTable({
        "paging": true,
        "lengthChange":true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autowidth": true,
        "responsive": false,
    });
     $('.textarea').summernote({
                toolbar: [
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                    ['font', ['fontname', 'fontsize', 'color', 'forecolor', 'backcolor']],
                    ['para', ['ul', 'ol', 'paragraph', 'height', 'align']],
                    ['insert', ['link','table', 'hr','picture']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['misc', ['undo', 'redo']]
                ]
            });

    $('.select2').select2();
  });
$(document).ready(function() {
    $('.textarea-resize-off').summernote({
        height: 200,
        disableResizeEditor: false,
        toolbar: [
            ['style', ['style', 'bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
            ['font', ['fontname', 'fontsize', 'color', 'forecolor', 'backcolor']],
            ['para', ['ul', 'ol', 'paragraph', 'height', 'align']],
            ['insert', ['link', 'table', 'hr']],
            ['view', ['fullscreen', 'codeview', 'help']],
            ['misc', ['undo', 'redo']]
        ],
        callbacks: {
            onImageUpload: function(files) {
                uploadFile(files[0], 'image'); // Upload the image file
            },
            onMediaDelete: function(target) {
                deleteFile(target[0].src, 'image'); // Function to handle media deletion
            },
            onVideoUpload: function(files) {
                uploadFile(files[0], 'video'); // Handle video upload if needed
            }
        }
    });
});

function uploadFile(file, type) {
    var data = new FormData();
    data.append('type', type);

    // Check if the file is an image
    if (type === 'image' && file.type.match('image.*')) {
        var reader = new FileReader();

        // Resize the image using canvas
        reader.onload = function(event) {
            var img = new Image();
            img.onload = function() {
                var canvas = document.createElement('canvas');
                var maxWidth = 800; // Adjust as needed
                var maxHeight = 600; // Adjust as needed
                var width = img.width;
                var height = img.height;

                // Calculate new dimensions to maintain aspect ratio
                if (width > height) {
                    if (width > maxWidth) {
                        height *= maxWidth / width;
                        width = maxWidth;
                    }
                } else {
                    if (height > maxHeight) {
                        width *= maxHeight / height;
                        height = maxHeight;
                    }
                }

                canvas.width = width;
                canvas.height = height;

                var ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0, width, height);

                // Convert canvas to Blob and append to FormData
                canvas.toBlob(function(blob) {
                    data.append('file', blob, file.name);
                    // Send resized image data via AJAX
                    sendAjaxRequest(data);
                }, file.type);
            };
            img.src = event.target.result; // Set the source for image load
        };

        reader.readAsDataURL(file); // Read the image file as a data URL
    } else {
        // For non-image files, simply append to FormData
        data.append('file', file);
        sendAjaxRequest(data);
    }
}

function sendAjaxRequest(data) {
    $.ajax({
        url: 'ajax/summernote_upload.php',
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
        success: function(response) {
            console.log('Raw server response:', response); // Log the raw response

            // Ensure response is handled as an object directly
            if (response.location) {
                var fullPath = response.location; // Already in the correct format
                console.log('Full path:', fullPath);

                if (response.type === 'image') {
                    // Use the insertImage method of Summernote to insert the uploaded image
                    $('.textarea-resize-off').summernote('insertImage', fullPath);
                }
            } else {
                console.error('Upload failed:', response.error);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Upload error:', textStatus, errorThrown);
        }
    });
}

function uploadFile1(file, type) {
    var data = new FormData();
    data.append('type', type);

    // Check if the file is an image
    if (type === 'image' && file.type.match('image.*')) {
        var reader = new FileReader();

        // Resize the image using canvas
        reader.onload = function(event) {
            var img = new Image();
            img.onload = function() {
                var canvas = document.createElement('canvas');
                var maxWidth = 800; // Adjust as needed
                var maxHeight = 600; // Adjust as needed
                var width = img.width;
                var height = img.height;

                // Calculate new dimensions to maintain aspect ratio
                if (width > height) {
                    if (width > maxWidth) {
                        height *= maxWidth / width;
                        width = maxWidth;
                    }
                } else {
                    if (height > maxHeight) {
                        width *= maxHeight / height;
                        height = maxHeight;
                    }
                }

                canvas.width = width;
                canvas.height = height;

                var ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0, width, height);

                // Convert canvas to Blob and append to FormData
                canvas.toBlob(function(blob) {
                    data.append('file', blob, file.name);
                    // Send resized image data via AJAX
                    sendAjaxRequest1(data);
                }, file.type);
            };
            img.src = event.target.result; // Set the source for image load
        };

        reader.readAsDataURL(file); // Read the image file as a data URL
    } else {
        // For non-image files, simply append to FormData
        data.append('file', file);
        sendAjaxRequest1(data);
    }
}

function sendAjaxRequest1(data) {
    $.ajax({
        url: 'ajax/summernote_upload.php',
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
        success: function(response) {
            console.log('Raw server response:', response); // Log the raw response

            // Ensure response is handled as an object directly
            if (response.location) {
                var fullPath = response.location; // Already in the correct format
                console.log('Full path:', fullPath);

                if (response.type === 'image') {
                    // Use the insertImage method of Summernote to insert the uploaded image
                    $('.textarea-resize-chat').summernote('insertImage', fullPath);
                }
            } else {
                console.error('Upload failed:', response.error);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Upload error:', textStatus, errorThrown);
        }
    });
}

function swallconfirmation(Title,Text,Icon,Btn_txt,reload){
    Swal.fire({
                      title: Title,
                      text: Text,
                      icon: Icon,
                      showCancelButton: true,
                      confirmButtonColor: '#399F2E',
                      cancelButtonColor: '#d33',
                      cancelButtonText: "Cancel",
                      confirmButtonText: Btn_txt
                 }).then((result) => {
                    if(reload == 1){
                        window.location.reload();
                    }
                  });
}
function Swall(Title, Text, Icon){
    Swal.fire({
        title: Title,
        text: Text,
        icon: Icon,
        showConfirmButton: false,
        timer: 3000
   })
}
function openPopup() {
    document.getElementById('contactPopup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('contactPopup').style.display = 'none';
}

function togglePopup() {
    const popupBody = document.getElementById('popupBody');
    popupBody.style.display = popupBody.style.display === 'none' ? 'block' : 'none';
}

function getContacts() {
   searchval = $('#getcontactsis').val();
    $.ajax({
        url:'ajax/getContacts.php',
        type:'GET',
        data:{
            search:searchval
        },
        dataType:'html'
    }).done(function(data){
        $('#contact_list').html("");
        $('#contact_list').html(data);

        $('.getChatDM').click(function() {
                chatMDM = $(this).attr('data-chat_mate');
                $.ajax({
                    url:'modal_content/chatDM.php',
                    type:'GET',
                    data:{chatmate:chatMDM},
                    dataType:'html'
                }).done(function(data){
                    $('#modalContent').html('');
                    $('#modalContent').html(data);
                    $("#My_modal").modal('show');
                   setTimeout(function() {
        $('.direct-chat-messages').scrollTop($('.direct-chat-messages')[0].scrollHeight);
    }, 500);
                    $('.textarea-resize-chat').summernote({
                            height: 150,
                            disableResizeEditor: false,
                            toolbar: [
                                ['font', ['fontname', 'fontsize', 'color', 'forecolor', 'backcolor']],
                                ['insert', ['link', 'picture', 'table', 'hr']],
                                ['misc', ['undo', 'redo']]
                            ],
                            callbacks: {
                                onImageUpload: function(files) {
                                    uploadFile1(files[0], 'image'); // Upload the image file
                                },
                                onMediaDelete: function(target) {
                                    deleteFile(target[0].src, 'image'); // Function to handle media deletion
                                },
                                onVideoUpload: function(files) {
                                    uploadFile(files[0], 'video'); // Handle video upload if needed
                                }
                            }
                        });
                    function getChatmateMessages() {
                        $.ajax({
                            url: 'ajax/getMessages.php', // URL for fetching messages
                            type: 'GET',
                            data: { chatmate: chatMDM }, // Pass the chatmate ID
                            dataType: 'html',
                            success: function(response) {
                                splited = response.split("||");
                                $('.direct-chat-messages').append(splited[0]); // Load the new messages
                                if (splited[1] > 0) {
                                    $('.direct-chat-messages').scrollTop($('.direct-chat-messages')[0].scrollHeight);
                                }
                            }
                        });
                    } 

                    // Call the function immediately to load the messages and set it to run every 5 seconds to get new messages
                    getChatmateMessages();
                    setInterval(getChatmateMessages, 2500); // Pass the function reference

                    $("#send_message").submit(function(e){
                        e.preventDefault();
                        const form_data = new FormData(this);
                        form_data.append('send_message', 'true');
                        form_data.append('receiver', $(this).attr('data_chatm'));
                        $.ajax({  
                            url:'includes/queries.php',
                            type: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData:false,
                            success: function(data){
                                $('.direct-chat-messages').append(data);
                                // Scroll to the bottom of the chat after appending the new message
                                $('.direct-chat-messages').scrollTop($('.direct-chat-messages')[0].scrollHeight);
                                $('.note-editable').html("");
                            }
                        });
                    });
                    
                });
            });
    });
}


$(document).ready(function(){
    getContacts();
});

function loadComments(){
   Post_id = $('.card-comments').attr('data-post_id');
    $.ajax({
        url: 'ajax/fetch_comments.php',
        type:'GET',
        data:{
            post_id:Post_id
        },
        dataType:'html'
    }).done(function(data){
        $('.card-comments').html(data);
    })
}

$('.post_like').click(function(){
    var $this = $(this);  // Cache the clicked button element
    var Liker = $this.attr('data-post_liker');
    var Post_id = $this.attr('data-post_id');
    $.ajax({
        url: 'ajax/post_like.php',
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

$('.open_post').click(function(){
    Post_id = $(this).attr('data-post_id');
    window.location.href ='?q=single_post&post_id=' + Post_id;
});

$('.account_settings').click(function(){
Userid = $(this).attr('data-user_id');
  $.ajax({
    url:'modal_content/account_settings.php',
    type:'GET',
    data:{
      userid:Userid
    },
    dataType:'html'
  }).done(function(data){
   $('#modalContent').html('');
   $('#modalContent').html(data);
   $("#My_modal").modal('show');

   document.getElementById('togglePassword1').addEventListener('click', function () {
        var passwordInput = document.getElementById('p1');
        var icon = this;
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
$("#account_settings").submit(function(e){
   e.preventDefault();
   const form_data = new FormData(this);
   form_data.append('account_settings', 'true');
   form_data.append('userid', Userid);
    $.ajax({  url:'includes/queries.php',
              type: "POST",
              data: form_data,
              contentType: false,
              cache: false,
              processData:false,
              success: function(data){
                console.log(data)
                if (parseInt(data) > 0) {
                  Swall('Updated Account Settings', 'Successfully Saved', 'success');
                       setTimeout(function() {
                                      location.reload();
                                  }, 3000); // 3000 milliseconds = 3 seconds
                }else{
                      Swall('Oops Error!', 'Try Again Later', 'warning');
                }
              }
           });

  });


});
});