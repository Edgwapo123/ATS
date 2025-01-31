<!DOCTYPE html>
<html>
<?php include 'includes/header.php'; ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
<?php include 'includes/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="nav-item"><a class="nav-link" id="nav_nav" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
              <li id="logout" class="breadcrumb-item"><a href="#">Logout</a></li>
              <li id="logout" class="breadcrumb-item account_settings" data-user_id="<?php echo $user_id ?>"><a href="#">Account Settings</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php require_once($content) ?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="contact-popup" id="contactPopup">
        <div class="popup-header bg-secondary" onclick="togglePopup()">
            <span><i class="fa fa-chat-message"></i> Chat</span>
            <button class="btn btn-xs btn-secondary float-right"><i class="fas fa-window-minimize"></i>
</button>
        </div>
        <div class="popup-body" id="popupBody">
            <div class="form-group">
                <select onchange="getContacts()" id="getcontactsis" class="select2 form-control">
                    <option value="" selected disabled >Search</option>
                    <?php
                    $sql ="SELECT * FROM `users` WHERE `user_id`!='$user_id'";
                    $query = $con->query($sql);
                    while ($row = $query->fetch_array()) {
                    ?>
                   <option value="<?php echo $row[0] ?>">
                    	<img src="<?php echo (!empty($row['user_img'])) ? 'uploads/'.$row['user_img'] : 'images/default.jpg' ?>" alt="John Doe" class="user-img ">
                    	<span><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'] ?> <br><small><?php echo (!empty($row['batch_year']))? 'Batch '.$row['batch_year']: 'Administrator' ?></small></span>
                    </option>
                    <?php
                    } ?>
                </select>
            </div>
            <ul id="contact_list">

            </ul>
        </div>
    </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="#">Alumni Jam</a>.</strong> All rights
    reserved.
  </footer>
  <div class="modal fade" id="My_modal">
    <div id="modalContent"></div>
  </div>
</div>
<!-- ./wrapper -->

<?php 
include 'includes/scripts.php';
 ?>
<script type="text/javascript"></script>
</body>
</html>
