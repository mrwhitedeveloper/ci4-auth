      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="<?= base_url('');?>/home" class="brand-link">

              <span class="brand-text font-weight-light">CI4-Auth</span>
          </a>
          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                  <div class="info">
                      <a href="#" class="d-block"><?php echo session()->get('name'); ?></a>
                  </div>
              </div>

              <!-- SidebarSearch Form -->

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                      <!-- <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fas fa-circle nav-icon"></i>
                              <p>Level 1</p>
                          </a>
                      </li> -->
                      <li class="nav-item">
                          <a href="<?= base_url('dashboard');?>" class="nav-link">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p> Dashboard</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= base_url('logout');?>" class="nav-link">
                              <i class="nav-icon fas fa-lock"></i>
                              <p> Logout</p>
                          </a>
                      </li>


                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>