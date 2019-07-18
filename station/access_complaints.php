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


 <title>Access complaints </title>
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
		<?php  include_once('navbar.php');
		?>
		<div class='container border bg-secondary' align="center" dth="50%"height="50%" width="50%">
		<form action='' method='post'>
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
								<form class='conatainer btn btn btn-dark form-horizontal' align='center'>
								<div class='form-group'>
								<button class='btn-secondary'>
								</button><form>
						  <div class='form-group row '>
							<label for='inputname' class='col-sm-4 col-form-label'>Person Name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputname' placeholder='' value='{$row['pname']}'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person Mobile no.</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='district' placeholder='' value='{$row['pmob']}'>
							 </div> 
							   
							   <div class='rowspan=4 col-sm-4'>
							  Description<input type='text' class='form-control' id='Description' value='{$row['des']}'>
							  

							  </div>
							</div>
						  
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person DOB</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputBlock' placeholder='' value='{$row['pdob']}'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputIncharge' class='col-sm-4 col-form-label'>Person Address</label>
							<div class='col-sm-4'>
							  <input type='' class='form-control' id='inputIncharge' placeholder='' value='{$row['paddress']}'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Person Email ID</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputuser' placeholder='' value='{$row['pemail']}'>
							</div>
						  </div>
						   <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 1 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputPassword3' placeholder='' value='{$row['apname1']}'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 1 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputPassword3' placeholder='' value='{$row['apinfo1']}'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputPassword3' class='col-sm-4 col-form-label'>Accused Person 2 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname2']}'>
							 </div>
								<div class='col-sm-4'>
								  Progress<input type='text' class='form-control' value='{$row['status']}'>
								</div>
							</div>
						  
							
						  <div class='form-group row'>
							<label for='inputinfo2' class='col-sm-4 col-form-label'>Accused Person 2 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo2']}'>
						  </div>
							   
							</div>
						  <div class='form-group row'>
							<label for='inputname3' class='col-sm-4 col-form-label'>Accused Person 3 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname3']}'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputinfo3' class='col-sm-4 col-form-label'>Accused Person 3 info</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo3']}'>
							</div>
						  </div>
						  <div class='form-group row'>
							<label for='inputname4' class='col-sm-4 col-form-label'>Accused Person 4 name</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apname4']}'>
							</div>
						  </div>
						  
						  <div class='form-group row'>
							<label for='inputinfo4' class='col-sm-4 col-form-label'>Charges</label>
							<div class='col-sm-4'>
							  <input type='text' class='form-control' id='inputstate' placeholder='' value='{$row['apinfo4']}'>
							</div>
						  </div>
						  </div>
							</form>
								
								</div>";	
												}
											}
								
		}
		?>
		
<?php } ?>
		</body>
		</html>