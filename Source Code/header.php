<?php
	error_reporting(E_All ^ E_NOTICE);
?>
<?php
session_start();
?>
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
	<div class="container text-center">
	 <h1>Student Registration</h1>
	 
	</div>
</div>
<nav class="navbar navbar-inverse">
	<div class="container=fluid">
	 <div class="navbar-header">
	  <button type="button" class="nav-bar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	 <ul class="nav navbar-nav">
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a><li>
		<?php
		if (isset($_SESSION['user_id'])) {
			
			echo '<li><a href="Profile.php"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>';
			echo '<li><a href="CourseSelection.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Course Selection</a></li>';
			echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
		}
		else
		{
			echo '<li><a href="login.php" ><span class="glyphicon glyphicon-user"></span> Login</a></li>';
			echo '<li><a href="registration.php"><span class="glyphicon glyphicon-pencil"></span> Registration</a></li>';
		}	
		?>
		
	
	 </ul>
	 <ul class="nav navbar-nav navbar-right">
	 </ul>
	</div>
	</div>
</nav>
</body>
</html>
	