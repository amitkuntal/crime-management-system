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


 <title>Complaints by station </title>
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
<?php include_once('navbar.php'); ?>
		<form method='post' action='#'><div class="container" align="center">
		<?php
			$query=mysql_query("SELECT * from stationlogin");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
												echo '<select name="id" class="form-control" >';
												while($row=mysql_fetch_assoc($query))
												{
													echo "<option value='{$row['name']}'>{$row['name']}----{$row['block']}----{$row['dist']}";
													
												}
												echo "</select>";
											}
										
									
		?>
		<br>
		<input type='submit' name='go' value='Go' class='btn btn-primary'>
		</form>
		<?php 
			if(isset($_POST['go']))
			{
				
					echo '<div class="row" >
					<div class="col-3 border btn btn-secondary">
					 Complaints ID
					</div>
					<div class="col-3 border btn btn-secondary">
					Complaints Sections
					</div>
					<div class="col-3 border btn btn-secondary">
					Date
					</div>
					<div class="col-3 border btn btn-secondary">
					Status
					</div>
					</div>';
					$stationid=$_POST['id'];
					$query=mysql_query("SELECT * from complaints where station='".$stationid."'");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
												while($row=mysql_fetch_assoc($query))
												{
													echo "<div class='row' >
														<div class='col-3 border btn btn-secondary'>
														{$row['pname']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['charges']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['date']}
														</div>
														<div class='col-3 border btn btn-secondary'>
														{$row['status']}
														</div>
														</div>";
													
												}
											}
			}
					
	?>
</div>
		
<?php } ?>
		</body>
		<html>