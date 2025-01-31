<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-8 col-lg-8 col-sm-4 col-xs-4">
        <div class="search-bar form-group">
          <input type="text" id="searchInput" class="form-control" placeholder="Search by Name">
        </div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"> 
        <button id="searchBtn" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search"></i> Search</button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div id="userCards" class="row">
      <!-- User cards will be rendered here dynamically -->
    </div>
  </div>
  <div class="card-footer">
    <div id="pagination" style="display:flex;">
      <!-- Pagination links will be rendered here dynamically -->
    </div>
  </div>
</div>