<?php
error_reporting(E_ALL ^ E_NOTICE);
?>	
<?php include_once 'header.php' ?>
<?php
include ('connection.php');
include('functions.php');
$user_data = check_login($connection);
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
	<div class="container text-center">
	<h1> This is the homepage</h1>
	<br>
	Hello, <?php echo $user_data['firstName']; ?> <?php echo $user_data['LastName']; ?>





</div>
</body>
</html>