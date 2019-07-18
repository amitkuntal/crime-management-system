<?php 
session_start();
?>

<html>
<head><title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="style.css">
 
</head>
<body>
<?php
include_once('navbar.php');
?>
<div class="signup">
<center><h3 style="color:#00004d; text-decoration:underline;">SIGN-UP</h3></center>
<form method="post" action="">
<p>Full Name:
<input type="text" placeholder="Name" name="name" required>
</p>
<p>
Email:
<input type="text" name="email" placeholder="Email" required>
</p>
<p>
Paytm Number:
<input type="text" name="paytmno" placeholder="Paytm Number" required>
</p>
<p>
Mobile Number:<input type="text" name="mnumber" placeholder="Mobile Number" required>
</p>
<p>
Pubg Game Id:<input type="text" name="gameid" placeholder="GameId" required>
</p>
<p>
Password:
<input type="password" placeholder="Password" name="password" required>
</p>
<p>
Confirm Password:
<input type="password" name="cpassword" placeholder="Confirm Password" required>
</p>
<p>
<center><input type="submit" name="signup" value="SignUp"></center>
</p>
</form>
</div>
<?php
					include_once("config.php");

				if(isset($_POST['signup']))
				{		
						$query=mysql_query("SELECT max(id) as id FROM personal");
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
						$name=$_POST['name'];
						$email = $_POST['email'];
						$paytmno=$_POST['paytmno'];
						$mobileno=$_POST['mnumber'];
						$gameid=$_POST['gameid'];
						$password=$_POST['password'];
						$photo=1;
						$sql1="INSERT INTO `personal`(`email`,`mobile`, `paytmno`,`password`,`name`,`id`,`photo`) 
						VALUES ('".$email."','".$mobileno."','".$paytmno."','".$password."','".$name."','".$id."','".$photo."')";
						$result1=mysql_query($sql1);	
										
						if($result1){
						echo "<script>alert('SignUp Successfully')</script>";
						header("Location: login.php");
						}
						else
						{
						echo "Failure!";
						}
						
				}
				include_once('footer.php');

				
			?>

</body>
</html>