<html>

<head> </head>

<body>
<h1> Adauga serviciu </h1>

<form action="Serviciu" method="POST">

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
	<select name="id_departament">
	<?php foreach($departament as $row) {
		?> <option value="<?= $row->id_departament ?>" name="id_departament"> <?php  echo $row->Nume_dep; ?> </option>
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