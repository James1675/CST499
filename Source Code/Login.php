<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php include_once 'header.php' ?>

<?php

include ('connection.php');
include('functions.php');


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(!empty($email) && !empty($password))
	{
		$query = "SELECT * FROM tbluser WHERE email = '$email' limit 1";
		$result = mysqli_query($connection, $query);
		
		if($result)
		{
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			
			if($user_data['password'] === $password)
		{
			$_SESSION['user_id'] = $user_data['user_id'];
			header("Location: Index.php");
			die;
		}	
		
		}
		echo "Wrong Email or Password";
	}else
	{
		echo "Wrong Email or Password";
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
<body>



	<div class="container text-center">
	<h1> Welcome to the Login page</h1>
	</div>
	
	<form action="login.php" method="POST" align="center">
	
	<div>
		<label> Email :  </label>
		<input type= "email" name="email" />
	</div>
	
	<div>
		<label> Password : </label>
		<input type= "password" name="password"/>
	</div>
	
	<button type="submit" name="login"> Log in </button>
	
	<p>Not a user?<a href="Registration.php"><b>Register New User</b></a></p>
	
	</form>
	
	
	
	

</body>
</html>