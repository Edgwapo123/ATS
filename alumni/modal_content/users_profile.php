<?php include '../dbcon.php'; 
$row = get_alumni_information($userid);
$age = date("Y-m-d") - $row['birthday'];
?>
<div class="modal-dialog modal-lg">
<div class="modal-body">
  <style type="text/css">
    .widget-user-2 .widget-user-image>img {
    float: left;
    height: 150px;
    width: 150px;
}
  </style>
      <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-secondary">
                <div class="widget-user-image mr-5" style="width: 100px;">
                  <img class="img-circle elevation-2 mr-4" src="<?php echo (!empty($row['user_img'])) ? 'uploads/'.$row['user_img'] : 'images/default.jpg' ?>" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'] ?></h3>
                <h5 class="widget-user-desc"><small><b>Address:</b> <?php echo $row['address'] ?> <br><b>Sex:</b> <?php echo $row['gender'] ?> &nbsp <b>Age:</b> <?php echo $age ?> &nbsp <b>Birthday:</b> <?php echo date('F d, Y' , strtotime($row['birthday'])) ?>
                  <br><b>Contact:</b> <?php echo $row['contact'] ?>
                </small></h5>
              </div>
              <div class="card-footer p-0">
                <div class="card mb-0">
                  <div class="card-header">
                    <h4 class="card-title">
                     Employment Information
                    </h4>
                  </div>
                  <div class="card-body">
                     <h5 class="widget-user-desc ml-0"><small><b>Company:</b> <?php echo $row['current_emp'] ?>
                      <br><b>Position / Job Description:</b> <?php echo $row['position_emp'] ?>
                      <br><b>Duration:</b> <?php echo $row['year_len_emp'] ?>
                     </small></h5>
                  </div>
                </div>

                <div class="card mb-0">
                  <div class="card-header">
                    <h4 class="card-title">
                     Highest Educational Attainment
                    </h4>
                  </div>
                  <div class="card-body">
                     <h5 class="widget-user-desc ml-0"><small><b>Degree/Level:</b> <?php echo $row['high_education'] ?>
                      <br><b>Year:</b> <?php echo $row['year_len_edu'] ?>
                      <br><b>Award <span class="text-muted">(optional)</span>:</b> <?php echo $row['award_education'] ?>
                     </small></h5>
                  </div>
                </div>
              </div>
            </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->