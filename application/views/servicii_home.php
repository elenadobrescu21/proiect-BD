<html>
<head>
	<title> Welcome to Home Serv </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/ci/css/homepage.css" />

</head>

<script>

jQuery(document).ready(function(){
      $("#departament").change(function() {
        var departament_id = $('#departament').val();
        console.log(departament_id);

        $.ajax({
          type: "POST",
          data: departament_id,
          url: "<?= base_url() ?>Lista_servicii/get_services/" + departament_id ,

          success: function(data){
			  $('#serviciu').empty();
            $.each(data, function(key1, val1){
		     var lei = " lei";
			 var puncte = ": ";
            $('#serviciu').append("<li>"+key1+ String(puncte)+ +val1+ String(lei)+ "</li>");
			console.log(key1);
			console.log(val1);
            });
           }
        
         });
       });
     });




</script>
	
<style>

#serviciu li {
	text-align:left;
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
					<b>Craiova, Sibiu, Constanta si Iasi.</b></p>
					</div>
					
					<h1> Meniu </h1>
			
					<div class="main-navigation">
					<ul class="nav-list">
					<li class="first-item"><a class="item1" href="<?php echo base_url(). "Echipa/index" ?>"><h4>Echipa<h4></a> </li>
					<li class="second-item"><a class="item2" href="<?php echo base_url() . "Lista_servicii/index"?>"><h4>Servicii<h4></a> </li>
					<li class="third-item"> <a class="item3" href="<?php echo base_url() . "Login/register_form"?>"><h4>Register</h4></a> </li>
					</ul>
					</div>
					<h1> Important !</h1>
					<h4> Pentru a putea apela la serviciile noastre trebuie sa aveti cont de client.  </h2>
					<h4>Click <a href="<?php echo base_url() . "Login/create_member"?>"> aici </a> pentru a va crea cont </h2>
					<h4>Click <a href="<?php echo base_url() . "log_in_existing"?>"> aici </a> pentru a va loga </h2>
					</div>
				</div>
	       
			
			<div class="col-lg-8">
			 <div class="big-contentbar">
			 	<img src="http://i65.tinypic.com/sp7m7n.jpg" alt="Banner"> 
			<h1> Bine ati venit la Home Serv !</h1>
			
		   
			<div class= "row">
			<div class="col-lg-6">
			<label for="f_dep"><h3>Categorie</h3></label> 
			<div>
				<select id="departament" name="departament">
					<option value=""></option>
					<?php
					foreach($deps as $d){
						echo '<option value="' . $d->id_departament . '">' . $d->Nume_dep . '</option>';
					}
					?>
				</select>
			</div>
			</div>
			<div class="col-lg-6">
			<div class="servicii">
			  <label for="f_serviciu"><h3>Servicii</h3></label> 
			<ul id="serviciu" name="f_serviciu" id="f_serviciu_label"> 
				
			</ul> 
		   </div>
		   </div>
            </div>
			 </div>
			</div>
			 </div>
			 </div>
	</div>
	
			


</body>
</html>