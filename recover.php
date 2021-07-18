<?php 

	$recover = $_GET['RecoverId'];

	// link databases
	$con = new mysqli("localhost" , "root" ,"" , "practice");


	// write query
	$query = "UPDATE server SET  deleted_id = 1 WHERE id = $recover ";

	// exacutr query
	$result = $con->query($query);

	if ($result) {
		header('location:AdminData.php');
	}
	else{
		echo mysqli_error($con);
	}












 ?>