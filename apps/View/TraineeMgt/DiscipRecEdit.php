<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();

if(isset($_GET['Disci_ID']))
{

$Disci_ID=$_GET['Disci_ID']; // Get the value from URL & assing to variable
$sql = 'SELECT Disci_ID, Disci_Office_ID, Disci_Stu_ID, Disci_Record_Date, Disci_Catagory, Disci_Descrip FROM tbl_discipline where Disci_ID  = :Disci_ID';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':Disci_ID'=>$Disci_ID));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$Disci_ID=$row[0];
					$Disci_Office_ID=$row[1];  
					$Disci_Stu_ID=$row[2];  
					$Disci_Record_Date=$row[3];
                                        $Disci_Catagory=$row[4];
                                        $Disci_Descrip=$row[5];
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
                                <h3 class="card-title">Disciplinary Violation</h3>
                            </div>
                            <!-- /.card-header -->
                            <form id="quickForm" method="POST" action="../../Module/TraineeMgt/_DiscipRec.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Disciplinary Violation ID</label>
                                                <input type="text" name="Disci_ID" class="form-control" id="Disci_ID" readonly="" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_ID;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Student ID</label>
                                                <input type="text" name="Disci_Stu_ID" class="form-control" id="Disci_Stu_ID" readonly="" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Stu_ID;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Disciplinary Violation Category</label>
                                                <select class="form-control select2" name="Disci_Catagory" id="Disci_Catagory" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Catagory;?>" />
                                                    <option>Late Arrival</option>
                                                    <option>Early Departure</option>
                                                    <option>Ignoring Superior’s Instruction</option>
                                                </select>
                                                <!-- <input type="text" name="Disci_Catagory" class="form-control" id="Disci_Catagory" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Catagory;?>" /> -->
                                            </div>
                                            
                                            

                                            <!-- /.form-group -->
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Office ID</label>
                                                <input type="text" name="Disci_Office_ID" class="form-control" id="Disci_Office_ID" readonly="" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Office_ID;?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="Disci_Record_Date" class="form-control" id="Disci_Record_Date" readonly="" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Record_Date;?>" />
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label>Disciplinary Violation Description</label>
                                                <input type="text" name="Disci_Descrip" class="form-control" id="Disci_Descrip" value="<?php if(isset($_GET['Disci_ID'])) echo $Disci_Descrip;?>" />
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
                                    <input type="submit" value="Update" class="btn btn-primary" Name="Update">
                                    <input type="submit" value="Delete" class="btn btn-primary" Name="Delete">
                                    
                                    <a href="View_DiscipRec.php" class="btn btn-primary">View</a>
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
