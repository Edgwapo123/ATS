<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h4 class="card-title">
					Attendees
				</h4>
			</div>
			<div class="card-body">
				<?php 
				$ahak = getAttendie($post_id);
					while ($gar = $ahak->fetch_array()) {
						$namee = getAlumniName($gar['user_id']);
				 ?>
				<div class="user-block mb-3 w-100">
                  <img class="img-circle mr-2" src="uploads/<?php echo $gar['user_img'] ?>" alt="User Image" style="width: 50px !important;height: 50px; object-fit:cover;">
                  <span class="username"><a href="#"><?php echo $namee ?></a></span>
                  <span class="description" style="color:lightgrey;">Alumni</span>
                </div>
            <?php } ?>
			</div>
		</div>
	</div>
	<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
		<?php require_once('page_content/single_post.php'); ?>
	</div>
</div>