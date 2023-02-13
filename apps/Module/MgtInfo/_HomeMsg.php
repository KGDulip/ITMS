<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$homemsg_name = $_POST['homemsg_ID'];
$homemsg_name = $_POST['homemsg_name'];
$homemsg_email = $_POST['homemsg_email'];
$homemsg_mobile = $_POST['homemsg_mobile'];
$homemsg_subject = $_POST['homemsg_subject'];
$homemsg_message = $_POST['homemsg_message'];
$homemsg_action = $_POST['homemsg_action'];
$homemsg_remarks = $_POST['homemsg_remarks'];

// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_homemsg(homemsg_name,homemsg_email,homemsg_mobile,homemsg_subject,homemsg_message)'
                . 'VALUES(:homemsg_name,:homemsg_email,:homemsg_mobile,:homemsg_subject,:homemsg_message)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            
            'homemsg_name' => $homemsg_name,
            'homemsg_email' => $homemsg_email,
            'homemsg_mobile' => $homemsg_mobile,
            'homemsg_subject' => $homemsg_subject,
            'homemsg_message' => $homemsg_message));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $homemsg_name;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $homemsg_name;
    }

    if (isset($_POST['Update'])) {   /// This used to update values
        $sql = 'UPDATE tbl_homemsg '
                . 'SET homemsg_ID=:homemsg_ID,homemsg_name=:homemsg_name,homemsg_email=:homemsg_email,homemsg_mobile=:homemsg_mobile,homemsg_subject=:homemsg_subject,homemsg_message=:homemsg_message,homemsg_action=:homemsg_action,homemsg_remarks=:homemsg_remarks WHERE homemsg_ID=:homemsg_ID';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('homemsg_ID' => $homemsg_ID,'homemsg_name' => $homemsg_name,'homemsg_email' => $homemsg_email,'homemsg_mobile' => $homemsg_mobile,'homemsg_subject' => $homemsg_subject,'homemsg_message' => $homemsg_message,'homemsg_action' => $homemsg_action,'homemsg_remarks' => $homemsg_remarks));

        $_SESSION['success'][] = 'Updated  :' . $homemsg_ID;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_homemsg '
                . 'WHERE homemsg_name=:homemsg_name';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('homemsg_name' => $homemsg_name));

        $_SESSION['success'][] = 'Removed :' . $homemsg_name;
    }
    // Display the errors 
    
    
    
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $homemsg_name.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
    
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
