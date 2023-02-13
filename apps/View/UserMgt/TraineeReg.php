<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();


if(isset($_GET['Stu_Student_NIC']))
{

$Stu_Student_NIC=$_GET['Stu_Student_NIC']; // Get the value from URL & assing to variable
$sql = 'SELECT Stu_Student_NIC, Stu_Email, Stu_Institute_Name, Stu_Institute_Branch, Stu_Student_Full_Name FROM tbl_stu_internship_request where Stu_Student_NIC  = :Stu_Student_NIC';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':Stu_Student_NIC'=>$Stu_Student_NIC));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$User_Reg_ID=$row[0];  
					$Stu_Email=$row[1];  
					$Stu_Institute_Name=$row[2];  
					$Stu_Institute_Branch =$row[3];
                                        $Stu_Student_Full_Name =$row[4];
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
                                <h3 class="card-title">New Trainee Registration <?php echo  $_SESSION['User_Reg_Role']; ?> </h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/UserMgt/_TraineeReg.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIC Number</label>
                                                <input type="text" required="" autofocus="" name="Stu_Student_NIC" class="form-control" id="Stu_Student_NIC" placeholder="802141122V or 19802141122" value="<?php if(isset($_GET['Stu_Student_NIC'])) echo $Stu_Student_NIC;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Initial </label>
                                                <input type="text" name="Stu_Student_Initial" class="form-control" id="Stu_Student_Initial" placeholder="A.B.C.">
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Birth </label>
                                                <input type="date" name="Stu_DOB" class="form-control" id="Stu_DOB">
                                            </div>
                                            <div class="form-group">
                                                <label>Name of Institute</label>
                                                <select class="form-control select2" name="Stu_Institute_Name" id="Stu_Institute_Name" value="<?php if(isset($_GET['Stu_Student_NIC'])) echo $Stu_Institute_Name;?>" />
                                                    <option>University of Colombo</option>
                                                    <option>University of Peradeniya</option>
                                                    <option>University of Sri Jayewardenepura</option>
                                                    <option>University of Kelaniya</option>
                                                    <option>University of Moratuwa</option>
                                                    <option>University of Jaffna</option>
                                                    <option>University of Ruhuna</option>
                                                    <option>Eastern University, Sri Lanka</option>
                                                    <option>South Eastern University of Sri Lanka</option>
                                                    <option>Rajarata University of Sri Lanka</option>
                                                    <option>Sabaragamuwa University of Sri Lanka</option>
                                                    <option>Wayamba University of Sri Lanka</option>
                                                    <option>Uva Wellassa University of Sri Lanka</option>
                                                    <option>University of the Visual & Performing Arts</option>
                                                    <option>University of Vavuniya</option>
                                                    <option>The Open University of Sri Lanka</option>
                                                    <option>Gampaha Wickramarachchi University of Indigenous Medicine</option>
                                                    <option>Government Technical College</option>
                                                    <option>Association of Accounting Technicians Sri Lanka</option>
                                                    <option>Ceylon German Technical Training School</option>
                                                    <option>Charted Institute of Management Accountants</option>
                                                    <option>General Sir John Kotelawala Defence University</option>
                                                    <option>IESL College of Engineering</option>
                                                    <option>Institute of Charted Accountants Sri Lanka</option>
                                                    <option>Institute of Chemistry Ceylon</option>
                                                    <option>Institute of Engineering Technology</option>
                                                    <option>Institute of Engineers Sri Lanka</option>
                                                    <option>Institute of Personnel Management Sri Lanka </option>
                                                    <option>Institute of Supplies and Material Management</option>
                                                    <option>National Apprentice and Industrial Training Authoriry</option>
                                                    <option>National Institute of Business Management</option>
                                                    <option>National Institute of Social Development</option>
                                                    <option>National School of Business Management</option>
                                                    <option>National Youth Services Council</option>
                                                    <option>Sri Lanka Institute of Advanced Technological Education</option>
                                                    <option>University College of Anuradhapura</option>
                                                    <option>University College of Batangala</option>
                                                    <option>University College of Jafna</option>
                                                    <option>University College of Kuliyapitiya</option>
                                                    <option>University College of Matara</option>
                                                    <option>University College of Ratmalana</option>
                                                    <option>Vocatitonal Training Authority of Sri Lanka</option>
                                            
                                                </select>                 
                                            </div>
                                            <div class="form-group">
                                                <label>Student ID No</label>
                                                <input type="text" name="Stu_Institute_ID_No" class="form-control" id="Stu_Institute_ID_No">
                                            </div>
                                            <div class="form-group">
                                                <label>Academic Year</label>
                                                <input type="text" name="Stu_Academic_Year" class="form-control" id="Stu_Academic_Year" placeholder="2020">
                                            </div>
                                            <div class="form-group">
                                                <label>Internship Period (Months)</label>
                                                <input type="text" name="Stu_Internship_Period" class="form-control" id="Stu_Internship_Period" placeholder="6">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" name="Stu_Email" class="form-control" id="Stu_Email" placeholder="abc123@gmail.com" value="<?php if(isset($_GET['Stu_Student_NIC'])) echo $Stu_Email;?>" /> 
                                            </div>
                                            <div class="form-group">
                                                <label>Nearest City</label>
                                                <input type="text" name="Stu_Nearest_City" class="form-control" id="Stu_Nearest_City">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" name="Stu_Mobile" class="form-control" id="Stu_Mobile" placeholder="0712345678">
                                            </div>
                                            <div class="form-group">
                                                <label>Copy of NIC</label>
                                                <input type="file" name="Stu_NIC_Copy" placeholder="PDF or JPG">
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
                                                <label>Full Name</label>
                                                <input type="text" name="Stu_Student_Full_Name" class="form-control" id="Stu_Student_Full_Name" value="<?php if(isset($_GET['Stu_Student_NIC'])) echo $Stu_Student_Full_Name;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Surname</label>
                                                <input type="text" name="Stu_Student_Surname" class="form-control" id="Stu_Student_Surname" placeholder="Perera">
                                            </div> 
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control select2" name="Stu_Gender" id="Stu_Gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>                                            
                                            </div>
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <input type="text" name="Stu_Institute_Branch" class="form-control" id="Stu_Institute_Branch" value="<?php if(isset($_GET['Stu_Student_NIC'])) echo $Stu_Institute_Branch;?>" />
                                            </div> 
                                            <div class="form-group">
                                                <label>Subject Stream</label>
                                                <input type="text" name="Stu_Subject_Stream" class="form-control" id="Stu_Subject_Stream">
                                            </div> 
                                            <div class="form-group">
                                                <label>Programme Name</label>
                                                <input type="text" name="Stu_Programme_Name" class="form-control" id="Stu_Programme_Name">
                                            </div> 
                                            <div class="form-group">
                                                <label>Requesting Commence Date</label>
                                                <input type="date" name="Stu_Request_Commence_Date" class="form-control" id="Stu_Request_Commence_Date">
                                            </div> 
                                            <div class="form-group">
                                                <label>Permanent Address</label>
                                                <input type="text" name="Stu_Permanent_Address" class="form-control" id="Stu_Permanent_Address" placeholder="No. 1017, Liyanagoda Road, Kottawa, Pannipitiya.">
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
                                                <label>Fixed Telephone No</label>
                                                <input type="text" name="Stu_Fixed_Tele_No" class="form-control" id="Stu_Fixed_Tele_No" placeholder="0112847726">
                                            </div> 
                                            <div class="form-group">
                                                <label>Copy of Institute Recommendation Letter</label>
                                                <input type="text" name="Stu_Institute_Recommendation_Copy" class="form-control" id="Stu_Institute_ Recommendation_Copy" placeholder="PDF or JPG">
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
                                    <a href="View_TraineeReg.php" class="btn btn-primary">View</a>
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
