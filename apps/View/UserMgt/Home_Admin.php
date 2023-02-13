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
                                <h3 class="card-title">User - <?php echo  $_SESSION['User_Reg_Role']; ?> </h3>
                            </div>
                            <!-- /.card-header -->

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
