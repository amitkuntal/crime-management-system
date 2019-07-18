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


 <title>Add_missing_person</title>
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
			?>
			  </div>
		</nav>
		<div class='container border bg-light' align="center" dth="50%"height="50%" width="50%">
		<form class='conatainer btn btn btn-dark form-horizontal' align="center" method='post' action='' >
		<div class="form-group">
		<button class="btn-secondary">
		<h2>Missing Person Details<h2>
		</button>
		  <div class="form-group row ">
    <label for="inputname" class="col-sm-4 col-form-label">Person Name</label>
    <div class="col-sm-8">
      <input type="text" name='name' class="form-control" id="inputname" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="height" class="col-sm-4 col-form-label">Person Height</label>
    <div class="col-sm-8">
      <input type="text" name='height' class="form-control" id="height" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputcolor" class="col-sm-4 col-form-label">Person Color</label>
    <div class="col-sm-8">
      <input type="text" name='color' class="form-control" id="inputcolor" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputIncharge" class="col-sm-4 col-form-label">Person Identification</label>
    <div class="col-sm-8">
      <input type="text"  name='mark' class="form-control" id="inputIncharge" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputDOB" class="col-sm-4 col-form-label">Person Age</label>
    <div class="col-sm-8">
      <input type="text" name='age' class="form-control" id="inputDOB" placeholder="">
    </div>
  </div>
  
   <div class="form-group row">
    <label for="inputDOB" class="col-sm-4 col-form-label">Person DOB</label>
    <div class="col-sm-8">
      <input type="date" name='dob' class="form-control" id="inputDOB" placeholder="">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputName" class="col-sm-4 col-form-label">Contact Person Name</label>
    <div class="col-sm-8">
      <input type="text" name='cname' class="form-control" id="inputname" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile" class="col-sm-4 col-form-label">Contact Person Mobile no.</label>
    <div class="col-sm-8">
      <input type="text" name='cmobile1' class="form-control" id="inputmobile" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmobile2" class="col-sm-4 col-form-label">Contact Mobile no.2</label>
        <div class="col-sm-8">
          <input type="text" name='cmobile2' class="form-control" id="inputmobile2" placeholder="">
        </div>
  </div>
  
		<input type="submit" name='submit' value="Submit" class='btn btn-primary'align="center"></div>
		
		</form>
		<?php  
		if(isset($_POST['submit']))
		{

			$name=$_POST['name'];
			$height=$_POST['height'];
			$color=$_POST['color'];
			$mark=$_POST['mark'];
			$age=$_POST['age'];
			$dob=$_POST['dob'];
			$cname=$_POST['cname'];
			$cmob1=$_POST['cmobile1'];
			$cmob2=$_POST['cmobile2'];
			$query=mysql_query("SELECT max(id) as id FROM missing");
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
								 $sql1="INSERT INTO `missing`(`id`, `name`, `height`, `color`, `mark`, `age`, `dob`, `cname`, `cmob1`, `cmob2`) 
													VALUES 
													('".$id."','".$name."','".$height."','".$color."','".$mark."','".$age."','".$dob."','".$cname."','".$cmob1."','".$cmob2."')";
									$result1=mysql_query($sql1);	
													
									if($result1){
									echo "<script>alert('Missing Person Successfully added')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
			
		}
		?>
		
</div><?php } ?>
		</body>
		</html>