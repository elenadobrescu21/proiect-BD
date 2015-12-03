<html>

<head>
<title> Create account  </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<style>


</style>


<body>
<div id="register_form" class="form-horizontal">
 <h1> Create account </h1>
 
 
<form action="Login/create_member" method="POST" class="form-horizontal">

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
	<input type="password" class="form-control" name="password_confirm" placeholder="First name" />
	</div>
	<div>
	<label for="Email" class="control-label"> Email </label>
	<input type="text" class="form-control" name="email" placeholder="Email" />
	</div>

	<label for="Telephone" class="control-label"> Telephone </label>
	<input type="text" class="form-control" name="telephone" placeholder="Telephone" />
	
	
	</div>	
	
	<div>
	<button type="submit" name="submit" value="Save" class="btn btn-primary" > Adauga</button> 
	</div>

</form>

</body>
</html>