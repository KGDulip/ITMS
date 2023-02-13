<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$User_Reg_ID = $_POST['User_Reg_ID'];
$User_Reg_Emp_Cost_No = $_POST['User_Reg_Emp_Cost_No'];
$User_Reg_No_Type = $_POST['User_Reg_No_Type'];
$User_Reg_Name_Initial = $_POST['User_Reg_Name_Initial'];
$User_Reg_Name_Surname = $_POST['User_Reg_Name_Surname'];
$User_Reg_Signature = $_POST['User_Reg_Signature'];
$User_Reg_Password = sha1($_POST['User_Reg_Password']);
$User_Reg_Photo = $_POST['User_Reg_Photo'];
$User_Reg_Role = $_POST['User_Reg_Role'];
$User_Reg_Is_Active = $_POST['User_Reg_Is_Active'];
$User_Reg_Designation = $_POST['User_Reg_Designation'];
$User_Reg_Email = $_POST['User_Reg_Email'];
// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        $sql = 'INSERT INTO tbl_user_registration(User_Reg_Emp_Cost_No,User_Reg_No_Type,User_Reg_Name_Initial,User_Reg_Name_Surname,User_Reg_Signature,User_Reg_Password,User_Reg_Photo,User_Reg_Role,User_Reg_Is_Active,User_Reg_Designation,User_Reg_Email) '
                . 'VALUES(:User_Reg_Emp_Cost_No,:User_Reg_No_Type,:User_Reg_Name_Initial,:User_Reg_Name_Surname,:User_Reg_Signature,:User_Reg_Password,:User_Reg_Photo,:User_Reg_Role,:User_Reg_Is_Active,:User_Reg_Designation,:User_Reg_Email)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('User_Reg_Emp_Cost_No' => $User_Reg_Emp_Cost_No,
            'User_Reg_No_Type' => $User_Reg_No_Type,
            'User_Reg_Name_Initial' => $User_Reg_Name_Initial,
            'User_Reg_Name_Surname' => $User_Reg_Name_Surname,
            'User_Reg_Signature' => $User_Reg_Signature,
            'User_Reg_Password' => $User_Reg_Password,
            'User_Reg_Photo' => $User_Reg_Photo,
            'User_Reg_Role' => $User_Reg_Role,
            'User_Reg_Is_Active' => $User_Reg_Is_Active,
            'User_Reg_Designation' => $User_Reg_Designation,
            'User_Reg_Email' => $User_Reg_Email));
        //Disconnect from DB
        $conn = null;
        
        //echo 'Created Section :' . $User_Reg_Emp_Cost_No;
        //  Display message
        $_SESSION['success'][] = 'Created :' . $User_Reg_Emp_Cost_No;
    }

    if (isset($_POST['Update'])) {   /// This used to update values
        $sql = 'UPDATE tbl_user_registration '
                . 'SET User_Reg_Password=:User_Reg_Password,User_Reg_Designation=:User_Reg_Designation WHERE User_Reg_Emp_Cost_No=:User_Reg_Emp_Cost_No';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('User_Reg_Emp_Cost_No' => $User_Reg_Emp_Cost_No,'User_Reg_Password' => $User_Reg_Password,'User_Reg_Designation' => $User_Reg_Designation));

        $_SESSION['success'][] = 'Updated  :' . $User_Reg_Emp_Cost_No;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_user_registration '
                . 'WHERE User_Reg_Emp_Cost_No=:User_Reg_Emp_Cost_No';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('User_Reg_Emp_Cost_No' => $User_Reg_Emp_Cost_No));

        $_SESSION['success'][] = 'Removed :' . $User_Reg_Emp_Cost_No;
    }
    // Display the errors 
    
    
    
} catch (Exception $ex) {
    if ($ex->getCode()=='23000')
    {
        $_SESSION['error'][] = $User_Reg_Emp_Cost_No.' Already exists try another';
    }
    else{
        echo $ex->getMessage();
    $_SESSION['error'][] = $ex->getMessage();
    }
    
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
