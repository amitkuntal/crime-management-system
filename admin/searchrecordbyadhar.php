<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:http://localhost/final/index.php");
} else {
	include_once('config.php');
	$dbusername=$_SESSION["sess_user"];
?><html>
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

		<?php 
		include_once('navbar.php');
		?>
		<div class="container btn outline-secondary">
		<form method='post' action=''>
		Enter Adhar Number<input type="text"  name='adhar' class='form-control'><br>
		<input type='submit' name='search' value='Search' class='btn btn-primary'>
		</form>
		</div>
		<?php
		if(isset($_POST['search']))
		{
		
			$adhar=$_POST['adhar'];
					$query=mysql_query("SELECT * from complaints where apinfo1 LIKE '%".$adhar."%' or apinfo2 LIKE '%".$adhar."%' or apinfo3 LIKE '%".$adhar."%'");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
																				
												echo"<div class='row' >
												<div class='col-3 border btn btn-secondary'>
												 Complaint Id
												</div>
												<div class='col-3 border btn btn-secondary'>
												Section
												</div>
												<div class='col-3 border btn btn-secondary'>
												Date
												</div>
												</div>";
												while($row=mysql_fetch_assoc($query))
												{
													echo "<div class='row' >
														<div class='col-3 border btn btn-secondary'>
														{$row['cid']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['charges']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['date']}
														</div>
														</div>";
													
												}
											}
											else
											{
												$query=mysql_query($sql="SELECT * from complaints where apinfo1 LIKE '%".$adhar."%' or apinfo2 LIKE '%".$adhar."%' or apinfo4 LIKE'%".$adhar."%'");
										$numrows=mysql_num_rows($query);
										echo $sql;
										if($numrows!=0)
											{ 
																				
												echo"<div class='row' >
												<div class='col-3 border btn btn-secondary'>
												 Complaint Id
												</div>
												<div class='col-3 border btn btn-secondary'>
												Section
												</div>
												<div class='col-3 border btn btn-secondary'>
												Date
												</div>
												</div>";
												while($row=mysql_fetch_assoc($query))
												{
													echo "<div class='row' >
														<div class='col-3 border btn btn-secondary'>
														{$row['cid']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['charges']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['date']}
														</div>
														</div>";
													
												}
											}
											else{
												echo "<script>alert('No result found')</script>";
											}
											}
		
		}
		}
		?>
		</div>
		
		
		</body>
		<html>
		