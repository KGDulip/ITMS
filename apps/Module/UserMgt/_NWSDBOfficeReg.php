<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Sec_Cost_Code_ID = $_POST['Sec_Cost_Code_ID'];
$Sec_Name = $_POST['Sec_Name'];
$Sec_Head = $_POST['Sec_Head'];
$Sec_Autho_OfficerEmpNo = $_POST['Sec_Autho_OfficerEmpNo'];
$Sec_Address = $_POST['Sec_Address'];
$Sec_City = $_POST['Sec_City'];
$Sec_Province = $_POST['Sec_Province'];
$Sec_District = $_POST['Sec_District'];
$Sec_RSC = $_POST['Sec_RSC'];
$Sec_Manager_Office = $_POST['Sec_Manager_Office'];
$Sec_Mobile = $_POST['Sec_Mobile'];
$Sec_Fax = $_POST['Sec_Fax'];
$Sec_Telephone = $_POST['Sec_Telephone'];
$Sec_Email = $_POST['Sec_Email'];
$Sec_Autho_OfficerDesig = $_POST['Sec_Autho_OfficerDesig'];
$Sec_Autho_OfficerName = $_POST['Sec_Autho_OfficerName'];

// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_section(Sec_Cost_Code_ID,Sec_Name,Sec_Head,Sec_Autho_OfficerEmpNo,Sec_Address,Sec_City,Sec_Province,Sec_District,Sec_RSC,Sec_Manager_Office,Sec_Mobile,Sec_Fax,Sec_Telephone,Sec_Email,Sec_Autho_OfficerDesig,Sec_Autho_OfficerName) '
                . 'VALUES(:Sec_Cost_Code_ID,:Sec_Name,:Sec_Head,:Sec_Autho_OfficerEmpNo,:Sec_Address,:Sec_City,:Sec_Province,:Sec_District,:Sec_RSC,:Sec_Manager_Office,:Sec_Mobile,:Sec_Fax,:Sec_Telephone,:Sec_Email,:Sec_Autho_OfficerDesig,:Sec_Autho_OfficerName)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Sec_Cost_Code_ID' => $Sec_Cost_Code_ID,
            'Sec_Name' => $Sec_Name,
            'Sec_Head' => $Sec_Head,
            'Sec_Autho_OfficerEmpNo' => $Sec_Autho_OfficerEmpNo,
            'Sec_Address' => $Sec_Address,
            'Sec_City' => $Sec_City,
            'Sec_Province' => $Sec_Province,
            'Sec_District' => $Sec_District,
            'Sec_RSC' => $Sec_RSC,
            'Sec_Manager_Office' => $Sec_Manager_Office,
            'Sec_Mobile' => $Sec_Mobile,
            'Sec_Fax' => $Sec_Fax,
            'Sec_Telephone' => $Sec_Telephone,
            'Sec_Email' => $Sec_Email,
            'Sec_Autho_OfficerDesig' => $Sec_Autho_OfficerDesig,
            'Sec_Autho_OfficerName' => $Sec_Autho_OfficerName));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $Sec_Name;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $Sec_Name;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_section '
                . ' SET Sec_Name=:Sec_Name, Sec_Head=:Sec_Head, Sec_Autho_OfficerEmpNo=:Sec_Autho_OfficerEmpNo, Sec_Autho_OfficerName=:Sec_Autho_OfficerName, Sec_Autho_OfficerDesig=:Sec_Autho_OfficerDesig, Sec_Address=:Sec_Address, Sec_City=:Sec_City, Sec_Province=:Sec_Province, Sec_District=:Sec_District, Sec_RSC=:Sec_RSC, Sec_Manager_Office=:Sec_Manager_Office, Sec_Telephone=:Sec_Telephone, Sec_Mobile=:Sec_Mobile, Sec_Fax=:Sec_Fax, Sec_Email=:Sec_Email WHERE Sec_Cost_Code_ID=:Sec_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Sec_Cost_Code_ID' => $Sec_Cost_Code_ID,
            'Sec_Name' => $Sec_Name,
            'Sec_Head' => $Sec_Head,
            'Sec_Autho_OfficerEmpNo' => $Sec_Autho_OfficerEmpNo,
            'Sec_Autho_OfficerName' => $Sec_Autho_OfficerName,
            'Sec_Autho_OfficerDesig' => $Sec_Autho_OfficerDesig,
            'Sec_Address' => $Sec_Address,
            'Sec_City' => $Sec_City,
            'Sec_Province' => $Sec_Province,
            'Sec_District' => $Sec_District,
            'Sec_RSC' => $Sec_RSC,
            'Sec_Manager_Office' => $Sec_Manager_Office,
            'Sec_Telephone' => $Sec_Telephone,
            'Sec_Mobile' => $Sec_Mobile,
            'Sec_Fax' => $Sec_Fax,
            'Sec_Email' => $Sec_Email));
           

        $_SESSION['success'][] = 'Updated Cost Code:' . $Sec_Cost_Code_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_section '
                . ' WHERE Sec_Cost_Code_ID=:Sec_Cost_Code_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Sec_Cost_Code_ID' => $Sec_Cost_Code_ID));

        $_SESSION['success'][] = 'Removed Cost Code:' . $Sec_Cost_Code_ID;
    }
    // Display the errors 
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $Sec_Cost_Code_ID.'- National ID number Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>