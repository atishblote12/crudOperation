<?php 
	echo "<pre>";
	print_r($_FILES);

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	// image stored
	$destination = "images/".$image_name;

	// connectivity
	$con = new mysqli("localhost" ,"root", "", "practice");

	// query write
	$query = "INSERT INTO gallery VALUES (NULL , '$image_name' ,1)";


	if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:retrive.php');
			
		}
		else{
			echo "your file uploded but not submited";
			header('location:retrive.php');
		}

	}
	else{
		echo "your fule not upload and submited";
	}
 ?>