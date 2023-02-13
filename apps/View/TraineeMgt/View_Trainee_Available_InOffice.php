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
          
                <!-- Content Header (Page header) -->

                <?php $template->showMessage(); ?>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- SELECT2 EXAMPLE -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Current Trainees</h3>
                            </div>
                            <!-- /.card-header -->
                            
                            

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Table with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>Trainee ID</th>
                                                <th>Office ID</th>
                                                <th>Surname</th>
                                                <th>Initial</th>
                                                <th>Gender</th>
                                                <th>Institute</th>
                                                <th>Field</th>
                                                <th>Designation</th>
                                                <th>Period</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "Select * from  tbl_stu_internship_request WHERE Stu_Assign_Office = '10' ORDER BY Stu_Training_Start_Date DESC";
                                            $res = $conn->prepare($sql);
                                            $res->execute();
                                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $row['Stu_Email']; ?> </td>
                                                    <td><?php echo $row['Stu_Assign_Office']; ?> </td>
                                                    <td><?php echo $row['Stu_Student_Surname']; ?> </td>
                                                    <td><?php echo $row['Stu_Student_Initial']; ?> </td>
                                                    <td><?php echo $row['Stu_Gender']; ?> </td>
                                                    <td><?php echo $row['Stu_Institute_Name']; ?> </td>
                                                    <td><?php echo $row['Stu_Subject_Stream']; ?> </td>
                                                    <td><?php echo $row['Stu_Programme_Name']; ?> </td>
                                                    <td><?php echo $row['Stu_Internship_Period']; ?> </td>
                                                    <td><?php echo $row['Stu_Training_Start_Date']; ?> </td>
                                                    <td><a href="TraineeRegHPFirst_DriectApply_Vacan.php?Stu_Email=<?php echo $row['Stu_Email'];?><p style="color:green;">Apply</a></td>

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
