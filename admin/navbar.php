<?php 

if(!isset($_SESSION["sess_user"]))
{
	echo'<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">CMS</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Missing person</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">User Sign UP</a>
					  </li>
					</ul>
					
				  </div>
			</nav>';
} else {
	include_once('config.php');
	$dbusername=$_SESSION["sess_user"];
	echo'<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">CMS</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="http://localhost/final/index.php">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="http://localhost/final/about.php">About Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="http://localhost/final/contact.php">Contact Us</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="http://localhost/final/missingperson.php">Missing person</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="http://localhost/final/signup.php">User Sign UP</a>
					  </li>
					  
					  <li class="nav-item">
						<a class="nav-link" href="index.php">Dashboardhome</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Username
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="#">Profile</a>
						  <a class="dropdown-item" href="#">Update Profile</a>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					  </li>
					</ul>
					
				  </div>
			</nav>';
}

