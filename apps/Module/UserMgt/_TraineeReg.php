<?php

//call config file for DB connection details
require_once '../../Control/config.php';

// Get the values from view page and assign to variables
$Stu_Student_NIC = $_POST['Stu_Student_NIC'];
$Stu_Student_Full_Name = $_POST['Stu_Student_Full_Name'];
$Stu_Student_Initial = $_POST['Stu_Student_Initial'];
$Stu_DOB = $_POST['Stu_DOB'];
$Stu_Institute_Name = $_POST['Stu_Institute_Name'];
$Stu_Institute_ID_No = $_POST['Stu_Institute_ID_No'];
$Stu_Academic_Year = $_POST['Stu_Academic_Year'];
$Stu_Internship_Period = $_POST['Stu_Internship_Period'];
$Stu_Email = $_POST['Stu_Email'];
$Stu_Nearest_City = $_POST['Stu_Nearest_City'];
$Stu_Mobile = $_POST['Stu_Mobile'];
//$Stu_NIC_Copy = $_POST['Stu_NIC_Copy'];
$Stu_Student_Surname = $_POST['Stu_Student_Surname'];
$Stu_Gender = $_POST['Stu_Gender'];
$Stu_Institute_Branch = $_POST['Stu_Institute_Branch'];
$Stu_Subject_Stream = $_POST['Stu_Subject_Stream'];
$Stu_Programme_Name= $_POST['Stu_Programme_Name'];
$Stu_Request_Commence_Date= $_POST['Stu_Request_Commence_Date'];
$Stu_Permanent_Address= $_POST['Stu_Permanent_Address'];
$Stu_District= $_POST['Stu_District'];
$Stu_Fixed_Tele_No= $_POST['Stu_Fixed_Tele_No'];
$Stu_Institute_Recommendation_Copy= $_POST['Stu_Institute_Recommendation_Copy'];
$Stu_Assign_Vacn_ID= $_POST['Stu_Assign_Vacn_ID'];
// Find the errors while insert/update/delete
try {
    if (isset($_POST['New'])) {  // If user press New button Insert a record to DB
        
        $_SESSION['success']=$_FILES["Stu_NIC_Copy"]["name"];
        $_SESSION['success']=$_FILES["Stu_NIC_Copy"];
//--------------------------------- File Upload Begin --------------------------------
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["Stu_NIC_Copy"]);
			$extension = end($temp);

			if(true)
			{
			  if ($_FILES["Stu_NIC_Copy"]["error"] > 0) {
				$_SESSION['success'][] =  "Return Code: " . $_FILES["Stu_NIC_Copy"]["error"] . "<br>";
				
			  } else {
				$_SESSION['success'][] =  "Upload: " . $_FILES["Stu_NIC_Copy"] . "<br>";				
			   if (file_exists("upload/" . $_FILES["Stu_NIC_Copy"])) {			   
				  $_SESSION['success'][] =  $_FILES["Stu_NIC_Copy"] . " already exists. ";				  
				} else {				
				  move_uploaded_file($_FILES["Stu_NIC_Copy"]["tmp_name"],  "upload/" . $_FILES["Stu_NIC_Copy"]);
				  $_SESSION['success'][] =  "Stored in: " . "upload/" . $_FILES["Stu_NIC_Copy"] . "<br>";				  
				  $Stu_NIC_Copy = $_FILES["Stu_NIC_Copy"];
				}
			  }
			} else {
			  $_SESSION['success'][] =  "Invalid file";
			  }
			//--------------------------------- File Upload End --------------------------------        
        
        
        
        $sql = 'INSERT INTO tbl_stu_internship_request(Stu_Student_NIC,Stu_Student_Full_Name,Stu_Student_Initial,Stu_DOB,Stu_Institute_Name,Stu_Institute_ID_No,Stu_Academic_Year,Stu_Internship_Period,Stu_Email,Stu_Nearest_City,Stu_Mobile,Stu_NIC_Copy,Stu_Student_Surname,Stu_Gender,Stu_Institute_Branch,Stu_Subject_Stream,Stu_Programme_Name,Stu_Request_Commence_Date,Stu_Permanent_Address,Stu_District,Stu_Fixed_Tele_No,Stu_Institute_Recommendation_Copy,Stu_Assign_Vacn_ID) '
                . 'VALUES(:Stu_Student_NIC,:Stu_Student_Full_Name,:Stu_Student_Initial,:Stu_DOB,:Stu_Institute_Name,:Stu_Institute_ID_No,:Stu_Academic_Year,:Stu_Internship_Period,:Stu_Email,:Stu_Nearest_City,:Stu_Mobile,:Stu_NIC_Copy,:Stu_Student_Surname,:Stu_Gender,:Stu_Institute_Branch,:Stu_Subject_Stream,:Stu_Programme_Name,:Stu_Request_Commence_Date,:Stu_Permanent_Address,:Stu_District,:Stu_Fixed_Tele_No,:Stu_Institute_Recommendation_Copy,:Stu_Assign_Vacn_ID)';
        // Connect to DB using connection string defined in config
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Stu_Student_NIC' => $Stu_Student_NIC,
            'Stu_Student_Full_Name' => $Stu_Student_Full_Name,
            'Stu_Student_Initial' => $Stu_Student_Initial,
            'Stu_DOB' => $Stu_DOB,
            'Stu_Institute_Name' => $Stu_Institute_Name,
            'Stu_Institute_ID_No' => $Stu_Institute_ID_No,
            'Stu_Academic_Year' => $Stu_Academic_Year,
            'Stu_Internship_Period' => $Stu_Internship_Period,
            'Stu_Email' => $Stu_Email,
            'Stu_Nearest_City' => $Stu_Nearest_City,
            'Stu_Mobile' => $Stu_Mobile,
            'Stu_NIC_Copy' => $Stu_NIC_Copy,
            'Stu_Student_Surname' => $Stu_Student_Surname,
            'Stu_Gender' => $Stu_Gender,
            'Stu_Institute_Branch' => $Stu_Institute_Branch,
            'Stu_Subject_Stream' => $Stu_Subject_Stream,
            'Stu_Programme_Name' => $Stu_Programme_Name,
            'Stu_Request_Commence_Date' => $Stu_Request_Commence_Date,
            'Stu_Permanent_Address' => $Stu_Permanent_Address,
            'Stu_District' => $Stu_District,
            'Stu_Fixed_Tele_No' => $Stu_Fixed_Tele_No,
            'Stu_Institute_Recommendation_Copy' => $Stu_Institute_Recommendation_Copy,
            'Stu_Assign_Vacn_ID' => $Stu_Assign_Vacn_ID
            ));
        //Disconnect from DB
        $conn = null;
        
        //  Display message
        $_SESSION['success'][] = 'Successfully Created Trainee:' . $Stu_Student_NIC . $Stu_Student_Full_Name;
    }

    if (isset($_POST['Update'])) {
        $sql = 'UPDATE tbl_stu_internship_request '
                . ' SET Stu_Student_Full_Name=:Stu_Student_Full_Name, Stu_Student_Initial=:Stu_Student_Initial, Stu_DOB=:Stu_DOB, Stu_Institute_Name=:Stu_Institute_Name, Stu_Institute_ID_No=:Stu_Institute_ID_No, Stu_Academic_Year=:Stu_Academic_Year, Stu_Internship_Period=:Stu_Internship_Period, Stu_Email=:Stu_Email, Stu_Nearest_City=:Stu_Nearest_City, Stu_Mobile=:Stu_Mobile, Stu_NIC_Copy=:Stu_NIC_Copy, Stu_Student_Surname=:Stu_Student_Surname, Stu_Gender=:Stu_Gender, Stu_Institute_Branch=:Stu_Institute_Branch, Stu_Subject_Stream=:Stu_Subject_Stream, Stu_Programme_Name=:Stu_Programme_Name, Stu_Request_Commence_Date=:Stu_Request_Commence_Date, Stu_Permanent_Address=:Stu_Permanent_Address, Stu_District=:Stu_District, Stu_Fixed_Tele_No=:Stu_Fixed_Tele_No, Stu_Institute_Recommendation_Copy=:Stu_Institute_Recommendation_Copy, Stu_Assign_Vacn_ID=:Stu_Assign_Vacn_ID WHERE Stu_Student_NIC=:Stu_Student_NIC';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Stu_Student_NIC' => $Stu_Student_NIC,
            'Stu_Student_Full_Name' => $Stu_Student_Full_Name,
            'Stu_Student_Initial' => $Stu_Student_Initial,
            'Stu_DOB' => $Stu_DOB,
            'Stu_Institute_Name' => $Stu_Institute_Name,
            'Stu_Institute_ID_No' => $Stu_Institute_ID_No,
            'Stu_Academic_Year' => $Stu_Academic_Year,
            'Stu_Internship_Period' => $Stu_Internship_Period,
            'Stu_Email' => $Stu_Email,
            'Stu_Nearest_City' => $Stu_Nearest_City,
            'Stu_Mobile' => $Stu_Mobile,
            'Stu_NIC_Copy' => $Stu_NIC_Copy,
            'Stu_Student_Surname' => $Stu_Student_Surname,
            'Stu_Gender' => $Stu_Gender,
            'Stu_Institute_Branch' => $Stu_Institute_Branch,
            'Stu_Subject_Stream' => $Stu_Subject_Stream,
            'Stu_Programme_Name' => $Stu_Programme_Name,
            'Stu_Request_Commence_Date' => $Stu_Request_Commence_Date,
            'Stu_Permanent_Address' => $Stu_Permanent_Address,
            'Stu_District' => $Stu_District,
            'Stu_Fixed_Tele_No' => $Stu_Fixed_Tele_No,
            'Stu_Institute_Recommendation_Copy' => $Stu_Institute_Recommendation_Copy,
            'Stu_Assign_Vacn_ID' => $Stu_Assign_Vacn_ID
            ));
           

        $_SESSION['success'][] = 'Updated NIC:' . $Stu_Student_NIC;
    }

    if (isset($_POST['Delete'])) {
        $sql = 'DELETE FROM tbl_stu_internship_request '
                . ' WHERE Stu_Student_NIC=:Stu_Student_NIC';

        $stmt = $conn->prepare($sql);
        $stmt->execute(array('Stu_Student_NIC' => $Stu_Student_NIC));

        $_SESSION['success'][] = 'Removed NIC :' . $Stu_Student_NIC;
    }
    // Display the errors 
} catch (Exception $ex) {
//    if ($ex->getCode()=='')
//    {
//        $_SESSION['error'][] = $Stu_Student_NIC.' Already exists try another';
//    }
//    else{
    $_SESSION['error'][] = $ex->getMessage();
    //}
}

// Redirect to view page
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
