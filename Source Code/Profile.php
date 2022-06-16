<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php include 'header.php';?>
<?php
include ('connection.php');
include('functions.php');
$user_data = check_login($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Profile Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
<body>

	<div class="container text-center">
	<h1> Welcome to the Profile page</h1>
	<br>
	<h2> User Profile </h2>
	<br>
	<label> First Name :  </label> <?php echo $user_data['firstName']; ?>
	<br>
	<label> Last Name :  </label> <?php echo $user_data['LastName']; ?>
	<br>
	<label> Password :  </label> <?php echo $user_data['password']; ?>
	<br>
	<label> Email :  </label> <?php echo $user_data['email']; ?>
	<br>
	<label> Phone :  </label> <?php echo $user_data['phone']; ?>
	<br>
	<label> Address :  </label> <?php echo $user_data['address']; ?>
	<br>
	<label> SSN :  </label> <?php echo $user_data['SSN']; ?>
	<br>
	<h2> Enrolled Classes </h2>
	<br>
	<?php
	$id = $user_data['user_id'];
	$query = "SELECT * FROM stdclass WHERE std_id = '$id'";
	$res = mysqli_query($connection, $query);	
	
		while ($row=mysqli_fetch_array($res)){
		$results = array($row['subject']);

echo '<table border="1">';

foreach(array_chunk($results,2) as $row) {

    echo '<tr>';

    foreach($row as $value) {
        echo '<td>'.$value.'</td>';
    }

    echo '</tr>';
}

echo '</table>';
			
		}
		
	
	?>




	
	
	</div>
	
	

<?php include 'footer.php';?>
</body>
</html>