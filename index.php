
<html>
<head>
<style>
body {
  background-image: url("img/download.jpg");
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
   background-color: #ddd;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}</style>


 <title>Crime Reporting System </title>
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
	<div class='row'>
		<div class='col-4 bg-info'>						
				<form method='post' action='' name='user'>
					  <div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
						<input type="text" class="form-control" name='username' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name" required>
						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="Password" required>
					  </div>
					  <div class="form-check">
					  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="admin" >
					  <label class="form-check-label" for="exampleRadios1">
						Admin
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="user" checked>
					  <label class="form-check-label" for="exampleRadios2">
						User
					  </label>
					</div>
					<div class="form-check disabled">
					  <input class="form-check-input" type="radio" name="type" id="exampleRadios3" value="station">
					  <label class="form-check-label" for="exampleRadios3">
						Station
					  </label>
					</div>
					 
					  <input type="submit" name='login' class="btn btn-primary" value='Login'>
				</form>
				<?php
								include_once('config.php');
								?>
								<?php
								if(isset($_POST['login']))
								{
									if(!empty($_POST['username']) && !empty($_POST['password'])) 
										{
												$user=$_POST['username'];
												$pass=$_POST['password'];
												
											if($_POST['type']=='user')
												{ 			
															$query=mysql_query("SELECT * FROM complaints WHERE pmob='".$user."' AND pdob='".$pass."'");
															$numrows=mysql_num_rows($query);
															if($numrows!=0)
															{
																while($row=mysql_fetch_assoc($query))
																	{
																		$dbusername=$row['pmob'];
																		$dbpassword=$row['pdob'];
																		
																	}
																if($user == $dbusername && $pass == $dbpassword)
																	{
																session_start();
																$_SESSION['sess_user']=$dbusername;
																/* Redirect browser */
																header("Location: user/index.php");
																	}
															}
															else 
															{
																echo "<script>alert('Invalid username or password!')</script>";
															}

												}
												else if($_POST['type']=='admin')
												{ 			
															$query=mysql_query("SELECT * FROM adminlogin WHERE username='".$user."' AND password='".$pass."'");
															$numrows=mysql_num_rows($query);
															if($numrows!=0)
															{
																while($row=mysql_fetch_assoc($query))
																	{
																		$dbusername=$row['username'];
																		$dbpassword=$row['password'];
																		
																	}
																if($user == $dbusername && $pass == $dbpassword)
																	{
																session_start();
																$_SESSION['sess_user']=$dbusername;
																/* Redirect browser */
																header("Location: admin/index.php");
																	}
															}
															else 
															{
																echo "<script>alert('Invalid username or password!')</script>";
															}

												}
												else if($_POST['type']=='station')
												{ 			
															$query=mysql_query("SELECT * FROM stationlogin WHERE email='".$user."' AND password='".$pass."'");
															$numrows=mysql_num_rows($query);
															if($numrows!=0)
															{
																while($row=mysql_fetch_assoc($query))
																	{
																		$dbusername=$row['email'];
																		$dbpassword=$row['password'];
																		
																	}
																if($user == $dbusername && $pass == $dbpassword)
																	{
																session_start();
																$_SESSION['sess_user']=$dbusername;
																/* Redirect browser */
																header("Location: station/index.php");
																	}
															}
															else 
															{
																echo "<script>alert('Invalid username or password!')</script>";
															}

												}
												
										}
										else 
											{
												echo "<script>alert('All fields are required!')";
											}
										
									}
										
								
?>
		</div>
		<div class='col-8 border text-danger'>
			<h4>Welcome to online Crime Reporting System .This is a online platform for a common people to log their F.I.R .Do online reporting of your crime and save time.
			This provide Ease to common people and their work os completed with less effort and time.
			Everyone can take the advantage of this online System.Stop avoiding the crime near you get registered here.</h4>
			<h2 align= 'center'>"SAY NO TO CRIME"<h2>
		</div>
	
	</div>
						

					
</body>
</html>

