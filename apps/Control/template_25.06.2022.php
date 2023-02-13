<?php

class template {

    public function getHead() {
        echo '<head>
  <title>' . SITE_TITLE . '</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="' . BASE_URL . 'lib/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="' . BASE_URL . 'lib/dist/css/adminlte.min.css">
  
</head>';
    }

    public function getSideBar() {
        echo '<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../../../lib/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CFK Home</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../lib/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">'.$_SESSION['User_Reg_Email'].'</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Administrator Module
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/UserMgt/NWSDBOfficeReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NWSDB Office</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/UserMgt/NWSDBProjectReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NWSDB Project</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/UserMgt/InstituteRegistration.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Institute</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/UserMgt/TraineeReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trainee</p>
                </a>
              </li> ';
              if ($_SESSION['User_Reg_Role'] == 'Administrator') {
               echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li> ';
              }
              
echo' <!-- Add New Item & direct to a page-->

                <li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Item</p>
                </a>
                </li>
                
                <li class="nav-item">
                    <a href="' . BASE_URL . 'apps/Module/UserMgt/_Logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log Out</p>
                </a>
                </li>
                
            </ul>
          </li>
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>';
    }

    public function getFooter() {
        echo '  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2021-2022  All rights reserved.
  </footer>';
    }

    public function showMessage() {

        if (isset($_SESSION['success'])) {
            foreach ((array) $_SESSION['success'] as $success) {
                echo '<button type="button" class="btn btn-block bg-gradient-success">
                        ' . $success . '
                      </button>';
                unset($_SESSION['success']);
            }
        }

        if (isset($_SESSION['error'])) {
            foreach ((array) $_SESSION['error'] as $error) {
                echo '<button type="button" class="btn btn-block bg-gradient-danger">
                        ' . $error . '
                      </button>';
                unset($_SESSION['error']);
            }
        }
    }

    public function getScript() {
        echo ' <!-- jQuery -->
<script src="' . BASE_URL . 'lib/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="' . BASE_URL . 'lib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="' . BASE_URL . 'lib/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="' . BASE_URL . 'lib/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="' . BASE_URL . 'lib/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="' . BASE_URL . 'lib/dist/js/demo.js"></script>
<!-- Page specific script -->';
    }

}
