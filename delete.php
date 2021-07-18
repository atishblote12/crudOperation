<?php 

echo "delete page";
	// AdminData delete
	if (isset($_GET['deleteId'])) {
		// get deleted id from 
		$deletedId = $_GET['deleteId'];
		echo "data conect";
		// data base connectivity 
		$con = new mysqli("localhost" , "root" ,"" , "practice");
		echo "database connnect";

		// write query
		$query = "UPDATE server SET deleted_id = 0 WHERE id = $deletedId";
		echo "query conect";

		// exacute query
		$result = $con->query($query);
		echo "query exacuted conect";


		if ($result) {
			echo "data delete";
			header('location:archived.php');
		}
		else{
			echo mysqli_error($con);
		}
	}


	// archived delete
	elseif (isset($_GET['hardDelete'])) {
		echo "harddele";
		$deletedId = $_GET['hardDelete'];

		// connect to mysql
		$con = new mysqli("localhost" , "root" , "" , "practice");

		// write query
		$query = "DELETE FROM server WHERE id = $deletedId";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			echo "data hard delete";
			header('location:registation.php');
		}
		else{
			echo mysqli_error($con);
		}
	}


?>