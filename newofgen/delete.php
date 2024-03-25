<?php 
	//delete operation
	include 'connectdatabase.php'; // establish connection to db
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id=$id";
	// execute query
	$result = mysqli_query($connect, $sql);
	if($result){
		//echo "Deleted successfully";
		header("location:displayi.php");
	} else {
		die(mysqli_error($connect));
	}

?>