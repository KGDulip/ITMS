<?php

// get database connection
require_once '../../Control/config.php';


$User_Reg_Email = filter_var($_POST['User_Reg_Email'], FILTER_SANITIZE_STRING);
$User_Reg_Password = filter_var(sha1($_POST['User_Reg_Password']), FILTER_SANITIZE_STRING); //User PW convert to SHA1

try {
    $query = "
SELECT User_Reg_ID, User_Reg_Email, User_Reg_Password, User_Reg_Is_Active, User_Reg_Photo, User_Reg_Role
FROM tbl_user_registration
WHERE User_Reg_Is_Active = 'Active' and User_Reg_Email = '".$User_Reg_Email."'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    //echo $query; if we need to chk above query is Ok
    if (count($result)) {
        $row = $result[0];
        $dbPassword = $row['User_Reg_Password'];

        //if (password_verify($this->User_Reg_Password, $dbPassword)) {
        if ($User_Reg_Password == $dbPassword) {
            $_SESSION['User_Reg_Email'] = $row['User_Reg_Email'];
            $_SESSION['User_Reg_Photo'] = $row['User_Reg_Photo'];
            $_SESSION['User_Reg_Role'] = $row['User_Reg_Role'];
            

           $_SESSION['SUCCESS'][] = "Welcome " . $_SESSION['User_Reg_Email']. $_SESSION['User_Reg_Role'];
           if ( $_SESSION['User_Reg_Role'] == 'Administrator') {
           header("Location: " . "/ITMS/apps/View/UserMgt/Home_Admin.php");
           } else if ( $_SESSION['User_Reg_Role'] == 'Trainee'){
           header("Location: " . "/ITMS/apps/View/UserMgt/Home_Trainee.php"); 
           } else if ( $_SESSION['User_Reg_Role'] == 'Training Officer'){
           header("Location: " . "/ITMS/apps/View/UserMgt/Home_TOfficer.php");
           }
           
        } else {
            $_SESSION['ERROR'][] = "invalid user name/password login denied !";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            
        }
    } else {
        $_SESSION['ERROR'][] = "invalid user name/password login denied";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        
    }
} catch (Exception $ex) {
    $_SESSION['ERROR'][] = $ex->getMessage();
    header("Location: " . $_SERVER['HTTP_REFERER']);
    
}
?>

