<?php
//call config file for DB connection details
require_once '../../Control/config_NWSDB.php';
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
                                <h3 class="card-title">New Trainee Request</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_NWSDB_Trainee_Request.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trainee Subject Area</label>
                                                <select class="form-control select2" name="Vacan_Gender" id="Vacan_Gender">
                                                    <option>Engineering(Civil)</option>
                                                    <option>Engineering(Mechanical)</option>
                                                    <option>Engineering(Electrical)</option>
                                                    <option>Engineering(Electronic)</option>
                                                    <option>Information Technology</option>
                                                    <option>Accounts & Audit</option>
                                                    <option>Management</option>
                                                </select>                 
                                            </div>
                                            <div class="form-group">
                                                <label>Trainee's Gender</label>
                                                <select class="form-control select2" name="Vacan_Gender" id="Vacan_Gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>                                            
                                            </div>
                                            <!--<div class="form-group">
                                                <input type="checkbox" value="Register" class="btn btn-primary" Name="New">
                                                <label>I have read and agree to the terms and conditions</label>
                                            </div>-->

                                            <!-- /.form-group -->
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trainee Position</label>
                                                <select class="form-control select2" name="Vacan_Gender" id="Vacan_Gender">
                                                    <option>Trainee - Engineer(Civil)</option>
                                                    <option>Trainee - Engineer(Mechanical)</option>
                                                    <option>Trainee - Engineer(Electrical)</option>
                                                    <option>Trainee - Engineer(Electronic)</option>
                                                    <option>Trainee - Draftsman </option>
                                                    <option>Trainee - Quantity Surveyor</option>
                                                    <option>Trainee - Computer Operator</<option>
                                                    <option>Trainee - Hardware Technician</option>
                                                    <option>Trainee - Accounts Clark</option>
                                                    <option>Trainee - Audit Clark</option>
                                                    <option>Trainee - Management Assistant</option>
                                                    <option>Trainee - Secretary</option>
                                                </select>              
                                            </div>
                                             
                                            
                                            
                                            <div class="form-group">
                                                <label>Requesting Commence Date</label>
                                                <input type="date" name="Vacan_Commence_Date" class="form-control" id="Vacan_Commence_Date">
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
                                    <input type="submit" value="View" class="btn btn-primary" Name="View">
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
