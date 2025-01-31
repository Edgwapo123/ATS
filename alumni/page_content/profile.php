<?php 
$up = get_user_info($user_id);
 ?>
 <style type="text/css">
   td{
    padding: 5px;
   }
 </style>
<div class="card bg-light card-primary">
                <div class="card-header border-bottom-0">
                 Your Information
                </div>
                <div class="card-body pt-0 pb-3">
                  <div class="row mt-3">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 text-center">
                      <img src="uploads/<?php echo $up['user_img'] ?>" alt="" class="img-circle img-fluid" style="width: 350px;height: 350px;object-fit: cover;">
                      <h2 class="lead mb-5" style="font-size:30px;">
                        <small style="font-size:20px;">Complete Name: </small><br>
                        <b><?php echo strtoupper($up['fname'].' '.$up['mname'].' '.$up['lname']) ?></b></h2>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
     
                      <table style="width:400px;padding: 10px;">
                        <tr>
                          <th style="width:25%;">GENDER</th>
                          <td>: <?php echo $up['gender'] ?></td>
                        </tr>
                         <tr>
                          <th>BIRTHDATE</th>
                          <td>: <?php echo date("F d, Y", strtotime($up['birthday'])) ?></td>
                        </tr>
                         <tr>
                          <th>CONTACT</th>
                          <td>: <?php echo $up['contact'] ?></td>
                        </tr>
                        <tr>
                          <th>Civil Status</th>
                          <td>: <?php echo $up['mar_status'] ?></td>
                        </tr>
                      </table>
                      <p class="text-sm mt-3"><b>ADDRESS: </b> <?php echo strtoupper($up['address']) ?></p>
                      <hr>
                      <table style="width:400px;padding: 10px;">
                        <tr>
                          <th style="width:25%;">EMPLOYMENT</th>
                          <td colspan="2">: <?php echo $up['current_emp'] ?></td>
                        </tr>
                         <tr>
                          <th>POSITION</th>
                          <td>: <?php echo $up['position_emp'] ?></td>
                        </tr>
                         <tr>
                          <th>YEAR</th>
                          <td>: <?php echo $up['year_len_emp'] ?></td>
                        </tr>
                      </table>
                      <hr>
                      <table style="width:400px;padding: 10px;">
                        <tr>
                          <th colspan="2">HIGHEST EDUCATION</th>
                        </tr>
                        <tr>
                          <td colspan="2"><?php echo $up['high_education'] ?></td>
                        </tr>
                         <tr>
                          <th style="width:25%;">AWARD</th>
                          <td>: <?php echo $up['award_education'] ?></td>
                        </tr>
                         <tr>
                          <th>YEAR</th>
                          <td>: <?php echo $up['year_len_edu'] ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm btn-primary edit_profile" data-user_id="<?php echo $user_id ?>">
                      <i class="fas fa-user"></i> Edit Profile
                    </a>
                  </div>
                </div>
              </div>