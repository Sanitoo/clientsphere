<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "fimi";

$connect = mysqli_connect($server, $username, $password, $dbname);
//connect to database
if (!$connect) {
	die(mysqli_connect_error());
}
?>