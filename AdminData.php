
<?php

	// mysql connectivity
	$con = new mysqli("localhost" , "root" , "" , "practice");

	// write query data
	$query = "SELECT * FROM server WHERE deleted_id = 1";

	// exacute query
	$result = $con->query($query);

	
	// echo"<pre>";
	// print_r($result);
	// display rows fetch data
	// $data = $result->fetch_object();
	// echo"<pre>";
	// print_r($data);



?>




<!DOCTYPE html>
<html>
<head>
	<title>data table page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
	<body>

		<div class="container border border-dark " >
			<div class=" ml-auto">
				
				<h3 class="text-center my-3">Admin data</h3>

				<table class="col-12 table-striped table border border-dark" >
					<thead class="table-dark">
						<th>Sr.no</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Mobile</th>
						<th>Action</th>
					</thead>

					<?php 

						while ($data = $result->fetch_object()) {
							echo "<tr> ";
							echo "<td> $data->id </td>";
							echo "<td> $data->lname </td>";
							echo "<td> $data->lemail </td>";
							echo "<td> $data->lpass </td>";
							echo "<td> $data->lmobile </td>";
							
							echo "<td>";
								echo"<a href='delete.php?deleteId=$data->id' class='btn btn-danger btn-sm'>Delete</a>";
							echo"</td>";
							echo "</tr>";
						}


					 ?>
				</table>
			
		</div>
	</div>















		<script src="js/jqurey.min.js"></script>
	    <script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>