<aside class="main-sidebar sidebar-dark-light elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="images/alumniLogo.jpg"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Alumni Connect</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info text-center w-100">
          <h5 class="d-block text-center" style="color:white;">Administrator Panel</h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="?dashboard=on" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview <?php echo ($view == 'users' || $view == 'user_approval' || $view == 'user_blocked') ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?q=users" class="nav-link <?php echo ($view == 'users') ? 'active' : '' ?>">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Active Users</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="?q=user_approval" class="nav-link <?php echo ($view == 'user_approval') ? 'active' : '' ?>">
                  <i class="fa fa-users nav-icon"></i>
                  <p>User for Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?q=user_blocked" class="nav-link <?php echo ($view == 'user_blocked') ? 'active' : '' ?>">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Block Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="?q=alumni_list" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Alumni List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?q=posts" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>