<?php
require_once('config.php');
error_reporting(E_ALL ^ E_NOTICE);
$connection = mysqli_connect (DBHOST, DBUSER, DBPASS, DBNAME) or die('Could not connect');


?>