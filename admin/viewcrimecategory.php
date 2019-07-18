<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:http://localhost/final/index.php");
} else {
	include_once('config.php');
	$dbusername=$_SESSION["sess_user"];
?><html>
<head>
 <title>View crime category </title>
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

		<?php 
		include_once('navbar.php');
		$query=mysql_query("SELECT * from crime");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
																				
											echo"<div class='row'>
												<div class='col-4  border btn btn-warning'>
												Crime Section
												</div>
												<div class='col-4 border btn btn-warning'>
												Crime Name
												</div>
												<div class='col-4 border btn btn-warning'>
												Crime Description
												</div>
												</div>";
												while($row=mysql_fetch_assoc($query))
												{
																			
											echo"<div class='row'>
												<div class='col-4  border btn btn-warning'>
												{$row['section']}
												</div>
												<div class='col-4 border btn btn-warning'>
												{$row['name']}
												</div>
												<div class='col-4 border btn btn-warning'>
												{$row['description']}
												</div>
												</div>";
												}
											}
											else
											{
												echo "<script>alert('No result found')</script>";
											}
		
		}
		
		?>
		</div>
		
		
		</body>
		<html>