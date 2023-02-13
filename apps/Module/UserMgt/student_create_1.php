<?php 
require_once '../../../../config/config.php';
$template = new template(); 
									
if(isset($_SESSION['login_group'])&& ( $_SESSION['login_group']=='admin'))
{
			  
		$sql = 'SELECT student_nic,student_fname,student_lname,class_id,student_address,student_email,student_tp,student_mobile,student_gender,student_datejoin,student_dateresign,student_description,student_cv,student_pic FROM tbl_student WHERE student_email = :param_email';

		$stmt = $conn->prepare($sql);
		$stmt->execute(array(':param_email'=>$_SESSION['username'] ));

				while ($row = $stmt->fetch(PDO::FETCH_NUM))
				{			
					$student_nic=$row[0];  
					$student_fname=$row[1];  
					$student_lname=$row[2];  
					$class_id=$row[3];  
					$student_address=$row[4];  
					$student_email=$row[5];  
					$student_tp=$row[6];  
					$student_mobile=$row[7];  
					$student_gender=$row[8];  
					$student_datejoin=$row[9];  
					$student_dateresign=$row[9];  
					$student_description=$row[10];
					$student_cv=$row[11];  
					$student_pic=$row[12];		
				}							 

} else {
	header('Location:'.BASE_URL.'apps/view/admin/Error_page.php');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- <head> --->
	<?php $template->getHead(); ?>
<!-- </head> --->

<body>
    
	<!-- <header> --->   
		<?php $template->getHeader(); ?>
	<!-- END #header -->
    
    <div id="main_content">           
        <div id="contact_area">           
            <div class="container">
            
            <h2 id="contact">Student Management</h2>
            
            <div id="contact_info">
                <div id="contact_info_left">
               <form  enctype="multipart/form-data" action="../../../controller/admin/_student.php" method="post" id="contact_form" name="student-register-form-id">
                        <fieldset>  													
						<ol>
                            <li><label for="name">NIC</label>
							<input type="text" name="student_nic" size="54" maxlength="" id="student_nic"  autofocus/></li>
							<li><label for="email">First name</label>
							<input type="text" name="student_fname" size="54" maxlength="" id="student_fname"  required/></li>
							<li><label for="email">Last name</label>
							<input type="text" name="student_lname" size="54" maxlength="" id="student_lname"  required/></li>
                            <li><label for="name">Class</label>							
								<?php
									$ops='';
									$pdo = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,DB_USER,DB_PASS);
									$stmt = $pdo->query("select class_id,class_name from tbl_class");
									while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
										$ops.= "<option value='" . $row['class_id'] . "'>" . $row['class_name'] . "</option>";
									}
								?>																				
								<select name="class_id" required>
									<?php echo $ops;?>
								</select>								
								<a href="../../admin/class/class_create.php">Create class</a> 							
							</li>							
							<li><label for="message">Address</label>
							<textarea name="student_address" rows="7" cols="42" id="student_address"  ></textarea></li>
                            <li><label for="name">E mail</label>
							<input type="email" name="student_email" size="54" maxlength="" id="student_email"  /></li>
                            <li><label for="name">Telephone</label>
							<input type="number" name="student_tp" size="54" maxlength="" id="student_tp" /></li>
                            <li><label for="name">Mobile</label>
							<input type="number" name="student_mobile" size="54" maxlength="" id="student_mobile" required/></li>
                            <li><label for="name">Gender</label>
							<input type="text" name="student_gender" size="54" maxlength="" id="student_gender" required/></li>
                            <li><label for="name">Date join</label>
							<input type="date" name="student_datejoin" size="54" maxlength="" id="student_datejoin" required/></li>
                            <li><label for="name">Date resign</label>
							<input type="date" name="student_dateresign" size="54" maxlength="" id="student_dateresign" /></li>
                            <li><label for="name">Description</label>
							<textarea name="student_description" rows="7" cols="42" id="student_description"  /></textarea></li>
                            <li><label for="name">CV</label>
							<input type="file" name="student_cv" size="54" maxlength="" id="student_cv" /></li>
                            <li><label for="name">Picture</label>
							<input type="file" name="student_pic" size="54" maxlength="" id="student_pic" />					
							<li>
								<input type="submit" value="Create"  id="student_create" name="student[create]" />
								<input type="submit" value="Update"  id="student_edit" name="student[edit]" />
								<input type="submit" value="Remove"  id="student_remove" name="student[remove]" />
							</li>
						</ol>
                        </fieldset>
                    </form>
                    
                </div> <!-- END #contact_info_left -->
 
                <div id="contact_info_right">
					<div id="location_map">
						<?php 
						if(isset($_SESSION['info'])) 
						{
							foreach ((array)$_SESSION['info'] as $info)
							{     
								echo $info;
								unset($_SESSION['info']);
							} 
						}
								
						if(isset($_SESSION['error'])) 
						{
							foreach ((array)$_SESSION['error'] as $error)
							{     
								echo $error; 
								unset($_SESSION['error']);						
							} 
						}						
						?>                    
					</div>                                     
                </div> <!-- END #contact_info_right -->  
                
            </div> <!-- END #contact_info -->            
            </div> <!-- END .container -->           
        </div> <!-- END #contact_area -->
        
    </div> 
	<!-- END #main_content -->
    
	<!-- BEGIN #footer -->
		<?php $template->getFooter(); ?>	
	<!-- END #footer -->
    
</body>
</html>