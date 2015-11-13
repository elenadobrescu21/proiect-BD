<html>

<head> </head>

<body>
<h1> Adauga departament </h1>

<form action="Departament" method="POST">

	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" class="form-control" name="Nume_dep" placeholder="Nume departament" />
	</div>
	
	<div>
	<label for="Manager" class="control-label"> Manager </label>
	<select name="Id_manager">
	<?php foreach($dt as $row) {
		echo $row->idAngajat;
		?> <option value="<?= $row->idAngajat ?>" name="Id_manager"> <?php  echo $row->Nume, " ", $row->Prenume; ?> </option>
		<?php   
	} ?>
	</select>
	</div>
	<div>
	<button type="submit" name="submit" value="Save" class="btn btn-primary" > Adauga</button> 
	</div>


</form>



</body>
</html>