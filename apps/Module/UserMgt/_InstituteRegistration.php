<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Insti_ID = $_POST['Insti_ID'];
$Insti_Name = $_POST['Insti_Name'];
$Insti_Branch = $_POST['Insti_Branch'];
$Insti_Head_Position = $_POST['Insti_Head_Position'];
$Insti_Address = $_POST['Insti_Address'];
$Insti_Nearest_City = $_POST['Insti_Nearest_City'];
$Insti_District = $_POST['Insti_District'];
$Insti_Province = $_POST['Insti_Province'];
$Insti_Email = $_POST['Insti_Email'];
$Insti_Telephone = $_POST['Insti_Telephone'];
$Insti_Web = $_POST['Insti_Web'];
// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_institute_registration(Insti_Name,Insti_Branch,Insti_Head_Position,Insti_Address,Insti_Nearest_City,Insti_District,Insti_Province,Insti_Email,Insti_Telephone,Insti_Web) '
                . 'VALUES(:Insti_Name,:Insti_Branch,:Insti_Head_Position,:Insti_Address,:Insti_Nearest_City,:Insti_District,:Insti_Province,:Insti_Email,:Insti_Telephone,:Insti_Web)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Insti_Name' => $Insti_Name,
            'Insti_Branch' => $Insti_Branch,
            'Insti_Head_Position' => $Insti_Head_Position,
            'Insti_Address' => $Insti_Address,
            'Insti_Nearest_City' => $Insti_Nearest_City,
            'Insti_District' => $Insti_District,
            'Insti_Province' => $Insti_Province,
            'Insti_Email' => $Insti_Email,
            'Insti_Telephone' => $Insti_Telephone,
            'Insti_Web' => $Insti_Web));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $Insti_Name;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $Insti_Name;
    }

    if (isset($_POST['Update'])) {   /// This used to update values
        $sql = 'UPDATE tbl_institute_registration '
                . 'SET Insti_Branch=:Insti_Branch,Insti_Head_Position=:Insti_Head_Position,Insti_Address=:Insti_Address,Insti_Nearest_City=:Insti_Nearest_City,Insti_District=:Insti_District,Insti_Province=:Insti_Province,Insti_Email=:Insti_Email, Insti_Telephone=:Insti_Telephone,Insti_Web=:Insti_Web WHERE Insti_Name=:Insti_Name';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Insti_Name' => $Insti_Name,'Insti_Branch' => $Insti_Branch,'Insti_Head_Position' => $Insti_Head_Position,'Insti_Address' => $Insti_Address,'Insti_Nearest_City' => $Insti_Nearest_City,'Insti_District' => $Insti_District,'Insti_Province' => $Insti_Province,'Insti_Email' => $Insti_Email,'Insti_Telephone' => $Insti_Telephone,'Insti_Web' => $Insti_Web));

        $_SESSION['success'][] = 'Updated  :' . $Insti_Name;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_institute_registration '
                . 'WHERE Insti_Name=:Insti_Name';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Insti_Name' => $Insti_Name));

        $_SESSION['success'][] = 'Removed :' . $Insti_Name;
    }
    // Display the errors 
    
    
    
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $Insti_Name.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
    
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
