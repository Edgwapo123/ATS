<div class="row">
  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getActiveAlumni() ?></h3>
        <p>Active Alumni</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getForApprovalAlumni() ?></h3>
        <p>For Approval Alumni</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getTotalPosts('Events') ?></h3>
        <p>Events Posted</p>
      </div>
      <div class="icon">
        <i class="fas fa-calendar"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getTotalPosts('JobPost') ?></h3>
        <p>Job Posting</p>
      </div>
      <div class="icon">
        <i class="fas fa-briefcase"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getTotalPosts('Trainings') ?></h3>
        <p>Training Posting</p>
      </div>
      <div class="icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo getTotalPosts('Donations') ?></h3>
        <p>Donation Posts</p>
      </div>
      <div class="icon">
        <i class="fas fa-hand-holding-usd"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo calculateAverageViews() ?></h3>
        <p>Average Post View</p>
      </div>
      <div class="icon">
        <i class="fas fa-eye"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo calculateAverageLikes() ?></h3>
        <p>Average Post Like</p>
      </div>
      <div class="icon">
        <i class="fas fa-thumbs-up"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 d-flex align-items-stretch">
    <div class="small-box bg-primary w-100 ">
      <div class="inner">
        <h3><?php echo calculateAverageComments() ?></h3>
        <p>Average Post Comment</p>
      </div>
      <div class="icon">
        <i class="fas fa-comment"></i>
      </div>
    </div>
  </div>
</div>



 <div class="row">
 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
 		<div class="card card-primary">
 			<div class="card-header">
 				<h4 class="card-title">
 					Active Events
 				</h4>
 			</div>
 			<div class="card-body">
 				<table class="table example1 w-100">
		 			<thead>
		 				<tr>
              <th><i class="fa fa-calendar"></i></th>
		 					<th>Event</th>
		 					<th><i class="fa fa-users"></i></th>
		 					<th><i class="fa fa-thumbs-up"></i></th>
		 					<th><i class="fa fa-comments"></i></th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<?php 
		 					$gev = $con->query("SELECT * FROM `post` WHERE `post_category`='Events' AND `active_status`=0  AND `post_status`=1");
		 					while ($gevr = $gev->fetch_array()) {
		 				 ?>
		 				 <tr onclick="window.location.href='?q=view_post&post_id=<?php echo $gevr[0] ?>'" style="cursor: pointer;">
              <td><?php echo date("F d, Y", strtotime($gevr['date_event'])) ?></td>
		 				 	<td><?php echo $gevr['post_title'] ?></td>
		 				 	<td><?php echo getAttendies($gevr[0]) ?></td>
		 				 	<td><?php echo getLikeCount($gevr[0]) ?></td>
		 				 	<td><?php echo gettotalComment($gevr[0]) ?></td>
		 				 </tr>
		 				<?php } ?>
		 			</tbody>
		 		</table>
 			</div>
 		</div>
 	</div>
 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
 		<div class="card card-primary">
 			<div class="card-header">
 				<h4 class="card-title">
 					Active Trainings
 				</h4>
 			</div>
 			<div class="card-body">
 				<table class="table example1 w-100">
		 			<thead>
		 				<tr>
              <th><i class="fa fa-calendar"></i></th>
		 					<th>Event</th>
		 					<th><i class="fa fa-users"></i></th>
		 					<th><i class="fa fa-thumbs-up"></i></th>
		 					<th><i class="fa fa-comments"></i></th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 				<?php 
		 					$gev = $con->query("SELECT * FROM `post` WHERE `post_category`='Trainings' AND `active_status`=0  AND `post_status`=1");
		 					while ($gevr = $gev->fetch_array()) {
		 				 ?>
		 				 <tr>
              <td><?php echo date("F d, Y", strtotime($gevr['date_event'])) ?></td>
		 				 	<td><?php echo $gevr['post_title'] ?></td>
		 				 	<td><?php echo getAttendies($gevr[0]) ?></td>
		 				 	<td><?php echo getLikeCount($gevr[0]) ?></td>
		 				 	<td><?php echo gettotalComment($gevr[0]) ?></td>
		 				 </tr>
		 				<?php } ?>
		 			</tbody>
		 		</table>
 			</div>
 		</div>
 	</div>
 </div>