<?php 
	$gp =getPostContent($post_id);

 ?>
<form id="edit_post" data-post_id="<?php echo $post_id ?>">
	<div class="row">
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">
						Edit Post Information
					</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<h5>Post Title :</h5>
						<input required class="form-control" name="post_title" placeholder="Post Title" value="<?php echo $gp['post_title'] ?>">
					</div>
					<div class="form-group">
						<style type="text/css">
						.note-editable {
							    min-height: 50vh; /* Set your desired minimum height here */
							}
							</style>
						<textarea required class="form-control textarea-resize-off" rows="10"  name="post_content"><?php echo $gp['post_content'] ?></textarea>
					</div>
				</div>
			</div>
		</div> 
		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">
						&nbsp
					</h4>
					<div class="card-tools">
						<button type="button" data-post_id="<?php echo $post_id ?>" class="btn btn-danger btn-sm delete_post"><i class="fa fa-trash"></i> Delete Post</button>
					</div>
				</div>
				<div class="card-body addhere">
					<?php if ($gp['post_category'] == "Events" || $gp['post_category'] == "Trainings"): ?>
						<div class="form-group amazing_hidden">
						    <small>Event Date</small>
						    <input type="date" required class="form-control" name="event_date" value="<?php echo date('Y-m-d', strtotime($gp['date_event'])); ?>">
						</div>
						<div class="form-group amazing_hidden">
						    <small>Event Time</small>
						    <input type="time" required class="form-control" name="event_time" value="<?php echo date('H:i', strtotime($gp['date_event'])); ?>">
						</div>

					<?php endif ?>
					<div class="form-group">
						<small>Category :</small>
						<select required name="post_category" id="category_filter" class="form-select form-control">
					        <option value="" disabled selected>All Categories</option>
					        <option <?php echo ($gp['post_category'] == 'JobPost') ? 'selected' : '' ?> value="JobPost">JobPost</option>
					        <option <?php echo ($gp['post_category'] == 'Events') ? 'selected' : '' ?> value="Events">Events</option>
					        <option <?php echo ($gp['post_category'] == 'Trainings') ? 'selected' : '' ?> value="Trainings">Trainings</option>
					        <option <?php echo ($gp['post_category'] == 'Donations') ? 'selected' : '' ?> value="Donations">Donations</option>
					    </select>
					</div>
					<div class="form-group">
						<small>Post Status :</small>
						<select name="post_status" required id="status_post" class="form-select form-control">
					        <option value="" disabled selected>Select Status</option>
					        <option <?php echo ($gp['post_status'] == '0') ? 'selected' : '' ?> value="0">Draft</option>
					        <option <?php echo ($gp['post_status'] == '1') ? 'selected' : '' ?> value="1">Published</option>
					    </select>
					</div>
				    <div class="form-group">
				    	<button class="btn btn-md btn-secondary mt-3" style="width:100%;"><i class="fa fa-save"></i> Update Post</button>
				    </div>
				</div>
			</div>
			<div class="card">
				    <div class="card-header">
				        <div class="form-group">
				            <small>Thumbnail Image :</small>
				            <input type="file" name="post_image" class="form-control" id="thumbnailInput">
				        </div>
				    </div>
				    <div class="card-body">
				        <img id="thumbnailPreview" src="uploads/<?php echo $gp['post_img'] ?>" style="width:50%;">
				    </div>
				</div>

		</div>
	</div>
</form>