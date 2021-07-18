<!DOCTYPE html>
<html>
<head>
	<title>registaton page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
	<body>

		<div class="container border border-dark text-center" >
			<div class=" ml-auto">

				<h3 class="text-center my-3">registation</h3>
				<form method="post" action="getdata.php">
					
					<div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Name</label>
					    <div class="col-8">
					      <input type="text"      class="col-8" name="fname">
					    </div>
				  </div>
				  <div class="form-group row">
				    <label  class="col-sm-2 col-form-label">Email</label>
				    <div class="col-8">
				      <input type="email"     class="col-8"    name="uemail">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label  class="col-sm-2 col-form-label">Password</label>
				    <div class="col-8">
				      <input type="password"  class="col-8"            name="upass">
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <label  class="col-sm-2 col-form-label">Mobile</label>
				    <div class="col-8">
				      <input type="text"  class="col-8"            name="mobile">
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <div class="col-sm-10">
				      <button type="submit" class="btn btn-primary" name="regSubmit" >Sign in</button>
				    </div>
				  </div>
				</form>
		</div>
	</div>















		<script src="js/jqurey.min.js"></script>
	    <script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>