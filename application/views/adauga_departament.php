<html>

<head> 
<title> Adauga departament </title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
h1{
	text-align:center;
}
.formular{
	margin-top:50px;
	text-align:center;
	height:600px;
	width:400px;
	margin-left:auto;
	margin-right:auto;
}
.buton{
	margin-top:30px;
}
.form-field{
	margin-top:10px;
	margin-bottom:10px;
}

</style>

<body>
<h1> Adauga departament </h1>
<div class="formular">
<form action="Departament" method="POST" class="form-horizontal">

	<div class="form-field">
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" class="form-control" name="Nume_dep" placeholder="Nume departament" />
	</div>
	
	<div class="form-field">
	<label for="Manager" class="control-label"> Manager </label>
	<select name="Id_manager" class="form-control">
	<?php foreach($dt as $row) {
		echo $row->idAngajat;
		?> <option value="<?= $row->idAngajat ?>" name="Id_manager"> <?php  echo $row->Nume, " ", $row->Prenume; ?> </option>
		<?php   
	} ?>
	</select>
	</div>
	<div class="buton">
	<button type="submit" name="submit" value="Save" class="btn btn-primary" > Adauga</button> 
	</div>

</form>

</div>

</body>
</html>