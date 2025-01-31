<head>
	<title>Monitoring System</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="icon" href="path_to_your_favicon.ico" type="images/AlumniLogo.jpg">

    <!-- Ionicons -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="icon" href="images/alumniLogo.jpg" type="image/png">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap4.min.css">



   <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <!-- Slick JS -->





  <link rel="stylesheet" href="plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar-bootstrap/main.min.css">
  <!-- <link rel="stylesheet" href="mycss/style.css"> -->
<style type="text/css">
  .nav-sidebar .nav-item>.nav-link {
    position: relative;
    color: white;
    FONT-WEIGHT: 600;
}
.table thead th, .table tbody td{
  font-size:14px;
}
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 37px;
    user-select: none;
    -webkit-user-select: none;
}

.chatmesCont .note-editor {
  height: 180px;
}

.contact-popup {
    position: fixed;
    bottom: 0px;
    right: 0px;
    width: 400px;
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: block;
    flex-direction: column;
    z-index: 1000;
}

.popup-header {
    background-color: #3b5998;
    color: white;
    padding: 10px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-body {
    padding: 10px;
    height: 350px;
    overflow-y: auto;
    display: none;
}

.popup-body ul {
    list-style: none;
    padding: 0;
}

.popup-body li {
    padding: 8px;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.popup-body li:hover {
    background-color: #f1f1f1;
}

.open-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #3b5998;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
    padding: 0;
}

.close-btn:hover {
    color: #ccc;
}

.user-img {
    border-radius: 50%;
    margin-right: 10px;
    width: 40px;
    height: 40px;
     border:solid grey 4px;
}
.user-active{
  border:solid lightgreen 4px;
}
.user_status-is{
width: 10px;
height: 10px;
background: grey;
border-radius: 50%;
}
#nav_nav{
    padding-top:1px;
}
#send_message .direct-chat-messages .direct-chat-text img{
    width: 100% !important;
    border-radius: 20px;
    border: solid white 2px;
}
@media (max-width:425px){
.contact-popup {
    position: fixed;
    bottom: 0px;
    right: 0px;
    width: 90%;
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: block;
    flex-direction: column;
    z-index: 1000;
}
#send_message .modal-footer{
    padding: 20px 0px;
}
#send_message .direct-chat-messages .direct-chat-text img{
    width: 100% !important;
}
#send_message .direct-chat-msg{
    margin: 20px 0px;
}
#send_message .direct-chat-messages{
    padding: 0px;
}
#send_message .modal-body{
    padding: 20px 2px;
}
}
</style>
</head>