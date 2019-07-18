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


 <title>update case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class='container'>
	<div class='col-sm-12'>
		<p align='right'>Police-100
		Ambulance-101</p>
	</div>

		<?php 
		include_once('navbar.php');
		?><div class='container border bg-dark' align="center" dth="50%"height="50%" width="50%">
		<form  method='post' action=''>
		<select class="form-control" name='id'>
		      <?php
			  $query=mysql_query("SELECT * FROM missing");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($query))
												{
													echo "<option value='{$row[id]}'>{$row[name]} -- {$row[dob]}</option>";
												}
											}
			  ?>
		    </select><br><br>
		<input type="submit" class='btn btn-danger' name='view' value="DELETE">
		</form>
		</div>
		<?php 
		if(isset($_POST['view']))
		{
			$id=$_POST['id'];
			$sql1="DELETE FROM `missing` WHERE id='".$id."'";
									$result1=mysql_query($sql1);	
													
									if($result1){
									echo "<script>alert('Missing Person Successfully Deleted')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
		}
		?>
		</div>
<?php } ?>
		</body>
		</html>
		</html>