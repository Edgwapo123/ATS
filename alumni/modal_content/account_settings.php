<?php 
include '../dbcon.php';
$sql  ="SELECT * FROM `users` WHERE `user_id`='$userid'";
$query = $con->query($sql);
$row = $query->fetch_array();
 ?>
<div class="modal-dialog modal-lg">
  <div class="modal-content bg-secondary">
    <div class="modal-header bg-dark">
      <h4 class="modal-title">Account Settings</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    <form id="account_settings" data-user_id="<?php echo $userid ?>">
      <div class="modal-body bg-white">
        <div class="form-group">
        <small>First Name:</small>
        <input type="text" name="fname" class="form-control" value="<?php echo $row['fname'] ?>">
      </div>
      <div class="form-group">
        <small>Middle Name:</small>
        <input type="text" name="mname" class="form-control" value="<?php echo $row['mname'] ?>">
      </div>
      <div class="form-group">
        <small>Last Name:</small>
        <input type="text" name="lname" class="form-control" value="<?php echo $row['lname'] ?>">
      </div>
      <hr>
      <div class="form-group">
        <small>Email Address:</small>
        <input type="email" name="user_email" class="form-control" value="<?php echo $row['user_email'] ?>">
      </div>
      <div class="form-group">
        <small style="color:white;">Password:</small>
        <div style="position: relative;">
            <input type="password" id="p1" name="password" class="form-control" required value="<?php echo $row['password'] ?>">
            <i id="togglePassword1" class="fa fa-eye" style="position: absolute; top: 50%; right: 10px; cursor: pointer; transform: translateY(-50%);"></i>
        </div>
    </div>
    </div>
    <div class="modal-footer bg-dark d-flex">
      <button class="btn btn-primary btn-md"><i class="fa fa-edit"></i> Update Account</button>
    </div>
    </form>
  </div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->