<div class="card">
	<div class="card-header">
		<h4 class="card-title">ALUMNI TABLE</h4>
		<div class="float-right">
			<!-- Batch filter dropdown -->
			<select id="batch-filter" class="form-control">
				<option selected value="" disabled>Select Batch Year</option>
				<?php 
	              for ($i=date('Y'); $i > '1960' ; $i--) { 
	                $ii = $i -1;
	           ?>
	           <option value="<?php echo $i.'-'.$ii ?>"><?php echo $i.'-'.$ii ?></option>
	           <?php 
	              }
	            ?>
				<!-- Add more options as needed -->
			</select>
		</div>
	</div>
	<div class="card-body">
		<table id="alumni-table" class="table table-bordered w-100">
			<thead>
				<tr>
					<th>Batch</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Contact</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Civil Status</th>
					<th>Current Company</th>
				</tr>
			</thead>
			<tbody>
				<!-- Data will be dynamically injected by DataTables -->
			</tbody>
		</table>
	</div>
</div> 