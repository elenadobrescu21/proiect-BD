<html>
<head> <title> Pagina de editat angajat  </title>    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>

<style>
.register-form{
 margin-top: 100px;
 width: 100%;
 margin-left: auto;
 margin-right: auto;
 display: block;
 padding-left: 30px;
 position:absolute;
}
.title {
	text-align: center;
}
.adauga {
	position: relative;
	margin-left: auto;
	margin-right: auto;
	margin-top: 20px;
}
</style>
<body>
<h2 class="title"> Edit angajati </h2>
<div>
	
	<form action="Register" method="POST" class="form-horizontal">
	<div class=" register-form form-group col-lg-6">
	<div>
	<label for="Nume" class="control-label"> Angajat iD </label>
	<input type="text" value="<? = $r->idAngajat ?>" class="form-control" name="angajat_id" placeholder="Nume angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" value="<? = $r->Nume ?>" class="form-control" name="nume_angajat" placeholder="Nume angajat" />
	</div>
	
	<div>
	<label for="Nume"> Strada </label>
	<input type="text" value="<? = $r->Strada ?>" class="form-control" name="strada_angajat" placeholder="Strada angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> Numar </label>
	<input type="text" value="<? = $r->Numar ?>" class="form-control" name="numar_angajat" placeholder="Numar" />
	</div>
	<div>
	<label for="Judet" class="control-label"> Judet </label>
	<input type="text" class="form-control" value="<? = $r->Judet ?>" name="Judet" placeholder="Judet"/>
	</div>
	<div>
	<label for="Oras" class="control-label"> Oras </label>
	<input type="text" class="form-control" value="<? = $r->Oras ?>" name="oras_angajat" placeholder="Oras" />
	</div>
	
	<?php $data['departament'] = $this->model_departament->get_all_departments(); ?>
	<div>
	<label for="idDepartament" class="control-label"> Departament </label>
	<select name="Id_departament">
	<?php foreach($departament as $row) {
		?> <option value="<?= $row->id_departament ?>" name="Id_departament"> <?php  echo $row->Nume_dep; ?> </option>
		<?php   
	} ?>
	</select>
	<div>
	<label for="Salariu" class="control-label"> Salariu </label>
	<input type="text" class="form-control" name="Salariu_angajat" placeholder="Salariu" />
	</div>
	</div>
	
	<div>
	<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" > Update</button> 
	</div>
	</div>
	</form>
	<? php echo validation_errors(); ?>



</div>

</body>

</html>