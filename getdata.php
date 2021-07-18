<?php 
	extract($_POST);
	$delete_id = 1;
	if (isset($_POST['regSubmit'])) {
		
		// echo "<pre>";
		// print_r($_POST);

		/*Database Connectivity*/
		$con  = new mysqli("localhost", "root", "", "practice");

		/*Write Query*/
		$query = "INSERT INTO server VALUES(NULL, '$fname', '$uemail', '$upass', '$mobile' , 1)";

		/*Execute the query*/
		// $result = $con->query($query);
		$result = $con->query($query);
		if ($result) {
			header('location:AdminData.php');
		}
		else{
			echo mysqli_error($con);
		}


	}







 ?>