<?php 
include '../dbcon.php';
$us = get_user_info($userid);
 ?>
<div class="modal-dialog modal-xl">
  <div class="modal-content bg-primary">
    <div class="modal-header bg-primary">
      <h4 class="modal-title">Edit Profile</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    <form id="edit_profile" data-user_id="<?php echo $userid ?>">
      <div class="modal-body">
        <div class="row" style="color:gray">
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                     <h5 style="color:white">Personal Information</h5>
                    <div class="form-group">
                        <small style="color:white;">Given Name:</small>
                        <input type="text" name="gname" class="form-control" required value="<?php echo $us['fname'] ?>">
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Middle Name:</small>
                        <input type="text" name="mname" class="form-control" value="<?php echo $us['mname'] ?>" >
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Last Name:</small>
                        <input type="text" name="lname" class="form-control" required value="<?php echo $us['lname'] ?>">
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Contact:</small>
                        <input type="text" name="contact" class="form-control" required value="<?php echo $us['contact'] ?>">
                    </div>
                    <div class="form-group">
                        <small style="color:white;">Home Address:</small>
                        <input type="text" name="address" class="form-control" required value="<?php echo $us['address'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Gender:</small>
                                <select name="gender" class="form-control" required>
                                    <option selected disabled value="">Select Gender</option>
                                    <option <?php echo ($us['gender']=='Male')? 'selected' : '' ?> value="Male">Male</option>
                                    <option <?php echo ($us['gender']=='Female')? 'selected' : '' ?> value="Female">Females</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Birthdate:</small>
                                <input type="date" name="bdate" class="form-control" required value="<?php echo $us['birthday'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Batch Year:</small>
                                <select class="select2 form-control" name="batchyear">
                                  <option selected disabled value="">Select Batch Year</option>
                                  <?php 
                                      for ($i=date('Y'); $i > '1990' ; $i--) { 
                                        $ii = $i -1;
                                        $data = $i.'-'.$ii;
                                   ?>
                                   <option <?php echo ($data == $us['batch_year'])? 'selected' :'' ?> value="<?php echo $i.'-'.$ii ?>"><?php echo $i.'-'.$ii ?></option>
                                   <?php 
                                      }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <small style="color:white;">Profile Picture:</small>
                      <input type="file" name="profile_picture" class="form-control">
                    </div>
                    <div class="form-group">
                      <small style="color:white;">Civil Status:</small>
                      <select name="mar_status" class-"form-control" style="padding:5px;border-radius:10px;width:100%;">
                          <option value="" selected disabled>Select Civil Status</option>
                          <option <?php echo ($us['mar_status'] == 'Single')? 'selected' : '' ?> value="Single" >Single</option>
                          <option <?php echo ($us['mar_status'] == 'Married')? 'selected' : '' ?> value="Married" >Married</option>
                          <option <?php echo ($us['mar_status'] == 'Widower')? 'selected' : '' ?> value="Widow" >Widow</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <h5 style="color:white;">Highest Educational Attainment</h5>
                    <div class="form-group">
                        <small style="color:white;">Degree/Course:</small>
                        <input type="text" name="hea" class="form-control" required value="<?php echo $us['high_education'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Year:</small>
                                <input type="text" name="hea_year" class="form-control" required value="<?php echo $us['year_len_edu'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Award:</small>
                                <input type="text" name="hea_award" class="form-control" value="<?php echo $us['award_education'] ?>">
                            </div>
                        </div>
                    </div>
                    <h5 style="color:white">Employment Information</h5>
                    <div class="form-group">
                        <small style="color:white;">Company/Agency:</small>
                        <input type="text" name="emp_company" class="form-control" value="<?php echo $us['current_emp'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Position:</small>
                                <input type="text" name="emp_position" class="form-control" value="<?php echo $us['position_emp'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Employment Lenght:</small>
                                <input type="text" name="emp_year" class="form-control" value="<?php echo $us['year_len_emp'] ?>">
                            </div>  
                        </div>
                    </div>
                    <h5 style="color:white">Login Credential</h5>
                    <div class="row">
                         <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small style="color:white;">Email Address:</small>
                                <input type="text" name="user_email" class="form-control" required value="<?php echo $us['user_email'] ?>">
                            </div>
                            <div class="form-group">
                                <small style="color:white;">Password: <span style="color:white;">( If you wish to change fill this / Ignore if you dont want to change password)</span></small>
                                <input type="password" id="p1" name="password" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <small style="color:white;">Re-Password:</small>
                                <input type="password" id="p2" name="repassword" class="form-control" autocomplete="off">
                            </div>
                         </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal-footer bg-primary d-flex">
      <button class="btn btn-md btn-success"><i class="fa fa-edit"></i> Edit Profile</button>
    </div>
    </form>
  </div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->