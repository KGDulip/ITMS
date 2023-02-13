<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Project_ID = $_POST['Project_ID'];
$Project_Cost_Code_ID = $_POST['Project_Cost_Code_ID'];
$Project_Name= $_POST['Project_Name'];
$Project_Head = $_POST['Project_Head'];
$Project_Autho_OfficerEmpNo = $_POST['Project_Autho_OfficerEmpNo'];
$Project_Address = $_POST['Project_Address'];
$Project_City = $_POST['Project_City'];
$Project_Province = $_POST['Project_Province'];
$Project_District = $_POST['Project_District'];
$Project_RSC = $_POST['Project_RSC'];
$Project_Manager_Office = $_POST['Project_Manager_Office'];
$Project_Mobile = $_POST['Project_Mobile'];
$Project_Fax = $_POST['Project_Fax'];
$Project_Telephone = $_POST['Project_Telephone'];
$Project_Email = $_POST['Project_Email'];
$Project_Autho_OfficerDesig = $_POST['Project_Autho_OfficerDesig'];
$Project_Autho_OfficerName = $_POST['Project_Autho_OfficerName'];

// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_nwsdbproject(Project_Cost_Code_ID,Project_Name,Project_Head,Project_Autho_OfficerEmpNo,Project_Address,Project_City,Project_Province,Project_District,Project_RSC,Project_Manager_Office,Project_Mobile,Project_Fax,Project_Telephone,Project_Email,Project_Autho_OfficerDesig,Project_Autho_OfficerName) '
                . 'VALUES(:Project_Name,:Project_Head,:Project_Autho_OfficerEmpNo,:Project_Address,:Project_City,:Project_Province,:Project_District,:Project_RSC,:Project_Manager_Office,:Project_Mobile,:Project_Fax,:Project_Telephone,:Project_Email,:Project_Autho_OfficerDesig,:Project_Autho_OfficerName)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Cost_Code_ID' => $Project_Cost_Code_ID,
            'Project_Name' => $Project_Name,
            'Project_Head' => $Project_Head,
            'Project_Autho_OfficerEmpNo' => $Project_Autho_OfficerEmpNo,
            'Project_Address' => $Project_Address,
            'Project_City' => $Project_City,
            'Project_Province' => $Project_Province,
            'Project_District' => $Project_District,
            'Project_RSC' => $Project_RSC,
            'Project_Manager_Office' => $Project_Manager_Office,
            'Project_Mobile' => $Project_Mobile,
            'Project_Fax' => $Project_Fax,
            'Project_Telephone' => $Project_Telephone,
            'Project_Email' => $Project_Email,
            'Project_Autho_OfficerDesig' => $Project_Autho_OfficerDesig,
            'Project_Autho_OfficerName' => $Project_Autho_OfficerName));
        //Disconnect from DB
        $conn = null;
        
        echo 'Created Projecttion :' . $Project_Cost_Code_ID;
        //  Display message
        $_SESSION['info'][] = 'Created Projecttion :' . $Project_Cost_Code_ID;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_nwsdbproject'
                . ' SET Project_Name=:Project_Name, Project_Autho_OfficerEmpNo=:Project_Autho_OfficerEmpNo, Project_Address=:Project_Address, Project_City=:Project_City, Project_Province=:Project_Province, Project_District=:Project_District, Project_RSC=:Project_RSC, Project_Manager_Office=:Project_Manager_Office, Project_Mobile=:Project_Mobile, Project_Fax=:Project_Fax, Project_Telephone=:Project_Telephone, Project_Email=:Project_Email, Project_Autho_OfficerDesig=:Project_Autho_OfficerDesig, Project_Autho_OfficerName=:Project_Autho_OfficerName WHERE Project_Cost_Code_ID=:Project_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Cost_Code_ID' => $Project_Cost_Code_ID,
            'Project_Name' => $Project_Name,
            'Project_Autho_OfficerEmpNo' => $Project_Autho_OfficerEmpNo,
            'Project_Address' => $Project_Address,
            'Project_City' => $Project_City,
            'Project_Province' => $Project_Province,
            'Project_District' => $Project_District,
            'Project_RSC' => $Project_RSC,
            'Project_Manager_Office' => $Project_Manager_Office,
            'Project_Mobile' => $Project_Mobile,
            'Project_Fax' => $Project_Fax,
            'Project_Telephone' => $Project_Telephone,
            'Project_Email' => $Project_Email,
            'Project_Autho_OfficerDesig' => $Project_Autho_OfficerDesig,
            'Project_Autho_OfficerName' => $Project_Autho_OfficerName));
          
           

        $_SESSION['success'][] = 'Updated Project Name:' . $Project_Name;
    }

    if (isset($_POST['class']['remove'])) {
        $sql = 'DELETE FROM tbl_section '
                . 'WHERE Project_Cost_Code_ID=:Project_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Project_Name' => $Project_Name));

        $_SESSION['info'][] = 'Removed class :' . $Project_Name;
    }
    // Display the errors 
} catch (Exception $ex) {
    echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
}

// Redirect to view page
//header("Location: " . $_SERVER['HTTP_REFERER']);
?>
