<?php
include 'header.php';
include 'system/function.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    extract($_POST);
    $message = array();
    $Stu_Student_NIC = inputClean($Stu_Student_NIC);
    $Stu_Student_Initial = inputClean($Stu_Student_Initial);
    $Stu_DOB = inputClean($Stu_DOB);


    if (empty($Stu_Student_NIC)) {
        $message['Stu_Student_NIC'] = "The NIC No not should be empty";
    }
    if (empty($Stu_Student_Initial)) {
        $message['Stu_Student_Initial'] = "The Initial not should be empty";
    }
    if (empty($Stu_DOB)) {
        if ($Stu_DOB < date('Y-m-d')) {
            $message['Stu_DOB'] = "Stu_DOB";
        }
    }

    if (empty($message)) {
        $SQL = "INSERT INTO `tbl_stu_internship_request`(`Stu_Student_NIC`, `Stu_Email`, `Stu_Institute_Name`, `Stu_Institute_Branch`, `Stu_Institute_ID_No`, `Stu_Student_Full_Name`, `Stu_Student_Initial`, `Stu_Student_Surname`, `Stu_DOB`, `Stu_Gender`, `Stu_Permanent_Address`, `Stu_Nearest_City`, `Stu_District`, `Stu_Mobile`, `Stu_Fixed_Tele_No`, `Stu_Academic_Year`, `Stu_Subject_Stream`, `Stu_Programme_Name`, `Stu_Internship_Period`, `Stu_Request_Commence_Date`, `Stu_NIC_Copy`, `Stu_Institute_Recommendation_Copy`, `Stu_Training_Start_Date`, `Stu_Assign_Office`, `Stu_Assign_Vacn_ID`, `Stu_Tr_Placement_Certification_Manager`, `Stu_ Tr_Placement_Approval_AGM`, `Stu_ Tr_Placement_Approval Date`, `Stu_Tr_ Certificate_No`, `Stu_Training_Complete_Date`) VALUES ('$Stu_Student_NIC','$Stu_Email','$Stu_Institute_Name','$Stu_Institute_Branch','$Stu_Institute_ID_No','$Stu_Student_Full_Name','$Stu_Student_Initial','$Stu_Student_Surname','$Stu_DOB','$Stu_Gender','$Stu_Permanent_Address','$Stu_Nearest_City','$Stu_District','$Stu_Mobile','$Stu_Fixed_Tele_No','$Stu_Academic_Year','$Stu_Subject_Stream','$Stu_Programme_Name','$Stu_Internship_Period','$Stu_Request_Commence_Date','','','','','','','','','','')";
        $DB = dbConn();
        $DB->query($SQL);
        echo 'Sussfull';
    } else {
        echo 'NIC No alrady registerd';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Main Sidebar Container -->
            

            <!-- Content Wrapper. Contains page content -->
          
                <!-- Content Header (Page header) -->

                

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Available Trainee Vacancies</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"<p style="color:red">There is an opportunity to apply. The final selection rests with the NWSDB.CFK </p></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>Vacancy ID</th>
                                                <th>Subject Area</th>
                                                <th>Position</th>
                                                <th>Gender</th>
                                                <th>Commence Date</th>
                                                <th>Period</th>
                                                <th>NWSDB Office / Project</th>
                                                <th>District</th>
                                                <th>City</th>
                                                <th>Apply</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "Select * from  tbl_trainee_request WHERE Vacan_Assign_StuID = '' ORDER By Vacan_ID DESC";
                                            $res = $conn->prepare($sql);
                                            $res->execute();
                                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row['Vacan_ID']; ?> </td>
                                                    <td><?php echo $row['Vacan_Subject_Area']; ?> </td>
                                                    <td><?php echo $row['Vacan_Position']; ?> </td>
                                                    <td><?php echo $row['Vacan_Gender']; ?> </td>
                                                    <td><?php echo $row['Vacan_Commence_Date']; ?> </td>
                                                    <td><?php echo $row['Vacan_Period']; ?> </td>
                                                    <td><?php echo $row['Vacan_Office']; ?> </td>
                                                    <td><?php echo $row['Vacan_Office_District']; ?> </td>
                                                    <td><?php echo $row['Vacan_Office_City']; ?> </td>
                                                    <td><a href="TraineeRegHPFirst_DriectApply_Vacan.php?Vacan_ID=<?php echo $row['Vacan_ID'];?><p style="color:green;">Apply Now</a></td>

                                                </tr>

<?php } ?>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>




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

<!-- jQuery -->
<script src="../../../lib/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../lib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../lib/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../lib/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../lib/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../lib/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../lib/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../lib/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../lib/plugins/jszip/jszip.min.js"></script>
<script src="../../../lib/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../lib/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../lib/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../lib/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../lib/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
