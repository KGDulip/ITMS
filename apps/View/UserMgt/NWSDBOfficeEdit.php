<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();

if(isset($_GET['Sec_Cost_Code_ID']))
{

$Sec_Cost_Code_ID=$_GET['Sec_Cost_Code_ID']; // Get the value from URL & assing to variable
$sql = 'SELECT Sec_Cost_Code_ID, Sec_Name, Sec_Autho_OfficerEmpNo, Sec_Autho_OfficerName, Sec_Autho_OfficerDesig FROM tbl_section where Sec_Cost_Code_ID  = :Sec_Cost_Code_ID';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':Sec_Cost_Code_ID'=>$Sec_Cost_Code_ID));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$Sec_Cost_Code_ID=$row[0];
					$Sec_Name=$row[1];
                                        $Sec_Autho_OfficerEmpNo=$row[2];
					$Sec_Autho_OfficerName=$row[3];  
					$Sec_Autho_OfficerDesig =$row[4];		
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
                                <h3 class="card-title">NWSDB Office Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_NWSDBOfficeReg.php">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Office Cost Code</label>
                                            <!-- <input type="text" name="Sec_Autho_OfficerEmpNo" class="form-control" id="Sec_Autho_OfficerEmpNo" placeholder="0074"> -->
                                            <input type="text" name="Sec_Autho_OfficerEmpNo" class="form-control" id="Sec_Autho_OfficerEmpNo" value="<?php if(isset($_GET['Sec_Autho_OfficerEmpNo'])) echo $Sec_Autho_OfficerEmpNo;?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Section Head</label>
                                            <input type="text" name="Sec_Head" class="form-control" id="Sec_Head" value="<?php if(isset($_GET['Sec_Head'])) echo $Sec_Head;?>" />
                                            <!--<input type="text" name="Sec_Head" class="form-control" id="Sec_Head"> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Officer Name</label>
                                            <input type="text" name="Sec_Autho_OfficerName" class="form-control" id="Sec_Autho_OfficerName" value="<?php if(isset($_GET['Sec_Autho_OfficerName'])) echo $Sec_Autho_OfficerName;?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Section Address</label>
                                            <input type="text" name="Sec_Address" class="form-control" id="Sec_Address" >
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
                                            <label>Manager Office</label>
                                            <input type="text" name="Sec_Manager_Office" class="form-control" id="Sec_Manager_Office">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" name="Sec_Mobile" class="form-control" id="Sec_Mobile" placeholder="0719099969">
                                        </div>
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" name="Sec_Fax" class="form-control" id="Sec_Fax" placeholder="0112626176">
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" value="Register" class="btn btn-primary" Name="New">
                                            <label>I have read and agree to the terms and conditions</label>
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Section Name</label>
                                            <input type="text" name="Sec_Name" class="form-control" id="Sec_Name" placeholder="OIC Office (Kotte)">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Officer's Emp. No</label>
                                            <!-- <input type="text" required="" name="Sec_Cost_Code_ID" class="form-control" id="Sec_Cost_Code_ID" placeholder="2049821"> -->
                                            <input type="text" name="Sec_Cost_Code_ID" class="form-control" id="Sec_Cost_Code_ID" value="<?php if(isset($_GET['Sec_Cost_Code_ID'])) echo $Sec_Cost_Code_ID;?>" />
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>Officer's Designation</label>
                                            <input type="text" name="Sec_Autho_OfficerDesig" class="form-control" id="Sec_Autho_OfficerDesig" value="<?php if(isset($_GET['Sec_Autho_OfficerDesig'])) echo $Sec_Autho_OfficerDesig;?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Section City</label>
                                            <input type="text" name="Sec_City" class="form-control" id="Sec_City">
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Section Province</label>
                                            <input type="text" name="Sec_Province" class="form-control" id="Sec_Province" >
                                        </div>--> 
                                        <!--<div class="form-group">
                                            <label>Section RSC</label>
                                            <input type="text" name="Sec_RSC" class="form-control" id="Sec_RSC">
                                        </div>--> 
                                        <div class="form-group">
                                            <label>Fixed</label>
                                            <input type="text" name="Sec_Telephone" class="form-control" id="Sec_Telephone" placeholder="0112847726" >
                                        </div> 
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="Sec_Email" class="form-control" id="Sec_Email" placeholder="abc@gmail.com" >
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
                                <a href="View_NWSDBOfficeReg.php" class="btn btn-primary">View</a>
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
