<html>

<head> 
  <title> Adauga serviciu </title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<style>
.formular{
	margin-top:50px;
	text-align:center;
	height:600px;
	width:400px;
	margin-left:auto;
	margin-right:auto;
}
.title{
	text-align:center;
	margin-bottom:30px;
}
.buton{
	margin-top:30px;
}

</style>

<body>
<h1 class="title"> Adauga serviciu </h1>
<div class="formular">
<form action="index" method="POST" class="form-horizontal">

	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" class="form-control" name="Nume_serviciu" placeholder="Nume serviciu" />
	</div>
	
	<div>
	<label for="Pret" class="control-label"> Pret </label>
	<input type="text" class="form-control" name="Pret" placeholder="pret" />
	</div>
	
	<div>
	<label for="Manager" class="control-label"> Departament </label>
	<select name="id_departament" class="form-control">
	<?php foreach($departament as $row) {
		?> <option value="<?= $row->id_departament ?>" name="id_departament"> <?php  echo $row->Nume_dep; ?> </option>
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