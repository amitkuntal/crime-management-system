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


 <title>Station Registration </title>
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

		<?php include_once('navbar.php');?>
		<div class='container border bg-light' align="center" height="50%" width="50%">
		<form class='conatainer btn btn btn-dark form-horizontal' method='post' align="center">
		<div class="form-group">
		<button class="btn-secondary">
		<h2>Station Registration<h2>
		</button><form>
  <div class="form-group row ">
    <label for="inputname" class="col-sm-4 col-form-label">Station Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputname" name='sname' placeholder="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station District</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="district" name='sdist' placeholder="District">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station Block</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputBlock" name='sblock' placeholder="Block">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputIncharge" class="col-sm-4 col-form-label">Station Incharge Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputIncharge" name='siname'placeholder="Incharge name">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station Username</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputuser" name='suname' placeholder="Email Address">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword3" name='spassword' placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station Contact no</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" name='scontactno' placeholder="Contact No">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Station State</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputstate"  name='sstate' placeholder="State">
    </div>
  </div>
		<input type="Submit" class=" border btn bg-danger" value="Register" align="center" name='submit'></div>
		</form>
		<?php 
		if(isset($_POST['submit']))
		{
			$sname=$_POST['sname'];
			$sdist=$_POST['sdist'];
			$sblock=$_POST['sblock'];
			$siname=$_POST['siname'];
			$susername=$_POST['suname'];
			$spassword=$_POST['spassword'];
			$scontactno=$_POST['scontactno'];
			$state=$_POST['sstate'];
						$sql1="INSERT INTO `stationlogin`(`email`, `password`, `name`, `dist`, `block`, `state`, `siname`, `contact`)
						VALUES ('".$susername."','".$spassword."','".$sname."','".$sdist."','".$sblock."','".$state."','".$siname."','".$scontactno."')";
						$result1=mysql_query($sql1);	
										
						if($result1){
						echo "<script>alert('SignUp Successfully')</script>";
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