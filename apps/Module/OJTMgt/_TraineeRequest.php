<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Vacan_ID = $_POST['Vacan_ID'];
$Vacan_CostCode = $_POST['Vacan_CostCode'];
$Vacan_Subject_Area = $_POST['Vacan_Subject_Area'];
$Vacan_Position = $_POST['Vacan_Position'];
$Vacan_Gender = $_POST['Vacan_Gender'];
$Vacan_Commence_Date = $_POST['Vacan_Commence_Date'];
$Vacan_Period = $_POST['Vacan_Period'];
$Vacan_Remarks = $_POST['Vacan_Remarks'];
$Vacan_Fulfill_Date = $_POST['Vacan_Fulfill_Date'];
$Vacan_Is_Fill = $_POST['Vacan_Is_Fill'];
$Vacan_Assign_StuID = $_POST['Vacan_Assign_StuID'];


// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_trainee_request(Vacan_ID,Vacan_CostCode,Vacan_Subject_Area,Vacan_Position,Vacan_Gender,Vacan_Commence_Date,Vacan_Period,Vacan_Remarks,Vacan_Fulfill_Date,Vacan_Is_Fill,Vacan_Assign_StuID) '
                . 'VALUES(:Vacan_ID,:Vacan_CostCode,:Vacan_Subject_Area,:Vacan_Position,:Vacan_Gender,:Vacan_Commence_Date,:Vacan_Period,:Vacan_Remarks,:Vacan_Fulfill_Date,:Vacan_Is_Fill,:Vacan_Assign_StuID)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID,
            'Vacan_CostCode' => $Vacan_CostCode,
            'Vacan_Subject_Area' => $Vacan_Subject_Area,
            'Vacan_Position' => $Vacan_Position,
            'Vacan_Gender' => $Vacan_Gender,
            'Vacan_Commence_Date' => $Vacan_Commence_Date,
            'Vacan_Period' => $Vacan_Period,
            'Vacan_Remarks' => $Vacan_Remarks,
            'Vacan_Fulfill_Date' => $Vacan_Fulfill_Date,
            'Vacan_Is_Fill' => $Vacan_Is_Fill,
            'Vacan_Assign_StuID' => $Vacan_Assign_StuID
            ));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $Vacan_Subject_Area;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $Vacan_Subject_Area;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_trainee_request '
                . ' SET Vacan_CostCode=:Vacan_CostCode, Vacan_Subject_Area=:Vacan_Subject_Area, Vacan_Position=:Vacan_Position, Vacan_Gender=:Vacan_Gender, Vacan_Commence_Date=:Vacan_Commence_Date, Vacan_Period=:Vacan_Period, Vacan_Remarks=:Vacan_Remarks, Vacan_Fulfill_Date=:Vacan_Fulfill_Date, Vacan_Is_Fill=:Vacan_Is_Fill, Vacan_Assign_StuID=:Vacan_Assign_StuID WHERE Vacan_ID=:Vacan_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID,
            'Vacan_CostCode' => $Vacan_CostCode,
            'Vacan_Subject_Area' => $Vacan_Subject_Area,
            'Vacan_Position' => $Vacan_Position,
            'Vacan_Gender' => $Vacan_Gender,
            'Vacan_Commence_Date' => $Vacan_Commence_Date,
            'Vacan_Period' => $Vacan_Period,
            'Vacan_Remarks' => $Vacan_Remarks,
            'Vacan_Fulfill_Date' => $Vacan_Fulfill_Date,
            'Vacan_Is_Fill' => $Vacan_Is_Fill,
            'Vacan_Assign_StuID' => $Vacan_Assign_StuID
            ));
           

        $_SESSION['success'][] = 'Updated ID:' . $Vacan_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_trainee_request '
                . ' WHERE Vacan_ID=:Vacan_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID));

        $_SESSION['success'][] = 'Removed ID:' . $Vacan_ID;
    }
    // Display the errors 
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $Vacan_ID.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>