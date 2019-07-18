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


 <title>Station | Add Complaints |</title>
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

		<?php include_once('navbar.php'); ?>
		<div class='container border bg-light' align="center" dth="50%"height="50%" width="50%">
		<form class='conatainer btn btn btn-dark form-horizontal' align="center" method='post' action=''>
		<div class="form-group">
		<div class="btn-secondary">
		<h2>Add Complaints<h2>
		</div>
  <div class="form-group row ">
    <label for="inputname" class="col-sm-4 col-form-label">Person Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputname" placeholder="" name='pname'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label" >Person Mobile no.</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="district" placeholder="" name='pmob'>
	 </div> 
	   
	   <div class="rowspan=4 col-sm-4">
	  Description<input type="text" class="form-control" id="Description" name='description'>
	  

	  </div>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Person DOB</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="inputBlock" placeholder="" name='pdob'>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputIncharge" class="col-sm-4 col-form-label">Person Address</label>
    <div class="col-sm-4">
      <input type="" class="form-control" id="inputIncharge" placeholder="" name='paddress'>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Person Email ID</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputuser" placeholder="" name='pemail'>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Accused Person 1 name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputPassword3" placeholder="" name='apname1'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Accused Person 1 info</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputPassword3" placeholder="" name='apinfo1'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">Accused Person 2 name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apname2'>
	 </div>
        <div class="col-sm-4">
          <input type="Submit" class="form-control" name='submit' value='submit'>
        </div>
    </div>
  
	
  <div class="form-group row">
    <label for="inputinfo2" class="col-sm-4 col-form-label">Accused Person 2 info</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apinfo2'>
    </div>
	   <div class="col-sm-4">
         <input type="Reset" class="form-control" >
       </div>
   </div>
  <div class="form-group row">
    <label for="inputname3" class="col-sm-4 col-form-label">Accused Person 3 name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apname3'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputinfo3" class="col-sm-4 col-form-label">Accused Person 3 info</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apinfo3'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputname4" class="col-sm-4 col-form-label">Accused Person 4 name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apname4'>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputinfo3" class="col-sm-4 col-form-label">Accused Person 4 info</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='apinfo4'>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputinfo4" class="col-sm-4 col-form-label">Charges</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputstate" placeholder="" name='charges'>
    </div>
  </div>
  
		</form>
		
</div>
<?php
	if(isset($_POST['submit']))
	{
		$stationusername=$_SESSION["sess_user"];
		$quer=mysql_query("SELECT name FROM stationlogin where email='".$stationusername."'");
										$numrows=mysql_num_rows($quer);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($quer))
												{
													$sname=$row['name'];
												}
											}
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
			$dat=date("Y-m-d");
			$query=mysql_query("SELECT max(cid) as cid FROM complaints");
										$numrows=mysql_num_rows($query);
										if($numrows!=0)
											{
												while($row=mysql_fetch_assoc($query))
												{
													$cid=$row['cid']+1;
												}
											}
									else
										{
											$cid=1;
										}
										$sql1="INSERT INTO `complaints`(`cid`,`date`, `pname`,`pmob`, `pdob`, `paddress`, `pemail`, 
										`apname1`, `apinfo1`, `apname2`, `apinfo2`, `apname3`, `apinfo3`, `apname4`, `apinfo4`, `charges`, `des`,`status`,`finalreport`,`station`)
										VALUES ('".$cid."','".$dat."','".$pname."','".$pmob."','".$pdob."','".$paddress."','".$pemail."','".$apname1."','".$apinfo1."',
										'".$apname2."','".$apinfo2."','".$apname3."','".$apinfo3."','".$apname4."','".$apinfo4."','".$charges."','".$description."','PENDING','--','".$sname."')";
									$result1=mysql_query($sql1);	
													echo $sql1;
									if($result1){
									echo "<script>alert('Complaint Successfully added')</script>";
									echo'<script>window.location.replace("index.php");</script>';
									//header("Location: index.php");
									}
									else
									{
									echo "Failure!";
									}
	}
	?>

<?php } ?>
		</body>
		</html>