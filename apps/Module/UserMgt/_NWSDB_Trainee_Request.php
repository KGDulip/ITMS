<?php

//call config file for DB connection details
require_once '../../Control/config_NWSDB.php';

// Get the values from view page and assign to variables
$Vacan_ID = $_POST['Vacan_ID'];
$Vacan_Subject_Area = $_POST['Vacan_Subject_Area'];
$Vacan_Position = $_POST['Vacan_Position'];
$Vacan_Gender = $_POST['Vacan_Gender'];
$Vacan_Commence_Date = $_POST['Vacan_Commence_Date'];
$Vacan_Fulfill_Date = $_POST['Vacan_Fulfill_Date'];
// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_vacancies(Vacan_ID,Vacan_Subject_Area,Vacan_Position,Vacan_Gender,Vacan_Commence_Date,Vacan_Fulfill_Date) '
                . 'VALUES(:Vacan_ID,:Vacan_Subject_Area,:Vacan_Position,:Vacan_Gender,:Vacan_Commence_Date,:Vacan_Fulfill_Date)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID,
            'Vacan_Subject_Area' => $Vacan_Subject_Area,
            'Vacan_Position' => $Vacan_Position,
            'Vacan_Gender' => $Vacan_Gender,
            'Vacan_Commence_Date' => $Vacan_Commence_Date,
            'Vacan_Fulfill_Date' => $Vacan_Fulfill_Date,
            
            ));
        //Disconnect from DB
        $conn = null;
        
        //  Display message
        $_SESSION['success'][] = 'Created Trainee:' . $Vacan_ID;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_vacancies '
                . ' SET Vacan_Subject_Area=:Vacan_Subject_Area, Vacan_Position=:Vacan_Position, Vacan_Gender=:Vacan_Gender, Vacan_Commence_Date=:Vacan_Commence_Date, Vacan_Fulfill_Date=:Vacan_Fulfill_Date WHERE Vacan_ID=:Vacan_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID,
            'Vacan_Subject_Area' => $Vacan_Subject_Area,
            'Vacan_Position' => $Vacan_Position,
            'Vacan_Gender' => $Vacan_Gender,
            'Vacan_Commence_Date' => $Vacan_Commence_Date,
            'Vacan_Fulfill_Date' => $Vacan_Fulfill_Date
            ));
           

        $_SESSION['success'][] = 'Updated NIC:' . $Vacan_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_vacancies '
                . ' WHERE Vacan _ID=:Vacan _ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Vacan_ID' => $Vacan_ID));

        $_SESSION['success'][] = 'Removed NIC :' . $Vacan_ID;
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
