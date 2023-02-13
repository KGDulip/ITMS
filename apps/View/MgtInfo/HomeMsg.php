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
                                <h3 class="card-title">User Registration</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/MgtInfo/_HomeMsg.php">
                                <div class="row">
                                    
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="homemsg_name" class="form-control" id="homemsg_name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="homemsg_email" id="homemsg_email" placeholder="Your Email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mt-3">
                                        <input type="text" name="homemsg_mobile" class="form-control" id="homemsg_mobile" placeholder="Your Mobile" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <input type="text" class="form-control" name="homemsg_subject" id="homemsg_subject" placeholder="Subject" required>
                                    </div>

                                </div>

                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="homemsg_message" id="homemsg_message" placeholder="Message" required>

                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" value="Send Message" class="btn btn-primary" Name="New">


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
