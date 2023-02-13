<?php
//call config file for DB connection details
require_once '../../Control/config.php';
// create a object for template class
$template = new template();
?>

<!DOCTYPE html>
<html lang="en">

    <?php $template->getHead(); ?>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Main Sidebar Container -->
           
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>		
<style>
	body{
		padding:10px;
	}
	.jumbotron{
		padding:40px;
		margin-bottom:10px;
	}
	#header{
		background-image:url(https://ucsc.cmb.ac.lk/verify/images/header_bg.png);
		background-repeat: no-repeat;
		background-position: right; 
	}
	#cert_no_block{
		
	}
</style>
<script>
	$(document).ready(function(){
		$('input[name=ctype]').change(function() {
			$("#cert_no_block").collapse('show');
		});
	});
</script>
<title>NWSDB.CFK - Industrial Training Certificate Verification</title>
</head>
<body>
<div class="container">
<div id="header" class="offset-sm-1 col-sm-10">
	<h1>NWSDB.CFK - Industrial Training</h1>
        
</div>
<div class="offset-md-1 col-md-10">
<br/>
<h1>Certificate Verification</h1>
<br/>

<form method="POST" action="">
	<div class="jumbotron">
	<h4 class="display-6">Please Select the Course/Program:</h4>
		<hr class="my-4">
		<div class="form-group row">
			
			<div class="offset-md-2 col-sm-5">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="ctype" id="ctype" value="bit">
					<label class="form-check-label" for="gridRadios1">
						Indutrial Training
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="ctype" id="ctype" value="external">
					<label class="form-check-label" for="gridRadios2">
						Internship
					</label>
				</div>
				<div class="form-check disabled">
					<input class="form-check-input" type="radio" name="ctype" id="ctype" value="fit">
					<label class="form-check-label" for="gridRadios3">
						On-the-job Training
					</label>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div id="cert_no_block" class="collapse jumbotron">
		<h4 class="display-6">Please Enter your Certificate No.:</h4>
		<hr class="my-4">
		<div class="form-group row">
			<div class="col-sm-5">
				<input type="text" class="form-control" id="cno" name="cno">
			</div>
			<div class="col-sm-2">
				<input type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Validate">
			</div>
		</div>
	</div>
</form>
</div>
</div>
</body>
</html>
                <!-- /.content -->




            </div>
            <!-- /.content-wrapper -->

            <?php $template->getFooter(); ?>


        </div>
        <!-- ./wrapper -->

        <?php $template->getScript(); ?>


    </body>
</html>
