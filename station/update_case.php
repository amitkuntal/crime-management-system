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
		<select class="form-control" name='cid'>
		      <?php
			  $query=mysql_query("SELECT * FROM complaints");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($query))
												{
													echo "<option value='{$row[cid]}'>{$row[cid]} -- {$row[pname]}</option>";
												}
											}
			  ?>
		    </select><br><br>
		<input type="submit" class='btn btn-danger' name='view' value="view">
		</form>
		</div>
		<?php 
		if(isset($_POST['view']))
		{
			$cid=$_POST['cid'];
			
			  $query=mysql_query("SELECT * FROM complaints where cid='".$cid."'");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($query))
												{
													echo "<div class='container border bg-light' align='center' dth='50%'height='50%' width='50%'>
								<form class='conatainer btn btn btn-dark form-horizontal' align='center' method='post' action=''>
								<div class='form-group'>
								
						  <div class='form-group row '>
							<label for='inputname' class='col-sm-4 col-form-label'>Person Name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputname' placeholder='' value='{$row['pname']}' name='pname'>
							  <input type='hidden' class='form-control' id='inputname' placeholder='' value='{$row['cid']}' name='cid'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person Mobile no.</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='district' placeholder='' value='{$row['pmob']}' name='pmob'>
							 </div> 
							   
							   <div class='rowspan=4 col-sm-4'>
							  Description<input type='text' class='form-control' id='Description' value='{$row['des']}' name='description'>
							  

							  </div>
							</div>
						  
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person DOB</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputBlock' placeholder='' value='{$row['pdob']}' name='pdob'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputIncharge' class='col-sm-4 col-form-label'>Person Address</label>
							<div class='col-sm-4'>
							  <input type='' class='form-control' id='inputIncharge' placeholder='' value='{$row['paddress']}' name='paddress'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person Email ID</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputuser' placeholder='' value='{$row['pemail']}' name='pemail'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 1 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputPassword3' placeholder='' value='{$row['apname1']}' name='apname1'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 1 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputPassword3' placeholder='' value='{$row['apinfo1']}' name='apinfo1'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 2 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname2']}' name='apname2'>
							 </div>
								<div class='col-sm-4'>
								  Progress<input type='text' class='form-control' value='{$row['status']}' name='status'>
								</div>
							</div>
						  
							
						  <div class='form-group row'>
							<label for='inputinfo2' class='col-sm-4 col-form-label'>Accused Person 2 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo2']}' name='apinfo2'>
						  </div>
							   
							</div>
						  <div class='form-group row'>
							<label for='inputname3' class='col-sm-4 col-form-label'>Accused Person 3 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname3']}' name='apname3'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputinfo3' class='col-sm-4 col-form-label'>Accused Person 3 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo3']}' name='apinfo3'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputname4' class='col-sm-4 col-form-label'>Accused Person 4 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname4']}' name='apname4'>
							</div>
						  </div>
						  
						  <div class='form-group row'>
							<label for='inputinfo4' class='col-sm-4 col-form-label'>Accused person 4 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo4']}' name='apinfo4'>
							</div>
						  </div>
						  </div>
						  <div class='form-group row'>
							<label for='inputinfo4' class='col-sm-4 col-form-label'>Charges</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['charges']}' name='charges'>
							</div>
						  </div>
					
						  <input type='submit' name='update' value='update' class='btn btn-primary'>
							</form>
								
								</div>";	
							}
						}
								
		}
		?>
		<?php
	if(isset($_POST['update']))
	{
			$cid=$_POST['cid'];
			$pname=$_POST['pname'];
			$pmob=$_POST['pmob'];
			$pdob=$_POST['pdob'];
			$paddress=$_POST['paddress'];
			$pemail=$_POST['pemail'];
			$apname1=$_POST['apname1'];
			$apinfo1=$_POST['apinfo1'];
			$apname2=$_POST['apname2'];
			$apinfo2=$_POST['apinfo2'];
			$apname3=$_POST['apname3'];
			$apinfo3=$_POST['apinfo3'];
			$apname4=$_POST['apname4'];
			$apinfo4=$_POST['apinfo4'];
			$charges=$_POST['charges'];
			$description=$_POST['description'];
			$status='PENDING';
										$sql1="UPDATE `complaints` SET `cid`='".$cid."',`pname`='".$pname."',`pmob`='".$pmob."',`pdob`='".$pdob."',`paddress`='".$paddress."',
										`pemail`='".$pemail."',`apname1`='".$apname1."',`apinfo1`='".$apinfo1."',`apname2`='".$apname2."',`apinfo2`='".$apinfo2."',`apname3`='".$apname3."',
										`apinfo3`='".$apinfo3."',`apname4`='".$apname4."',`apinfo4`='".$apinfo4."',`charges`='".$charges."',`des`='".$description."',`status`='".$status."',
										`finalreport`='' WHERE cid='".$cid."'";
									$result1=mysql_query($sql1);	
													
									if($result1){
									echo "<script>alert('Complaint Successfully Updated')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
	}
	?>
	<?php  } ?>	</body>
		</html>