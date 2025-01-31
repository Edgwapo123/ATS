<div class="card">
	<div class="card-header">
		<h4 class="card-title">
			<button onclick="window.location.href='?q=newpost'" class="btn btn-md btn-secondary"><i class="fa fa-file"></i> New Post</button>
		</h4>
		<div class="card-tools row">
			<div class="form-group col-6">
				<select id="category_filter" class="form-select form-control">
			        <option value="">All Categories</option>
			        <option value="JobPost">JobPost</option>
			        <option value="Events">Events</option>
			        <option value="Trainings">Trainings</option>
			        <option value="Donations">Donations</option>
			    </select>
			</div>
			<div class="form-group col-6">
				<select id="status_post" class="form-select form-control">
			        <option value="">Status</option>
			        <option value="0">Draft</option>
			        <option value="1">Published</option>
			    </select>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table id="postsTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
            </tr>
        </thead>
    </table>
	</div>
</div>