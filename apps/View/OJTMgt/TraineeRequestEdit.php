<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();

if(isset($_GET['Vacan_ID']))
{

$Vacan_ID=$_GET['Vacan_ID']; // Get the value from URL & assing to variable
$sql = 'SELECT Vacan_ID, Vacan_CostCode, Vacan_Subject_Area, Vacan_Position, Vacan_Gender, Vacan_Commence_Date, Vacan_Period, Vacan_Remarks, Vacan_Fulfill_Date, Vacan_Is_Fill, Vacan_Assign_StuID FROM tbl_trainee_request where Vacan_ID  = :Vacan_ID';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':Vacan_ID'=>$Vacan_ID));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$Vacan_ID=$row[0];
                                        $Vacan_CostCode=$row[1];
					$Vacan_Subject_Area=$row[2];
                                        $Vacan_Position=$row[3];
					$Vacan_Gender=$row[4];  
					$Vacan_Commence_Date =$row[5];
                                        $Vacan_Period =$row[6];
                                        $Vacan_Remarks =$row[7];
                                        $Vacan_Fulfill_Date =$row[8];
                                        $Vacan_Is_Fill =$row[9];
                                        $Vacan_Assign_StuID =$row[10];
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
                                <h3 class="card-title">Trainee Request</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/OJTMgt/_TraineeRequest.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Vacancy ID</label>
                                            <input type="text" name="Vacan_ID" class="form-control" id="Vacan_ID" readonly="" value=<?php if(isset($Vacan_ID)){echo $Vacan_ID;}?>>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label>Vacancy Position</label>
                                            <select class="form-control select2" name="Vacan_Position" id="Vacan_Position">
                                                <option><?php if(isset($Vacan_Position)){echo $Vacan_Position;}?></option>>    
                                                <option>Computer Operator</option>
                                                    <option>Management Assistant</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Commence Date</label>
                                            <input type="date" name="Vacan_Commence_Date" class="form-control" id="Vacan_Commence_Date" value=<?php if(isset($Vacan_Commence_Date)){echo $Vacan_Commence_Date;}?>>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="Vacan_Remarks" class="form-control" id="Vacan_Remarks" value=<?php if(isset($Vacan_Remarks)){echo $Vacan_Remarks;}?>>
                                        </div> 
                                        <div class="form-group">
                                            <label>Vacancy is Fill?</label>
                                            <select class="form-control select2" name="Vacan_Is_Fill" id="Vacan_Is_Fill"> value=<?php if(isset($Vacan_Is_Fill)){echo $Vacan_Is_Fill;}?>>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="checkbox" value="Register" class="btn btn-primary" Name="New">
                                            <label>I have agree to the MDTD terms and conditions</label>
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Vacancy Cost Code</label>
                                            <input type="text" name="Vacan_CostCode" class="form-control" id="Vacan_CostCode" readonly="" value=<?php if(isset($Vacan_CostCode)){echo $Vacan_CostCode;}?>>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Vacancy Subject Area</label>
                                            <select class="form-control select2" name="Vacan_Subject_Area" id="Vacan_Subject_Area" value=<?php if(isset($Vacan_Subject_Area)){echo $Vacan_Subject_Area;}?>>
                                                    <option>Engineering</option>
                                                    <option>Management</option>
                                                    <option>IT</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Required Gender</label>
                                            <select class="form-control select2" name="Vacan_Gender" id="Vacan_Gender" value=<?php if(isset($Vacan_Gender)){echo $Vacan_Gender;}?>>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Training Period (Months)</label>
                                            <select class="form-control select2" name="Vacan_Period" id="Vacan_Period" value=<?php if(isset($Vacan_Period)){echo $Vacan_Period;}?>>
                                                    <option>3</option>
                                                    <option>6</option>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vacancy Filling Date</label>
                                            <input type="date" name="Vacan_Fulfill_Date" class="form-control" id="Vacan_Fulfill_Date" value=<?php if(isset($Vacan_Fulfill_Date)){echo $Vacan_Fulfill_Date;}?>>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Assign Student ID</label>
                                            <input type="number" name="Vacan_Assign_StuID" class="form-control" id="Vacan_Assign_StuID" value=<?php if(isset($Vacan_Assign_StuID)){echo $Vacan_Assign_StuID;}?>>
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
                                <input type="submit" value="Update" class="btn btn-primary" Name="Update">
                                <input type="submit" value="Delete" class="btn btn-primary" Name="Delete">
                                <a href="View_TraineeRequest.php" class="btn btn-primary">View</a>
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