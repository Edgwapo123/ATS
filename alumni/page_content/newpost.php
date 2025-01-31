<form id="new_post">
	<div class="row">
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">
						New Post Information
					</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<h5>Post Title :</h5>
						<input required class="form-control" name="post_title" placeholder="Post Title">
					</div>
					<div class="form-group">
						<style type="text/css">
						.note-editable { 
							    min-height: 50vh; /* Set your desired minimum height here */
							}
							</style>
						<textarea required class="form-control textarea-resize-off" rows="10"  name="post_content"></textarea>
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
				</div>
				<div class="card-body addhere">
					<div class="form-group">
						<small>Category :</small>
						<select required name="post_category" id="category_filter" class="form-select form-control">
					        <option value="" disabled selected>All Categories</option>
					        <option value="JobPost">JobPost</option>
					        <option value="Events">Events</option>
					        <option value="Trainings">Trainings</option>
					        <option value="Donations">Donations</option>
					    </select>
					</div>
					<div class="form-group">
						<small>Post Status :</small>
						<select name="post_status" required id="status_post" class="form-select form-control">
					        <option value="" disabled selected>Select Status</option>
					        <option value="0">Draft</option>
					        <option value="1">Published</option>
					    </select>
					</div>
				    <div class="form-group">
				    	<button class="btn btn-md btn-secondary mt-3" style="width:100%;"><i class="fa fa-save"></i> Save</button>
				    </div>
				</div>
			</div>
			<div class="card">
				    <div class="card-header">
				        <div class="form-group">
				            <small>Thumbnail Image :</small>
				            <input type="file" required name="post_image" class="form-control" id="thumbnailInput">
				        </div>
				    </div>
				    <div class="card-body">
				        <img id="thumbnailPreview" src="images/default.jpg" style="width:50%;">
				    </div>
				</div>

		</div>
	</div>
</form>