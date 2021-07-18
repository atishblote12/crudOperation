<?php 
	// connect
	$con = new mysqli("localhost", "root" ,"" , "practice");

	// write query
	$query = "SELECT * FROM server WHERE deleted_id = 0";

	// exacute query
	$result = $con->query($query);

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Arvived table</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<div class="container border border-dark p-0" >
		<div class="row  ml-auto m-0">
				
			<h3 class="text-center my-3">Archived data</h3>
			<table class="col-12 table-striped table  table-bordered table-hover">
				<thead class="table thead-dark">
					<th>sr.no</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Mobile</th>
					<th>Action</th>
				</thead>

				<?php 
					while ($data = $result->fetch_object()) {
						echo "<tr>";
							echo "<td>$data->id</td>";
							echo "<td>$data->lname</td>";
							echo "<td>$data->lemail</td>";
							echo "<td>$data->lpass</td>";
							echo "<td>$data->lmobile</td>";
							echo "<td>";
								echo"<a href='recover.php?RecoverId=$data->id' class='btn btn-success mr-2 btn-sm'>Recover</a>";
								echo "<a href='delete.php?hardDelete=$data->id'  class=' btn-danger btn-sm'>Delete</a>";								
							echo "</td>";

						echo "</tr>";
					}




				 ?>
			</table>










		</div>
	</div>
 </body>
 </html>