<html>
<head>
	<title> Welcomem to Home Serv </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/ci/css/homepage.css" />

</head>

<script>

jQuery(document).ready(function(){
      $("#serviciu").change(function() {
        var serviciu_id = $('#serviciu').val();
        console.log(serviciu_id);

        $.ajax({
          type: "POST",
          data: serviciu_id,
          url: "<?= base_url() ?>Formular_comanda/get_angajati/" + serviciu_id ,

          success: function(data){
			  $('#angajat').empty();
            $.each(data, function(i, val){
		     var spatiu = " ";
            $('#angajat').append("<option value='"+i+"'>"+val+"</option>");
			 console.log(data.name);
            console.log(data.id_type)
            });
           }
        
         });
       });
     });





</script>
	
<style>

.hidden {
	display:none;
}
.formular{
	margin-top:20px;
	margin-bottom:20px;
}

.thanks{
	margin-top:50px;
}


</style>
<body>
	<div class="my-container">
		<div class="row">
			<div class="col-lg-4">
				<div class="small-contentbar">
	             <h1> Despre noi </h1>
					<div class="image-container">
					<img src="http://i66.tinypic.com/xfu87o.jpg">
					<p>Firma Home Serv SRL este activa pe piata inca din 2010, initial avand reprezentanta numai in Bucuresti. </p>
					<p>Pe parcursul timpului am reusit sa ne extindem,iar acum pot beneficia de serviciile noastre clienti din
					Craiova, Sibiu, Constanta si Iasi.</p>
					</div>
					
					<h1> Meniu </h1>
			
					<div class="main-navigation">
					<ul class="nav-list">
					<li class="first-item"><a class="item1" href="Echipa/index"><h4>Echipa<h4></a> </li>
					<li class="second-item"><a class="item2" href="Lista_servicii/index"><h4>Servicii si preturi<h4></a> </li>
					<li class="third-item"> <a class="item3" href="#"><h4>Formular comanda</h4></a> </li>
					</ul>
					</div>
					<div class="thanks">
					<h1> Va multumim ca apelati la serviciile noastre ! </h1>
		            </div>
					</div>
				</div>
	       
			
			<div class="col-lg-8">
			<div class = "big-contentbar">
				
		<h2>Formular comanda</h2>
		<h3> Nume client:  <?php echo $Nume . " " .$Prenume  ; ?> </h3>
		  
			<form action="Formular_comanda/add_to_comanda" method="POST" class="form-comanda form-horizontal">
				<div class="hidden">
					<input type="text" value="<?= $id ?>" class="form-control" name="client_id" placeholder="Id client" />	
				</div>
				<div class="formular">
			<label for="Serviciu" class="control-label"> Alegeti serviciu </label>
			<select id="serviciu" name="serviciu">
			<option value=""> </option>
		<?php foreach($servicii as $row) {
			?> <option value="<?= $row->Id_serviciu ?>" name="serviciu"> <?php  echo $row->Nume_serviciu; ?> </option>
			<?php   
		} ?>
		  </select>
		  </div>
		  <div class="formular">
		<label for="angajat">Alegeti angajat</label> 
		<select id="angajat" name="angajat" > 
            <option value="" name ="angajat"></option>
        </select>  
			</div>
			<div class="formular">
			<label for="angajat">Alegeti data</label> 
			<select name="luna" class="input-select ">
				<option value="">Luna</option>
				<?php for ($i = 1; $i <= 12; $i++) : ?>
				<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
				</select>
			<select name="data" class="input-select ">
					<option value="">Zi</option>
					<?php for ($i = 1; $i <= 31; $i++) : ?>
					<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
					<?php endfor; ?>
			</select>
			
			</div>
			<div class="formular">
			<label for="ora">Alegeti ora</label> 
				<select name="ora" class="input-select ">
					<option value="">Ora</option>
					<?php for ($i = 9; $i <= 17; $i++) : ?>
					<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
					<?php endfor; ?>
				</select>
			
				
			</div>
			
			<button type="submit" name="submit" value="Save" class="adauga btn btn-primary" > Trimite </button> 
			</form>
			  <a href="Home/logout">Logout</a>
			</div>
			
		</div>


			 </div>
			</div>
			
			

	
			


</body>
</html>

