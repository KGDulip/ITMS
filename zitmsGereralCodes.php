<?php
//Get Session Data
$sql = "Select * from  tbl_user_registration WHERE User_Reg_Email = '".$_SESSION['USEREMAIL']."'";

<?php echo $_GET["Stu_Student_NIC"];
?>;

//Get Session Data
<?php echo $_SESSION['USEREMAIL'] ?>;

Recall Value 
value="<?php echo $student['Stu_Student_NIC']; ?>" readonly=""

<input type="text" name="Disci_Stu_ID" class="form-control" id="Disci_Stu_ID" value = "<?php echo $_SESSION['USEREMAIL'] ?>">;

AND Stu_Tr_Certificate_No = '') ORDER By Stu_Student_Surname ASC

Inner Join
$sql = "SELECT * FROM tbl_stu_internship_request INNER JOIN tbl_training_request ON tbl_stu_internship_request.Stu_Subject_Stream = tbl_training_request.Vacan_Subject_Area AND tbl_stu_internship_request.Stu_Position = tbl_training_request.Vacan_Position AND tbl_stu_internship_request.Stu_District = tbl_training_request.Vacan_Office_District AND tbl_stu_internship_request.Stu_Gender = tbl_training_request.Vacan_Gender AND tbl_stu_internship_request.Stu_Reques_Acceptance = 'Accept' AND tbl_stu_internship_request.Stu_Assign_Office_ID = '0' AND tbl_stu_internship_request.Stu_Assign_Vacn_ID = '0' ORDER By Stu_Request_Date ASC;";

$sql = "Select * from  tbl_stu_internship_request INNER JOIN 
tbl_attend_record 
ON tbl_stu_internship_request.Stu_Student_ID = tbl_attend_record.Attend_Student_ID 
AND tbl_stu_internship_request.Stu_Assign_Office_ID = '".$_SESSION['USERREGID']."' 
AND tbl_stu_internship_request.Stu_Tr_Certificate_No ='' 
AND tbl_attend_record.Attend_Certification = 'Pending' 
ORDER By Stu_Student_Surname ASC";

going to back


<button type="button" class="btn btn-primary" onclick="history.back();">Back</button>

Direct to page
<a href="View_Current_Trainees_Insti.php" class="btn btn-primary">Back</a>


if (empty($message)){
$db = dbConn();
$Password = sha1($Password); // password ency method is sha1
$sql="SELECT * FROM tbl_user_registration WHERE User_Reg_Email = '$UserName' AND User_Reg_Password = '$Password' AND User_Reg_Is_Active = 'Active'";
$result = $db->query($sql);
if ($result->num_rows == 1){
$row = $result->fetch_assoc();
$_SESSION['SURNAME']= $row['User_Reg_Name_Surname'];
$_SESSION['USERREGID']= $row['User_Reg_ID'];
$_SESSION['USEID']= $row['User_ID'];
$_SESSION['USERACTIVE']= $row['User_Reg_Is_Active'];
$_SESSION['USERROLE']= $row['User_Reg_Role'];
$_SESSION['USEREMAIL']= $row['User_Reg_Email'];
header("Location:dashboard.php");
} else {
$message['Password'] = "User Name & Password Invailed";
}

}


Link file to table column

<td><a href="../../assets/upload/AssignLetters/<?php echo $row['Stu_Assign_Letter']; ?>" target="_blank">Assign Letter</a>;</td>


Sussfull page temp

<div class="card">
    <div class="card-header text-center bg-success text-white">
        <h3 class="card-title">
            Successfully
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body text-center">

        <a href="http://localhost/ITM/system/dashboard.php" class="btn btn-primary">Home Page</a>
    </div>
</div>


//if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (isset($_POST['Update'])) {

extract($_POST);
$SQL = "UPDATE `tbl_user_role` SET User_Role_Description = '$User_Role_Description' WHERE User_Role_ID = '$User_Role_ID'";
$DB = dbConn();
$DB->query($SQL);
header("Location:sucesspage_Admin.php");
}

if (isset($_POST['Delete'])) {

extract($_POST);
$SQL = "DELETE FROM tbl_user_role WHERE User_Role_ID = '$User_Role_ID'";
$DB = dbConn();
$DB->query($SQL);
header("Location:sucesspage_Admin.php");
}


If Accept Update / If Delete Reject

if ($_SERVER['REQUEST_METHOD'] == "POST") {

extract($_POST);

if ($Certifi_Prepare_TO = 'Accept') {

$SQL = "UPDATE `tbl_certificate_register` SET Certifi_Status = '$Certifi_Status' WHERE Certifi_ID = '$Certifi_ID'";
$DB = dbConn();
$DB->query($SQL);
//header("Location:sucesspage_trainingMgt.php");
}
if ($Certifi_Prepare_TO = 'Reject') {


$SQL = "DELETE FROM tbl_certificate_register WHERE Certifi_ID = '$Certifi_ID'";
$DB = dbConn();
$DB->query($SQL);
header("Location:sucesspage_Admin.php");
}
}


Dashboard Link
<a href="<?php echo SITE_URL; ?>traineesMgt/View_TraineeRequest.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

Copy to All Menu - TO Trainee Admin...
<li class="nav-item d-none d-sm-inline-block">
    <a href="http://localhost/ITM/" class="nav-link">CFK.Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="<?php echo SITE_URL; ?>dashboard.php" class="nav-link">My Dashboard</a>
</li>

font colour red
style="color: red"

Background Black
style="background-color:black;"


Office Cost Code to Office Name


<div class="form-group">

    <?php
    // Connect to database for quary Institute
    $con = dbConn();

    // mysqli_connect("servername","username","password","database_name")
    // Get all the categories from category table
    $sql = "SELECT * FROM `tbl_nwsdb_office`";
    $all_categories = mysqli_query($con, $sql);

    // Ended for quary Institute
    ?>

    <label>Vacancy Office</label>

    <select class="form-control select2" name="Vacan_CostCode" id="Vacan_CostCode" readonly="">
        <?php
        // use a while loop to fetch data
        // from the $all_categories variable
        // and individually display as an option
        while ($category = $all_categories->fetch_assoc()) {
            ?>
            <option value="<?php
            echo $category["Sec_ID"];
            // The value we usually set is the primary key
            ?>" <?php if ($category["Sec_ID"] == $student['Vacan_CostCode']) { ?>Selected <?php } ?> >
                        <?php
                        echo $category["Sec_Name"];
                        // To show the category name to the user
                        ?>
            </option>
            <?php
        }
        // While loop must be terminated
        ?>
    </select>   

</div>      



Add or - Delete Date

$today = date('d-m-Y');
$next_date = date('d-m-Y', strtotime($today . ' - 90 days'));
$next_date;

AND Stu_Training_End_Date < '$next_date'


$sql = "Select * from  tbl_training_request INNER JOIN tbl_subject_area ON tbl_training_request.Vacan_Subject_Area = tbl_subject_area.Sub_Area_ID INNER JOIN tbl_trainee_desig ON tbl_training_request.Vacan_Position = tbl_trainee_desig.Trainee_Desig_ID AND tbl_training_request.Vacan_Is_Fill = 'Accept' AND tbl_training_request.Vacan_CostCode = '".$_SESSION['USERREGID']."' ORDER By Vacan_Commence_Date ASC";

<div class="inner">
    <?php
    $SQL = "Select COUNT(User_ID) as newtrainee from tbl_user_registration WHERE User_Reg_Is_Active = 'Active'";
    $DB = dbConn();
    $result = $DB->query($SQL);
    $row = $result->fetch_assoc();
    echo $row['newtrainee'];
    ?>
    <p>Total Active Users</p>

</div>

    Validating input is blank or 10

    $message = array();
    $Certifi_No = inputClean($Certifi_No);

    if (empty($Certifi_No)) {
        $message['Certifi_No'] = "The NIC should not be empty";
    }
    if (!empty($Certifi_No)) {

        if (strlen($Certifi_No) != 10) {
            $message['Certifi_No'] = "Certificate Number Length should be 10";
        }
    }