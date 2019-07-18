<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:http://localhost/final/index.php");
} else {
	include_once('config.php');
	$dbusername=$_SESSION["sess_user"];
?>
<html>
<head>
</style>


 <title>Search record by adhar </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class='container'>
	<div class='col-12'>
		<p align='right'>Police-100
		Ambulance-101</p>
	</div>
	<?php include_once('navbar.php');?>
		<form method='post' action='#'><div class="container" align="center">
		<?php
			$query=mysql_query("SELECT * from crime");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
												echo '<select name="id" class="form-control" >';
												while($row=mysql_fetch_assoc($query))
												{
													echo "<option value='{$row['id']}'>{$row['section']}----{$row['name']}";
													
												}
												echo "</select>";
											}
										
									
		?>
		<br>
		<input type='submit' name='go' value='Go' class='btn btn-primary'>
		</form>
		<br>
		<?php
		
		if(isset($_POST['go']))
		{
			$id=$_POST['id'];
		$query=mysql_query("SELECT * from crime where id='".$id."'");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
												while($row=mysql_fetch_assoc($query))
												{
													
													
													echo "<div class='container border bg-light' align='center' dth='50%'height='50%' width='50%'>
													<form class='conatainer btn btn btn-dark form-horizontal' align='center' method='post' action=''>
													<div class='form-group'>
													
															  <div class='form-group row'>
																<label for='inputname' class='col-sm-4 col-form-label'>Crime Section</label>
																<div class='col-sm-8'>
																  <input type='text' class='form-control' id='inputname' name='section' Value='{$row['section']}'>
																  <input type='hidden' class='form-control' id='inputname' name='id' Value='{$row['id']}'>
																</div>
															  </div>
															  <div class='form-group row'>
																<label for='inputPassword3' class='col-sm-4 col-form-label'>Crime Name</label>
																<div class='col-sm-8'>
																  <input type='text' class='form-control' id='district' name='name' value='{$row['name']}'>
																</div>
															  </div>
															   <div class='form-group row'>
																<label for='inputPassword3' class='col-sm-4 col-form-label'>Crime Description</label>
																<div class='col-sm-8'>
																  <textarea class='form-control' id='inputBlock' name='description'>{$row['description']}</textarea>
																</div>
															  </div>
																	<input type='submit' value='Update' name='update' class='btn btn-primary'>
														</div>
														</form>
													</div>
													</div>
													</div>";
													
												}
												
											}
		
		}
			 if(isset($_POST['update']))
			 {
								$id=$_POST['id'];
								 $section=$_POST['section'];
								 $name=$_POST['name'];
								 $description=$_POST['description'];
								 $sql1="UPDATE `crime` SET `id`='".$id."',`section`='".$section."',`name`='".$name."',`description`='".$description."' WHERE id='".$id."'";
									$result1=mysql_query($sql1);	
													
									if($result1){
									echo "<script>alert('Crime Successfully Updated')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
			 }
			 } ?>
		</body>
		</html>