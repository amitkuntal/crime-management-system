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
		<?php include_once('navbar.php') ?>
		
		<form action='' method='post'>
		<div class="container btn outline-secondary">
		Enter Name<input type="text" name="name" class='form-group'><br><br>
		<input type='submit' name='search' value='Search' class='btn btn-primary'>
		</form>
		<?php 
		if(isset($_POST['search']))
		{
		
			$name=$_POST['name'];
					$query=mysql_query($sql="SELECT * from complaints where apname1='".$name."' or apname2='".$name."' or apname3='".$name."' or apname4='".$name."'");
					
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{ 
																				
												echo'<div class="row" >
												<div class="col-3 border btn btn-secondary">
												 Accused names
												</div>
												<div class="col-3 border btn btn-secondary">
												Complaint Id
												</div>
												<div class="col-3 border btn btn-secondary">
												Section
												</div>
												<div class="col-3 border btn btn-secondary">
												Date
												</div>
												</div>';
												while($row=mysql_fetch_assoc($query))
												{
													echo"<div class='row'>
													 <div class='col-3 h-100 d-inline-block' style='width: 120px; background-color: rgba(0,0,255,.1)'>
													 {$row['apname1']},{$row['apname2']},{$row['apname3']},{$row['apname4']}
													</div>
													<div class='col-3'>
													{$row['cid']}
													</div><div class='col-3'>
													{$row['charges']}
													</div>
													<div class='col-3'>
													{$row['date']}
													</div>
													</div>";
												}
											}
											else
											{
												echo "<script>alert('No result found')</script>";
												echo $sql;
											}
		
		}
}
		?>
		
		</div>
		
		
		</body>
		<html>