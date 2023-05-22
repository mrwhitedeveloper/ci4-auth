  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu nav-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo session()->get('name'); ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right ">
                  <!-- User image -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer0">
                    
                      <div class="pull-right">
                          <a href="<?php echo base_url(); ?>logout" class="dropdown-item"><i class="fa fa-key"></i>
                              <span>Logout</span> </a>
                      </div>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
  </nav>