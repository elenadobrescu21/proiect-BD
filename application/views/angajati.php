<html>
<head> <title> Pagina de adaugare angajati  </title>    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>

<style>
.register-form{
 width: 600px;
 height:1050px;
 margin-left: auto;
 margin-right: auto;
 text-align:center;
 padding:30px;
 border:3px solid black;
}
.title {
	text-align: center;
	margin-bottom:30px;
}
.adauga {
	position: relative;
	margin-left: auto;
	margin-right: auto;
	margin-top: 20px;
	width:130px;
	height:60px;
}
.input-select{
	margin-top:5px;
	margin-bottom:5px;
}
</style>
<body>
<h2 class="title"> Adauga angajati  </h2>
<div class="register-form">

	<form action="Register" method="POST" class="form-horizontal">
	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" class="form-control" name="nume_angajat" placeholder="Nume angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> Prenume </label>
	<input type="text" class="form-control" name="prenume_angajat" placeholder="Prenume angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> CNP </label>
	<input type="text" class="form-control" name="CNP_angajat" placeholder="CNP angajat" />
	</div>
	<div>
	<label for="Nume"> Strada </label>
	<input type="text" class="form-control" name="strada_angajat" placeholder="Strada angajat" />
	</div>
	<div>
	<label for="Nume" class="control-label"> Numar </label>
	<input type="text" class="form-control" name="numar_angajat" placeholder="Numar" />
	</div>
	<div>
	<label for="Judet" class="control-label"> Judet </label>
	<input type="text" class="form-control" value="<?php echo set_value('Judet'); ?>" name="Judet" placeholder="Judet"/>
	</div>
	<div>
	<label for="Sex" class="control-label"> Sex </label>
	<select name="sex_angajat" class="form-control">
	<option value="M"> M </option>
	<option value="F"> F </option>
	</select>
	</div>
	<div>
	<label for="Oras" class="control-label"> Oras </label>
	<input type="text" class="form-control" name="oras_angajat" placeholder="Oras" />
	</div>
	<div>
	<label for="DataNasterii" class="input-select control-label"> Data nasterii </label>
	<select name="yearOfBirth" class="form-control">
	<option value="">An</option>
	<?php for ($i = 1940; $i < date('Y'); $i++) : ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="monthOfBirth" class="input-select form-control">
	<option value="">Luna</option>
	<?php for ($i = 1; $i <= 12; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="dateOfBirth" class="input-select form-control">
	<option value="">Zi</option>
	<?php for ($i = 1; $i <= 31; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	</div>
	
	<div>
	<label for="DataAngajarii" class="control-label"> Data angajarii </label>
	<select name="anAngajare" class="input-select form-control">
	<option value="">An</option>
	<?php for ($i = 2006; $i< 2016; $i++) : ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="lunaAngajare" class="input-select form-control">
	<option value="">Luna</option>
	<?php for ($i = 1; $i <= 12; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	<select name="ziAngajare" class="input-select form-control">
	<option value="">Zi</option>
	<?php for ($i = 1; $i <= 31; $i++) : ?>
	<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
	<?php endfor; ?>
	</select>
	</div>
	<?php $data['departament'] = $this->model_departament->get_all_departments(); ?>
	<div>
	<label for="idDepartament" class="control-label"> Departament </label>
	<select name="Id_departament" class="input-select form-control">
	<?php foreach($departament as $row) {
		?> <option value="<?= $row->id_departament ?>" name="Id_departament"> <?php  echo $row->Nume_dep; ?> </option>
		<?php   
	} ?>
	</select>
	<div>
	<label for="Salariu" class="control-label"> Salariu </label>
	<input type="text" class="form-control" name="Salariu_angajat" placeholder="Salariu" />
	</div>
	<div>
	<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" > Adauga</button> 
	</div>
	</div>
	
	

	</form>
	<? php echo validation_errors(); ?>



</div>

</body>

</html>