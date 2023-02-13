<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Disci_ID = $_POST['Disci_ID'];
$Disci_Office_ID = $_POST['Disci_Office_ID'];
$Disci_Stu_ID = $_POST['Disci_Stu_ID'];
$Disci_Record_Date = $_POST['Disci_Record_Date'];
$Disci_Catagory = $_POST['Disci_Catagory'];
$Disci_Descrip = $_POST['Disci_Descrip'];

// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_discipline(Disci_Office_ID,Disci_Stu_ID,Disci_Record_Date,Disci_Catagory,Disci_Descrip) '
                . 'VALUES(:Disci_Office_ID,:Disci_Stu_ID,:Disci_Record_Date,:Disci_Catagory,:Disci_Descrip)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Disci_Office_ID' => $Disci_Office_ID,
            'Disci_Stu_ID' => $Disci_Stu_ID,
            'Disci_Record_Date' => $Disci_Record_Date,
            'Disci_Catagory' => $Disci_Catagory,
            'Disci_Descrip' => $Disci_Descrip));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $Disci_Office_ID;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $Disci_ID;
    }

    if (isset($_POST['Update'])) {   /// This used to update values
        $sql = 'UPDATE tbl_discipline '
                . 'SET Disci_ID=:Disci_ID,Disci_Office_ID=:Disci_Office_ID,Disci_Stu_ID=:Disci_Stu_ID,Disci_Record_Date=:Disci_Record_Date,Disci_Catagory=:Disci_Catagory,Disci_Descrip=:Disci_Descrip WHERE Disci_ID=:Disci_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Disci_ID' => $Disci_ID,'Disci_Office_ID' => $Disci_Office_ID,'Disci_Stu_ID' => $Disci_Stu_ID,'Disci_Record_Date' => $Disci_Record_Date,'Disci_Catagory' => $Disci_Catagory,'Disci_Descrip' => $Disci_Descrip));

        $_SESSION['success'][] = 'Updated  :' . $Disci_Office_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_discipline '
                . 'WHERE Disci_ID=:Disci_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Disci_ID' => $Disci_ID));

        $_SESSION['success'][] = 'Removed :' . $Disci_ID;
    }
    // Display the errors 
    
    
    
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $Disci_Office_ID.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
    
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
