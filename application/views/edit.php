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
.hidden {
	display: none;
}
</style>
<body>
<h2 class="title"> Edit angajati </h2>
<div>
	<?php foreach ($single_angajat as $r): ?>
	<form action='<?php echo site_url('update_ctrl/update_angajat_id1') ?>' method="POST" class="form-horizontal">
	<div class=" register-form form-group col-lg-6">
	<div class="hidden">
	<label id="hide">Id :</label>
		<input type="text" id="hide" name="did" value="<?php echo $r->idAngajat; ?>">
	</div>
	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" value="<?php echo $r->Nume ?>" class="form-control" name="nume_angajat" placeholder="Nume angajat" />
	</div>
	
	<div>
	<label for="Nume"> Strada </label>
	<input type="text" value="<?php echo $r->Strada ?>" class="form-control" name="strada_angajat" placeholder="Strada angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> Numar </label>
	<input type="text" value="<?php echo $r->Numar ?>" class="form-control" name="numar_angajat" placeholder="Numar" />
	</div>
	<div>
	<label for="Judet" class="control-label"> Judet </label>
	<input type="text" class="form-control" value="<?php  echo $r->Judet ?>" name="Judet" placeholder="Judet"/>
	</div>
	<div>
	<label for="Oras" class="control-label"> Oras </label>
	<input type="text" class="form-control" value="<?php echo $r->Oras ?>" name="oras_angajat" placeholder="Oras" />
	</div>
	<div>
	<label for="Sex" class="control-label"> Sex </label>
	<select name="sex_angajat">
	<option value="M"> M </option>
	<option value="F"> F </option>
	</select>
	</div>
	<div>
	<label for="DataNasterii" class="control-label"> Data nasterii </label>
	<select name="yearOfBirth">
	<option value="">---Select year---</option>
	<?php for ($i = 1940; $i < date('Y'); $i++) : ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="monthOfBirth">
	<option value="">---Select month---</option>
	<?php for ($i = 1; $i <= 12; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="dateOfBirth">
	<option value="">---Select date---</option>
	<?php for ($i = 1; $i <= 31; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	</div>
	
	<div>
	<label for="DataAngajarii" class="control-label"> Data angajarii </label>
	<select name="anAngajare">
	<option value="">---Select year---</option>
	<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="lunaAngajare">
	<option value="">---Select month---</option>
	<?php for ($i = 1; $i <= 12; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="ziAngajare">
	<option value="">---Select date---</option>
	<?php for ($i = 1; $i <= 31; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	</div>
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
	<input type="text" class="form-control" value="<?php  echo $r->Salariu ?>" name="Salariu_angajat" placeholder="Salariu" />
	</div>
	</div>
	
	<div>
	<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" > Update</button> 
	</div>
	</div>
	</form>
	<?php endforeach; ?>
	<? php echo validation_errors(); ?>


</div>

</body>

</html>