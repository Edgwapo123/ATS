<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php include 'includes/header.php' ?>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary" style="background-color:#000CFF ;">
    <div class="container">
      <a href="?q=home" class="navbar-brand">
        <img src="images/alumniLogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Alumni Connect</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="?q=home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="?q=events" class="nav-link">Events</a>
          </li>
           <li class="nav-item">
            <a href="?q=jobpost" class="nav-link">Job Post</a>
          </li>
          <li class="nav-item">
            <a href="?q=trainings" class="nav-link">Trainings</a>
          </li>
          <li class="nav-item">
            <a href="?q=donations" class="nav-link">Donations</a>
          </li>
        </ul>

      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="fas fa-comments"></i>-->
        <!--    <span class="badge badge-danger navbar-badge">3</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <a href="#" class="dropdown-item">-->
              <!-- Message Start -->
        <!--      <div class="media">-->
        <!--        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            Brad Diesel-->
        <!--            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">Call me whenever you can...</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
              <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
              <!-- Message Start -->
        <!--      <div class="media">-->
        <!--        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            John Pierce-->
        <!--            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">I got your message bro</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
              <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
              <!-- Message Start -->
        <!--      <div class="media">-->
        <!--        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--        <div class="media-body">-->
        <!--          <h3 class="dropdown-item-title">-->
        <!--            Nora Silvester-->
        <!--            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
        <!--          </h3>-->
        <!--          <p class="text-sm">The subject goes here</p>-->
        <!--          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--        </div>-->
        <!--      </div>-->
              <!-- Message End -->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
        <!--  </div>-->
        <!--</li>-->
        <!-- Notifications Dropdown Menu -->
        <!--<li class="nav-item dropdown">-->
        <!--  <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--    <i class="far fa-bell"></i>-->
        <!--    <span class="badge badge-warning navbar-badge">15</span>-->
        <!--  </a>-->
        <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--    <span class="dropdown-header">15 Notifications</span>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-envelope mr-2"></i> 4 new messages-->
        <!--      <span class="float-right text-muted text-sm">3 mins</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-users mr-2"></i> 8 friend requests-->
        <!--      <span class="float-right text-muted text-sm">12 hours</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item">-->
        <!--      <i class="fas fa-file mr-2"></i> 3 new reports-->
        <!--      <span class="float-right text-muted text-sm">2 days</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-divider"></div>-->
        <!--    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
        <!--  </div>-->
        <!--</li>-->
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title ?></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <?php 
                  if (isset($user_id)) {
                  echo '<li class="breadcrumb-item"><a href="?q=profile">Profile</a></li>';
                   echo '<li class="breadcrumb-item" id="logout"><a href="#">Logout</a></li>';
                  }else{
                    echo '<li class="breadcrumb-item"><a href="?login=letsgoo">Login</a></li>';
                  }
               ?>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
          <?php require_once($content) ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <?php if (isset($user_id)): ?>
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
 <?php endif ?>
  <footer class="main-footer text-center">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline mb-3">
    <h3 class="align-center pl-4" style="text-indent:30px;">ABOUT US</h3>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <img src="images/Picture3.jpg" style="widh:425px;height:300px;object-fit:cover" >
        </div> 
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
             <p style="text-align:justify;font-size:22px">
                 DON RUBEN EDERA ECLEO SR. NATIONAL HIGH SCHOOL as the name implies was established through the effort of the Congressional Representative of District 1, Province of Surigao del Norte, Hon. Glenda B. Ecleo thru Republic Act No. 7734 dated June 3, 1994. DREESMNHS is a public national
high school located at P-3 Barangay Don Ruben in the Municipality of San Jose, Province of Dinagat Islands, Philippines
             </p>
        </div> 
    </div>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023-2024 <a href="#">Alumni Connect</a>.</strong> All rights reserved.
  </footer>
    <div class="modal fade" id="My_modal">
    <div id="modalContent"></div>
  </div>
</div>
<!-- ./wrapper -->
<?php include 'includes/scripts.php' ?>
</body>
</html>
