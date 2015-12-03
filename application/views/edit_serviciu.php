<html>
<head> <title> Pagina de editat serviciu </title>    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>

<style>

.register-form{
	 width: 500px;
	 height:300px;
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
<h2 class="title"> Edit serviciu </h2>
<div class="formular">
	<?php foreach ($single_serviciu as $r): ?>
	<form action='<?php echo site_url('update_ctrl/update_serviciu_id1') ?>' method="POST" class="form-horizontal">
	<div class="register-form">
	
	<div class="hidden">
	<label id="hide">Id :</label>
		<input type="text" id="hide" name="did" value="<?php echo $r->Id_serviciu; ?>">
	</div>
	<div>
	<label for="Nume" class="control-label"> Nume </label>
	<input type="text" value="<?php echo $r->Nume_serviciu ?>" class="form-control" name="nume_serviciu" placeholder="Nume serviciu" />
	</div>
	
	<div>
	<label for="Nume"> Pret </label>
	<input type="text" value="<?php echo $r->Pret ?>" class="form-control" name="pret_serviciu" placeholder="Pret" />
	</div>
	
	<div>
	<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" > Update</button> 
	 <button class=" adauga btn btn-default"> <a href='<?php echo site_url('Serviciu/lista_servicii') ?>''>Back</a>  </button> 
	</div>
	</div>
	</form>
    <?php endforeach; ?>
	<? php echo validation_errors(); ?>


</div>

</body>

</html>