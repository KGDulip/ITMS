<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();

if (isset($_GET['homemsg_ID'])) {

    $homemsg_ID = $_GET['homemsg_ID']; // Get the value from URL & assing to variable
    $sql = 'SELECT homemsg_ID, homemsg_name, homemsg_email, homemsg_mobile, homemsg_subject, homemsg_message, homemsg_action, homemsg_remarks FROM tbl_homemsg where homemsg_ID  = :homemsg_ID';

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':homemsg_ID' => $homemsg_ID));

    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        $homemsg_ID = $row[0];
        $homemsg_name = $row[1];
        $homemsg_email = $row[2];
        $homemsg_mobile = $row[3];
        $homemsg_subject = $row[4];
        $homemsg_message = $row[5];
        $homemsg_action = $row[6];
        $homemsg_remarks = $row[7];
    }
}
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
                                <h3 class="card-title">User Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/MgtInfo/_HomeMsg.php">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="homemsg_ID" class="form-control" id="homemsg_ID" readonly="" value="<?php if (isset($_GET['homemsg_ID'])) echo $homemsg_ID; ?>" />
                                    </div>
                                    
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="homemsg_name" class="form-control" id="homemsg_name" placeholder="Your Name" required <?php if (isset($_GET['homemsg_ID'])) echo $homemsg_ID; ?>" />
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="homemsg_email" id="homemsg_email" placeholder="Your Email" required <?php if (isset($_GET['homemsg_email'])) echo $homemsg_email; ?>" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mt-3">
                                        <input type="text" name="homemsg_mobile" class="form-control" id="homemsg_mobile" placeholder="Your Mobile" required <?php if (isset($_GET['homemsg_mobile'])) echo $homemsg_mobile; ?>" />
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <input type="text" class="form-control" name="homemsg_subject" id="homemsg_subject" placeholder="Subject" required <?php if (isset($_GET['homemsg_subject'])) echo $homemsg_subject; ?>" />
                                    </div>

                                </div>

                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="homemsg_message" id="homemsg_message" readonly="" value="<?php if (isset($_GET['homemsg_message'])) echo $homemsg_message; ?>" />

                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <label>Action</label>
                                    <select class="form-control select2" name="homemsg_action" id="homemsg_action <?php if (isset($_GET['homemsg_action'])) echo $homemsg_action; ?>" />
                                    <option>Yes</option>
                                    <option>No</option>
                                    </select>       
                                </div>

                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="homemsg_remarks" id="homemsg_remarks" placeholder="Remarks" <?php if (isset($_GET['homemsg_remarks'])) echo $homemsg_remarks; ?>" />
                                </div>
                                
                                <div class="form-group mt-3">
                            <input type="submit" value="Update" class="btn btn-primary" Name="Update">
                            <input type="submit" value="Delete" class="btn btn-primary" Name="Delete">


                            <!-- /.row -->
                            <!-- /.row -->
                        </div>
                                
                                <!-- /.card-body -->
                              
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
