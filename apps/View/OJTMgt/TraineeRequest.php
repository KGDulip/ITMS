<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();
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
                                            <input type="text" name="Vacan_ID" class="form-control" id="Vacan_ID" readonly="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Vacancy Position</label>
                                            <select class="form-control select2" name="Vacan_Position" id="Vacan_Position">
                                                    <option>Computer Operator</option>
                                                    <option>Management Assistant</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Commence Date</label>
                                            <input type="date" name="Vacan_Commence_Date" class="form-control" id="Vacan_Commence_Date" placeholder="Perera A.B.C.">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="Vacan_Remarks" class="form-control" id="Vacan_Remarks" >
                                        </div> 
                                        <div class="form-group">
                                            <label>Vacancy is Fill?</label>
                                            <select class="form-control select2" name="Vacan_Is_Fill" id="Vacan_Is_Fill" readonly="">
                                                    <option>No</option>
                                                    <option>Yes</option>
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
                                            <input type="text" name="Vacan_CostCode" class="form-control" id="Vacan_CostCode">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Vacancy Subject Area</label>
                                            <select class="form-control select2" name="Vacan_Subject_Area" id="Vacan_Subject_Area">
                                                    <option>Engineering</option>
                                                    <option>Management</option>
                                                    <option>IT</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Required Gender</label>
                                            <select class="form-control select2" name="Vacan_Gender" id="Vacan_Gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Training Period (Months)</label>
                                            <select class="form-control select2" name="Vacan_Period" id="Vacan_Period">
                                                    <option>3</option>
                                                    <option>6</option>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vacancy Filling Date</label>
                                            <input type="date" name="Vacan_Fulfill_Date" class="form-control" id="Vacan_Fulfill_Date" readonly="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Assign Student ID</label>
                                            <input type="number" name="Vacan_Assign_StuID" class="form-control" id="Vacan_Assign_StuID" readonly="" >
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
