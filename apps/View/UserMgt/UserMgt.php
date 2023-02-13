<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();

if(isset($_GET['User_Reg_Emp_Cost_No']))
{

$User_Reg_Emp_Cost_No=$_GET['User_Reg_Emp_Cost_No']; // Get the value from URL & assing to variable
$sql = 'SELECT User_Reg_Emp_Cost_No, User_Reg_No_Type, User_Reg_Name_Initial, User_Reg_Name_Surname FROM tbl_user_registration where User_Reg_Emp_Cost_No  = :User_Reg_Emp_Cost_No';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':User_Reg_Emp_Cost_No'=>$User_Reg_Emp_Cost_No));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$User_Reg_Emp_Cost_No=$row[0];
					$User_Reg_No_Type=$row[1];  
					$User_Reg_Name_Initial=$row[2];  
					$User_Reg_Name_Surname =$row[3];		
				}
}

?>

<!DOCTYPE html>
<html lang="en">

    <?php $template->getHead(); ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Main Sidebar Container -->
            <?php $template->getSideBar(); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <?php $template->showMessage(); ?>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">User Management</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_UserReg.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            

                                            <!-- /.form-group -->
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <!--<div class="form-group">
                                                <label>User Type</label>
                                                <input type="text" name="User_Reg_No_Type" class="form-control" id="User_Reg_No_Type">
                                            </div>-->
                                            
                                            <!-- /.form-group -->

                                        </div>
                                        <!-- /.col -->
                                        
                                    </div>
                                    <!-- /.row -->
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                   
                                    <a href="View_UserReg.php" class="btn btn-primary">View</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->




            </div>
            <!-- /.content-wrapper -->

            <?php $template->getFooter(); ?>


        </div>
        <!-- ./wrapper -->

        <?php $template->getScript(); ?>


    </body>
</html>
