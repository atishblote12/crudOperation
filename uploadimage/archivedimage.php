<?php 
	// connection
	$con = new mysqli("localhost" , "root" , "" , "practice");

	// write query
	$query = "SELECT * FROM gallery WHERE image_row = 0";

	// ecxacute query
	$result = $con->query($query);

	
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Archived  image</title>

 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>

	<label><h3>Archived image</h3></label>

 
 	<div class="container m-auto border ">
		<div class=" border table-responsive text-center" >
			<table class="col-12 table-bordered table-striped table ">
				<thead class=" thead-dark">
					<th>sr.no</th>
					<th>Name</th>
					<th>image</th>
					<th>Action</th>
				</thead>

				<?php 
					while ($data =$result->fetch_object()) {
						$location = $data->iimage_name;
						echo "<tr>";
							echo "<td>$data->id</td>";
							echo "<td >$data->iimage_name</td>";
							echo "<td class='text-center'> <img src='images/$location' height='100px' width='150px'  object-fit='cover'> </td>" ;
							echo " <td class='text-center'><a href='deleteimg.php?RecDelImg=$data->id'  class=' btn-success btn-sm'>Recover</a>";								
							echo " <a href='deleteimg.php?ImgHardDelete=$data->id'  class=' btn-danger btn-sm'>Delete</a></td>";								
							

						echo "</tr>";
					
					}


				?>
			</table>
		</div>
	</div>



 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 </body>
 </html>