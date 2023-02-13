<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Project_Cost_Code_ID = $_POST['Project_Cost_Code_ID'];
$Project_Name = $_POST['Project_Name'];
$Project_Head = $_POST['Project_Head'];
$Project_Autho_OfficerEmpNo = $_POST['Project_Autho_OfficerEmpNo'];
$Project_Autho_OfficerName = $_POST['Project_Autho_OfficerName'];
$Project_Autho_OfficerDesig = $_POST['Project_Autho_OfficerDesig'];
$Project_Address = $_POST['Project_Address'];
$Project_City = $_POST['Project_City'];
$Project_Province = $_POST['Project_Province'];
$Project_District = $_POST['Project_District'];
$Project_RSC = $_POST['Project_RSC'];
$Project_Manager_Office = $_POST['Project_Manager_Office'];
$Project_Telephone = $_POST['Project_Telephone'];
$Project_Mobile = $_POST['Project_Mobile'];
$Project_Fax = $_POST['Project_Fax'];
$Project_Email = $_POST['Project_Email'];

// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_nwsdbproject(Project_Cost_Code_ID,Project_Name,Project_Head,Project_Autho_OfficerEmpNo,Project_Autho_OfficerName,Project_Autho_OfficerDesig,Project_Address,Project_City,Project_Province,Project_District,Project_RSC,Project_Manager_Office,Project_Telephone,Project_Mobile,Project_Fax,Project_Email) '
                . 'VALUES(:Project_Cost_Code_ID,:Project_Name,:Project_Head,:Project_Autho_OfficerEmpNo,:Project_Autho_OfficerName,:Project_Autho_OfficerDesig,:Project_Address,:Project_City,:Project_Province,:Project_District,:Project_RSC,:Project_Manager_Office,:Project_Telephone,:Project_Mobile,:Project_Fax,:Project_Email)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Cost_Code_ID' => $Project_Cost_Code_ID,
            'Project_Name' => $Project_Name,
            'Project_Head' => $Project_Head,
            'Project_Autho_OfficerEmpNo' => $Project_Autho_OfficerEmpNo,
            'Project_Autho_OfficerName' => $Project_Autho_OfficerName,
            'Project_Autho_OfficerDesig' => $Project_Autho_OfficerDesig,
            'Project_Address' => $Project_Address,
            'Project_City' => $Project_City,
            'Project_Province' => $Project_Province,
            'Project_District' => $Project_District,
            'Project_RSC' => $Project_RSC,
            'Project_Manager_Office' => $Project_Manager_Office,
            'Project_Telephone' => $Project_Telephone,
            'Project_Mobile' => $Project_Mobile,
            'Project_Fax' => $Project_Fax,
            'Project_Email' => $Project_Email));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $Project_Name;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $Project_Name;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_nwsdbproject '
                . ' SET Project_Name=:Project_Name, Project_Head=:Project_Head, Project_Autho_OfficerEmpNo=:Project_Autho_OfficerEmpNo, Project_Email=:Project_Email, Project_Fax=:Project_Fax, Project_Autho_OfficerName=:Project_Autho_OfficerName, Project_Autho_OfficerDesig=:Project_Autho_OfficerDesig, Project_Address=:Project_Address, Project_City=:Project_City, Project_Province=:Project_Province, Project_District=:Project_District, Project_Telephone=:Project_Telephone, Project_RSC=:Project_RSC, Project_Manager_Office=:Project_Manager_Office, Project_Mobile=:Project_Mobile WHERE Project_Cost_Code_ID=:Project_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Cost_Code_ID' => $Project_Cost_Code_ID,
            'Project_Name' => $Project_Name,
            'Project_Head' => $Project_Head,
            'Project_Autho_OfficerEmpNo' => $Project_Autho_OfficerEmpNo,
            'Project_Email' => $Project_Email,
            'Project_Fax' => $Project_Fax,
            'Project_Autho_OfficerName' => $Project_Autho_OfficerName,
            'Project_Autho_OfficerDesig' => $Project_Autho_OfficerDesig,
            'Project_Address' => $Project_Address,
            'Project_City' => $Project_City,
            'Project_Province' => $Project_Province,
            'Project_District' => $Project_District,
            'Project_Telephone' => $Project_Telephone,
            'Project_RSC' => $Project_RSC,
            'Project_Manager_Office' => $Project_Manager_Office,
            'Project_Mobile' => $Project_Mobile));
           
        $_SESSION['success'][] = 'Updated Project Cost Code :' . $Project_Cost_Code_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_nwsdbproject '
                . ' WHERE Project_Cost_Code_ID=:Project_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Cost_Code_ID' => $Project_Cost_Code_ID));

        $_SESSION['success'][] = 'Removed Project Cost Code :' . $Project_Cost_Code_ID;
    }
    // Display the errors 
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $Project_Cost_Code_ID.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>