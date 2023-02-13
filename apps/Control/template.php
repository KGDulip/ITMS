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
    <a href="' . BASE_URL . 'apps/Module/UserMgt/_Logout.php" class="brand-link">
      <img src="../../../lib/dist/img/cewas.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    <a href="#" class="d-block">' . $_SESSION['User_Reg_Email'] . '</a>
    <a href="#" class="d-block">' . ' as ' . $_SESSION['User_Reg_Role'] . '</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Administrative
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
                  <p>User Registration</p>
                </a>
              </li> ';
        }


        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Management</p>
                </a>
              </li> ';
        }

        echo' <!-- Add New Item & direct to a page-->
                
                <li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_Change_User_Password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>


                </a>
                </li>

                <li class="nav-item">
                    <a href="' . BASE_URL . 'apps/Module/UserMgt/_Logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log Out</p>
                </a>
                </li>
<!-- End Main & Sub Munu (Administrative) to a page-->

<!-- Start Add New Main & Sub Munu (OJT Management) to a page-->

            </ul>
          </li> 
          
       <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                OJT Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/OJTMgt/TraineeRequest.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trainee Request</p>
                </a>
              </li>
            

<!-- End Added New Main & Sub Munu (OJT Management)to a page-->


<!-- Start Add  Main & Sub Munu (Trainee Management) to a page-->

            </ul>
          </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Trainee Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/TraineeMgt/DiscipRec.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disciplinary Violation</p>
                </a>
              </li>
            

<!-- End Main & Sub Munu (Trainee Management )to a page-->


<!-- Start Add  Main & Sub Munu (Programmes Management) to a page-->

            </ul>
          </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Programmes Mgt.
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
            

<!-- End Main & Sub Munu (Programmes Management )to a page-->


<!-- Start Add  Main & Sub Munu (Enrollment Management) to a page-->

            </ul>
          </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Enrollment Management
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
            

<!-- End Main & Sub Munu (Enrollment Management)to a page-->


<!-- Start Add  Main & Sub Munu (Institute Management) to a page-->

            </ul>
          </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Institute Management
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
            

<!-- End Main & Sub Munu (Institute Management)to a page-->


<!-- Start Add  Main & Sub Munu (Management Information) to a page-->

            </ul>
          </li>
          
        <!-- Add New Item & direct to a page-->
            

<li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                MIS Module
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="' . BASE_URL . 'apps/View/Report/user_rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dash Board</p>
                </a>
              </li> ';
              
              if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/Report/user_rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NWSDB Office</p>
                </a>
              </li> ';
        }
              
              
              if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/Report/user_rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NWSDB Projects</p>
                </a>
              </li> ';
        }
              
             
              
              if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/Report/user_rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Institutes / Universities</p>
                </a>
              </li> ';
        }


        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/Report/user_rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Students - Year</p>
                </a>
              </li> ';
        }
        


        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Stu. -Subject</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Stu. -Location</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Stu. -Subject</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Completed Stu. -Year</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dropped Stu. -Year</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dropped Stu. -Subject</p>
                </a>
              </li> ';
        }
        
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator' or 'Trainee') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dropped Stu.-Institute</p>
                </a>
              </li> ';
        }


        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Work done Report</p>
                </a>
              </li> ';
        }
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Report</p>
                </a>
              </li> ';
        }
        
        if ($_SESSION['User_Reg_Role'] == 'Administrator') {
            echo'<li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_UserReg.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disciplinary Violation</p>
                </a>
              </li> ';
        }

        echo' <!-- Add New Item & direct to a page-->
                
                <li class="nav-item">
                    <a href="' . BASE_URL . 'apps/View/UserMgt/View_Change_User_Password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disciplinary Summary</p>
                </a>
                </li>

                

            
<!-- End Main & Sub Munu (Management Information)to a page-->

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
