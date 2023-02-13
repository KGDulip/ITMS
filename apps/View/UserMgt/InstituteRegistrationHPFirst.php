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
                                <h3 class="card-title">New Institute Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_InstituteRegistration.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Institute Name</label>
                                            <input type="text" required="" name="Insti_Name" class="form-control" id="Insti_Name" placeholder="UNIVOTEC">
                                        </div>
                                        <div class="form-group">
                                            <label>Head of the Institute</label>
                                            <input type="text" name="Insti_Head_Position" class="form-control" id="Insti_Head_Position" placeholder="Director">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="Insti_Nearest_City" class="form-control" id="Insti_Nearest_City">
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Province</label>
                                            <input type="text" name="Insti_Province" class="form-control" id="Insti_Province">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" name="Insti_Telephone" class="form-control" id="Insti_Telephone" placeholder="0112847726">
                                        </div>
                                        <div class="form-group">
                                            <label>Web</label>
                                            <input type="text" name="Insti_Web" class="form-control" id="Insti_Web" placeholder="www.abcinsti.lk">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="checkbox" required="" value="Register" class="btn btn-primary" Name="New">
                                            <a href="View_TandC.php" <label>I have read and agree to the terms and conditions</label></a>
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Institute Branch </label>
                                            <input type="text" name="Insti_Branch" class="form-control" id="Insti_Branch">
                                        </div>
                                        <div class="form-group">
                                            <label>Institute Address</label>
                                            <input type="text" name="Insti_Address" class="form-control" id="Insti_Address" placeholder="Nipunatha Piyasa, Elvitigala Road, Narahenpita.">
                                        </div> 
                                        <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control select2" name="Stu_District" id="Stu_District">
                                                    <option>Ampara</option>
                                                    <option>Anuradhapura</option>
                                                    <option>Badulla</option>
                                                    <option>Batticaloa</option>
                                                    <option>Colombo</option>
                                                    <option>Galle</option>
                                                    <option>Gampaha</option>
                                                    <option>Hambantota</option>
                                                    <option>Jaffna</option>
                                                    <option>Kalutara</option>
                                                    <option>Kandy</option>
                                                    <option>Kegalle</option>
                                                    <option>Kilinochchi</option>
                                                    <option>Kurunegala</option>
                                                    <option>Mannar</option>
                                                    <option>Matale</option>
                                                    <option>Matara</option>
                                                    <option>Monaragala</option>
                                                    <option>Mullaitivu</option>
                                                    <option>NuwaraEliya</option>
                                                    <option>Polonnaruwa</option>
                                                    <option>Puttalam</option>
                                                    <option>Ratnapura</option>
                                                    <option>Trincomalee</option>
                                                    <option>Vavuniya</option>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" required="" name="Insti_Email" class="form-control" id="Insti_Email" placeholder="abc@gmail.com" >
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
