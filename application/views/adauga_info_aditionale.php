<html>
<head> 
<title> Adauga informatii aditionale </title>    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>

<style>

.register-form{
	 width: 500px;
	 height:400px;
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

.hidden {
	display: none;
}
.adauga {
	margin-top:10px;
	display:inline;
	margin-left:10px;
}
</style>
<body>
<h2 class="title"> Adauga informatii</h2>
<div class="formular">
	<?php foreach ($single_angajat as $r): ?>
	<form action='<?php echo site_url('Angajati/adauga_info_aditionale') ?>' method="POST" class="form-horizontal" enctype="multipart/form-data">
	
	<div class="register-form">
	
	<div class="hidden">
	<label id="hide">Id :</label>
		<input type="text" id="hide" name="did" value="<?php echo $r->idAngajat; ?>">
	</div>
	
	<div>
	<label for="Nume" class="control-label"> Studii </label>
	<input type="text"class="form-control" name="studii_angajat" placeholder="Studii" />
	</div>
	
	<div>
	<label for="Nume"> Descriere</label>
	<input type="textarea"  class="form-control" name="descriere_angajat" placeholder="Descriere" />
	</div>
	
	<div>
	<label for="Nume"> Poza</label>
	<input type="file"  class="form-control" name="poza_angajat" placeholder="Poza" />
	</div>
	
	<div>
	<label for="Nume"> Link facebook </label>
	<input type="textarea"  class="form-control" name="link_facebook" placeholder="Link facebook" />
	</div>
		
	<div>
	<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" >Adauga</button> 

	</div>
	</div>
	</form>
    <?php endforeach; ?>
	<? php echo validation_errors(); ?>


</div>

</body>

</html>