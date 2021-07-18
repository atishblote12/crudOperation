<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


	<div class="container">
		<div class="w-100  justify-content-center d-flex">
			<form method="post" action="upload.php" enctype="multipart/form-data">
				<label><h3>upload image</h3></label>
				<div class="form-group  mt-5">
					<input type="file" name="image" id="image">
					
				</div>
				<button type="submit" name="UplodeImage" class="btn btn-primary btn-sm w-100" >Uploade</button>
				
			</form>
		</div>
	</div>










<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>