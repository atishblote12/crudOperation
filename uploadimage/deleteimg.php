<?php 

	
	// recover image
	if (isset($_GET['RecDelImg'])) {

		$recdelete_row = $_GET['RecDelImg'];
		
		// connect
		$con = new mysqli("localhost" , "root" , "","practice");

		// query write
		$query = "UPDATE gallery SET image_row = 1 WHERE id =  $recdelete_row";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:retrive.php');
			
		}
		else{
			echo mysqli_error($con);
		}

	}





	
	// delete image
	if (isset($_GET['ImgDelete'])) {

		$delete_row = $_GET['ImgDelete'];
		
		// connect
		$con = new mysqli("localhost" , "root" , "","practice");

		// query write
		$query = "UPDATE gallery SET image_row = 0 WHERE id =  $delete_row";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:archivedimage.php');
			
		}
		else{
			echo mysqli_error($con);
		}

	}





// hard delete image

	if (isset($_GET['ImgHardDelete'])) {

		$Harddelete_row = $_GET['ImgHardDelete'];
		
		// connect
		$con = new mysqli("localhost" , "root" , "","practice");

		// query write
		$query = "DELETE FROM gallery WHERE id = $Harddelete_row";

		// exacute query
		$result = $con->query($query);

		if ($result) {
			header('location:retrive.php');
			
		}
		else{
			echo mysqli_error($con);
		}


	}




 ?>