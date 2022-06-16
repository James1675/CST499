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
	$firstName = $_POST['firstName'];
	$LastName = $_POST['LastName'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$SSN = $_POST['SSN'];
	
	if(!empty($email) && !empty($password))
	{
		$user_id = random_num(20);
		$query = "INSERT INTO tbluser (user_id, email, password, firstName, LastName, address, phone, SSN) VALUES ('$user_id', '$email', '$password', '$firstName', '$LastName', '$address', '$phone', '$SSN')";
		mysqli_query($connection, $query);
		header("Location: login.php");
		die;
	}else
	{
		echo "Information Invalid: Please try again";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Registration Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
<body>

<div>
<?php
if(isset($_POST['register'])){
		echo 'User Submitted';
}
	
?>
</div>


	<div class="container text-center">
	<h1> Welcome to the Registration page</h1>
	<p>Please Fill out All Fields</p>
	


<form action="Registration.php" method="POST" align="center">



	<div>
		<label> First Name : </label>
		<input type= "text" name="firstName" />
	</div>
	
	<div>
		<label> Last Name : </label>
		<input type= "text" name="LastName" />
	</div>
	
	<div>
		<label> Password : </label>
		<input type= "password" name="password"/>
	</div>
	
	<div>
		<label> Email :  </label>
		<input type= "email" name="email" />
	</div>
	
	<div>
		<label> Address : </label>
		<input type= "text" name="address" />
	</div>
	
	<div>
		<label> Phone : </label>
		<input type= "text" name="phone"/>
	</div>
	
	<div>
		<label> SSN : </label>
		<input type= "text" name="SSN"/>
	</div>
	
	<button type="submit" name="register"> Submit </button>
	
	<p>Already a user?<a href="Login.php"><b>Log in</b></a></p>
	
	
</form>

</div>

</body>
</html>