<html>

<head>
	<title> Create account  </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
#register_form {
	margin-top:50px;
	text-align:center;
	height:600px;
	width:400px;
	margin-left:auto;
	margin-right:auto;
}
.buton{
	margin-top:10px;
}

</style>


<body>
<div id="register_form" class="form-horizontal">
 <h1> Create account </h1>
 
 
<form action="<?php echo base_url() . "Login/create_member" ?>" method="POST" class="form-horizontal">

	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" class="form-control" name="first_name" placeholder="First name" />
	</div>
	
	<div>
	<label for="Prenume" class="control-label"> Prenume </label>
	<input type="text" class="form-control" name="last_name" placeholder="Last name" />
	</div>
	<div>
	<label for="Username" class="control-label"> Username </label>
	<input type="text" class="form-control" name="username" placeholder="Username" />
	</div>
	<div>
	<label for="Password" class="control-label"> Password </label>
	<input type="password" class="form-control" name="password" placeholder="Password" />
	</div>
	<div>
	<label for="Confirm pass" class="control-label"> Confirm password </label>
	<input type="password" class="form-control" name="password_confirm" placeholder="Confirm password" />
	</div>
	<div>
	<label for="Email" class="control-label">Oras </label>
	<input type="text" class="form-control" name="oras" placeholder="Oras" />
	</div>
	<div>
	<label for="Email" class="control-label"> Judet </label>
	<input type="text" class="form-control" name="judet" placeholder="Judet" />
	</div>
	<div>
	<label for="Email" class="control-label"> Strada</label>
	<input type="text" class="form-control" name="strada" placeholder="Strada" />
	</div>
	<div>
	<label for="Email" class="control-label">Numar </label>
	<input type="text" class="form-control" name="numar" placeholder="Numar" />
	</div>
	<div>
	<label for="Email" class="control-label"> Email </label>
	<input type="text" class="form-control" name="email" placeholder="Email" />
	</div>

	<label for="Telephone" class="control-label"> Telephone </label>
	<input type="text" class="form-control" name="telephone" placeholder="Telephone" />
	
	
	
	<div class="buton">
	<button type="submit" name="submit" value="Save" class="btn btn-primary" > Create account</button> 
	</div>

</form>

	</div>	
</body>
</html>