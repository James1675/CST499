<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php include_once 'header.php';?>
<?php
include ('connection.php');
include('functions.php');
$user_data = check_login($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Course Selection </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
<body>
<div>
<?php
if(isset($_POST[submit])){
		$subject = $_POST['enrollment'];
		$id = $user_data['user_id'];
		$query = "INSERT INTO stdclass (subject, std_id) VALUES ('$subject', '$id')";
		
		mysqli_query($connection, $query);
	
	 echo $user_data['firstName'],' ', 'Enrolled in Class';
}
	
?>
</div>

	<div class="container text-center">
	<h1> Welcome to the Course Selection page</h1>
	<br>
	<h2> Available Courses	</h2>
	<br>
	
	<form action="" method="post" name="form" align="center">
 
 <label >Courses</label>
 
 
 <?php

$res=mysqli_query($connection,"select * from courses");
echo "<select name='enrollment'> <option value = ''>Select a subject</option>";
while ($row=mysqli_fetch_array($res))
{

 
 echo "<option value'$row[subject]'> CourseID: $row[courseid] / Subject: $row[subject] / Term: $row[term]</option>";
 
}
echo "</select>";
?>
 
 <input type="submit" name="submit" value="Continue" />
 
 </form>

</body>
</html>
	
	</div>

<?php require_once 'footer.php';?>
</body>
</html>