<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();


if (isset($_GET['Vacan_ID'])) {

    $Vacan_ID = $_GET['Vacan_ID']; // Get the value from URL & assing to variable
    $sql = 'SELECT Vacan_ID FROM tbl_trainee_request where Vacan_ID  = :Vacan_ID';

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':Vacan_ID' => $Vacan_ID));

    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {ත
        $Vacan_ID = $row[0];
    }
}
?>

<?php

	// Connect to database for quary Institute
	$con = mysqli_connect("localhost","root","","db_itms");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM `tbl_institute_registration`";
	$all_categories = mysqli_query($con,$sql);
        
       // Ended for quary Institute
?>

<?php

	// Connect to database for quary City
	$con_city = mysqli_connect("localhost","root","","db_itms");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql_city = "SELECT * FROM `tbl_city`";
	$all_City = mysqli_query($con_city,$sql_city);
        
       // Ended for quary Institute
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
                                <h3 class="card-title">Apply / New Trainee Registration </h3>

                            </div>
                            <div class="form-group">

                                <div class="col-md-2">
                                    <label>Vacancy ID</label>
                                    <input type="text" name="Stu_Assign_Vacn_ID" class="form-control" id="Stu_Assign_Vacn_ID" readonly="" value="<?php if (isset($_GET['Vacan_ID'])) echo $Vacan_ID; ?>" />
                                </div>
                                <!-- /.card-header -->
                                <form id="quickForm" method="POST" action="../../Module/UserMgt/_TraineeReg.php">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label>NIC Number</label>
                                                    <input type="text" required="" autofocus="" name="Stu_Student_NIC" class="form-control" id="Stu_Student_NIC" placeholder="802141122V or 19802141122" >
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
                                                    <select class="form-control select2" name="Stu_Institute_Name" id="Stu_Institute_Name">
                                                        <?php
                                                        // use a while loop to fetch data
                                                        // from the $all_categories variable
                                                        // and individually display as an option
                                                        while ($category = mysqli_fetch_array(
                                                        $all_categories, MYSQLI_ASSOC)):;
                                                            ?>
                                                            <option value="<?php
                                                            echo $category["Insti_Name"];
                                                            // The value we usually set is the primary key
                                                            ?>">
                                                                        <?php
                                                                        echo $category["Insti_Name"];
                                                                        // To show the category name to the user
                                                                        ?>
                                                            </option>
                                                            <?php
                                                        endwhile;
                                                        // While loop must be terminated
                                                        ?>
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
                                                    <input type="email" name="Stu_Email" class="form-control" id="Stu_Email" placeholder="abc123@gmail.com"> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Nearest City</label>
                                                    <select class="form-control select2" name="Stu_Nearest_City" id="Stu_Nearest_City">
                                                        <?php
                                                        // use a while loop to fetch data
                                                        // from the $all_categories variable
                                                        // and individually display as an option
                                                        while ($category = mysqli_fetch_array(
                                                        $all_City, MYSQLI_ASSOC)):;
                                                            ?>
                                                            <option value="<?php
                                                            echo $category["City_Name"];
                                                            // The value we usually set is the primary key
                                                            ?>">
                                                                        <?php
                                                                        echo $category["City_Name"];
                                                                        // To show the category name to the user
                                                                        ?>
                                                            </option>
                                                            <?php
                                                        endwhile;
                                                        // While loop must be terminated
                                                        ?>
                                                    </select>    
                                                   
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" name="Stu_Mobile" class="form-control" id="Stu_Mobile" placeholder="0712345678">
                                                </div>
                                                <div class="form-group">
                                                    <label>Copy of NIC</label>
                                                    <input type="file" name="Stu_NIC_Copy" class="form-control" id="Stu_NIC_Copy" placeholder="PDF or JPG">
                                                </div>



                                                <div class="form-group">
                                                    <input type="checkbox" required="" value="Register" class="btn btn-primary" Name="New">
                                                    <a href="View_TandC.php" <label>I have read and agree to the terms and conditions</label></a>
                                                </div>

                                                <!-- /.form-group -->
                                                <!-- /.form-group -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" name="Stu_Student_Full_Name" class="form-control" id="Stu_Student_Full_Name">
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
                                                    <input type="text" name="Stu_Institute_Branch" class="form-control" id="Stu_Institute_Branch">
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

                                                <div>
                                                    
                                                    <input type="hidden" name="Stu_Assign_Vacn_ID" class="form-control" id="Stu_Assign_Vacn_ID" readonly="" value="<?php if (isset($_GET['Vacan_ID'])) echo $Vacan_ID; ?>" />
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
