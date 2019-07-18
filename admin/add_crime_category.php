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
				<div class="container" align="center">
		
					<div class='container border bg-light' align="center" dth="50%"height="50%" width="50%">
						<form class='container btn btn btn-info form-horizontal' method='post' action='' align="center">
							<div class="form-group">
		
							  <div class="form-group row ">
								<label for="inputname" class="col-sm-4 col-form-label">Crime Section</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="crimesection" name='crimesection' placeholder=" Crime Section">
								</div>
							  </div>
							  <div class="form-group row">
								<label for="inputPassword" class="col-sm-4 col-form-label">Crime Name</label>
								<div class="col-sm-8">
								  <input type="text" class="form-control" id="stationname" name='crimename' placeholder=" Crime Name">
								</div>
							  </div>
							   <div class="form-group row">
								<label for="inputPassword3" class="col-sm-4 col-form-label">Crime Description</label>
								<div class="col-sm-8">
								 <textarea name='crimedescription' class="form-control" Placeholder='Crime Description'></textarea>
								</div>
							  </div>
							  <input class='btn btn-primary' type="submit" value="Register" name='submit'>
							 </div>
							 <?php 
							 if(isset($_POST['submit']))
							 {
									 $query=mysql_query("SELECT max(id) as id FROM crime");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($query))
												{
													$id=$row['id']+1;
												}
											}
									else
										{
											$id=1;
										}
								 $section=$_POST['crimesection'];
								 $name=$_POST['crimename'];
								 $description=$_POST['crimedescription'];
								 $sql1="INSERT INTO `crime`(`id`, `section`, `name`, `description`)
										VALUES ('".$id."','".$section."','".$name."','".$description."')";
									$result1=mysql_query($sql1);	
													
									if($result1){
									echo "<script>alert('Crime Successfully added')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
									
							 }
							 ?>
						</form>
					</div>
<?php } ?>
		</body>
		</html>