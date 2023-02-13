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
                                <h3 class="card-title">User Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_UserReg.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employee Number</label>
                                                <input type="text" name="User_Reg_Emp_Cost_No" class="form-control" id="User_Reg_Emp_Cost_No" value="<?php if(isset($_GET['User_Reg_Emp_Cost_No'])) echo $User_Reg_Emp_Cost_No;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Name Initial</label>
                                                <input type="text" name="User_Reg_Name_Initial" class="form-control" id="User_Reg_Name_Initial" value="<?php if(isset($_GET['User_Reg_Emp_Cost_No'])) echo $User_Reg_Name_Initial;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" name="User_Reg_Designation" class="form-control" id="User_Reg_Designation">
                                            </div>
                                            <div class="form-group">
                                                <label>Digital Signature</label>
                                                <input type="text" name="User_Reg_Signature" class="form-control" id="User_Reg_Signature">
                                            </div>
                                            <div class="form-group">
                                                <label>User Email</label>
                                                <input type="text" name="User_Reg_Email" class="form-control" id="User_Reg_Email">
                                            </div>

                                            <!-- /.form-group -->
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <!--<div class="form-group">
                                                <label>User Type</label>
                                                <input type="text" name="User_Reg_No_Type" class="form-control" id="User_Reg_No_Type">
                                            </div>-->
                                            <div class="form-group">
                                                <label>Surname</label>
                                                <input type="text" name="User_Reg_Name_Surname" class="form-control" id="User_Reg_Name_Surname" value="<?php if(isset($_GET['User_Reg_Emp_Cost_No'])) echo $User_Reg_Name_Surname;?>" />
                                            </div> 
                                            <div class="form-group">
                                                <label>Photo</label>
                                                <input type="file" name="User_Reg_Photo" class="form-control" id="User_Reg_Photo" >
                                            </div>
                                            <div class="form-group">
                                                <label>User Role</label>
                                                <select class="form-control select2" name="User_Reg_Role" id="User_Reg_Role">
                                                    <option>Administrator</option>
                                                    <option>Addl.GM(P&P)</option>
                                                    <option>AGM (MD&T)</option>
                                                    <option>Manager(T)</option>
                                                    <option>Training Officer</option>
                                                    <option>Authorized Officer(NWSDB)</option>
                                                    <option>Authorized Officer(Institute)</option>
                                                    <option>Trainee</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label>User Active</label>                                     
                                                <select class="form-control select2" name="User_Reg_Is_Active" id="User_Reg_Is_Active">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>User Password</label>
                                                <input type="password" name="User_Reg_Password" class="form-control" id="User_Reg_Password">
                                            </div>
                                            <!-- /.form-group -->

                                        </div>
                                        <!-- /.col -->
                                        
                                    </div>
                                    <!-- /.row -->
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="submit" value="Register" class="btn btn-primary" Name="New">
                                    
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
