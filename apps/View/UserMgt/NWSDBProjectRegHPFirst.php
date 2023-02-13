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
                                <h3 class="card-title">NWSDB Project Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_NWSDBProjectReg.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Project Cost Code</label>
                                            <input type="text" required="" name="Project_Cost_Code_ID" class="form-control" id="Project_Cost_Code_ID" placeholder="0071/15/360">
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Project Director</label>
                                            <input type="text" name="Project_Head" class="form-control" id="Project_Head">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Officer Emp No</label>
                                            <input type="text" required="" name="Project_Autho_OfficerEmpNo" class="form-control" id="Project_Autho_OfficerEmpNo" placeholder="2049821">
                                        </div>
                                        <div class="form-group">
                                            <label>Officer Designation</label>
                                            <input type="text" required="" name="Project_Autho_OfficerDesig" class="form-control" id="Project_Autho_OfficerDesig" placeholder="Perera A.B.C.">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="Project_City" class="form-control" id="Project_City">
                                        </div>
                                        
                                        
                                        <!--<div class="form-group">
                                            <label>Manager Office</label>
                                            <input type="text" name="Project_Manager_Office" class="form-control" id="Project_Manager_Office">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name="Project_Mobile" class="form-control" id="Project_Mobile" placeholder="0719099969">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" name="Project_Fax" class="form-control" id="Project_Fax" placeholder="0112626176">
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
                                            <label>Project Name</label>
                                            <input type="text" required="" name="Project_Name" class="form-control" id="Project_Name" placeholder="OIC Office (Kotte)">
                                        </div>
                                        <div class="form-group">
                                            <label>Officer Name</label>
                                            <input type="text" required="" name="Project_Autho_OfficerName" class="form-control" id="Project_Autho_OfficerName" placeholder="Perera A.B.C.">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Project Address</label>
                                            <input type="text" name="Project_Address" class="form-control" id="Project_Address" >
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
                                        <!--<div class="form-group">
                                            <label>Province</label>
                                            <input type="text" name="Project_Province" class="form-control" id="Project_Province" >
                                        </div>-->  
                                        <!--<div class="form-group">
                                            <label>RSC</label>
                                            <input type="text" name="Project_RSC" class="form-control" id="Project_RSC">
                                        </div>--> 
                                        <div class="form-group">
                                            <label>Fixed</label>
                                            <input type="text" name="Project_Telephone" class="form-control" id="Project_Telephone" placeholder="0112847726" >
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" required="" name="Project_Email" class="form-control" id="Project_Email" placeholder="abc@gmail.com" >
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
