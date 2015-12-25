<html>
<head>
	<title> Welcomem to Home Serv </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

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
.my-container {
    margin-left: 120px;
    margin-right: 120px;
}

body {
     background-image: url("http://i68.tinypic.com/2ztbrk6.png");
}
.par{

  margin-left:3px;
  font-family:Cardo;
  
}

img {
	max-width: 100%;
    height: auto;
    border-radius: 25px;
	}
	
.small-contentbar, .big-contentbar {
    background-color: #F5F4F0;
    position: relative;
    min-height: 600px;
    border-radius: 25px;
	margin-top:20px;
}
.big-contentbar {
	text-align:center;
}

#lista_servicii{
	list-style-type:none;
}
.small-contentbar h1, .big-contentbar h1 {
    margin-top: 15px;
	font-family:Cardo;
    font-weight: 400;
    font-style: italic;
    color: #333333;
    text-align: center;
	
}
.small-contentbar .image-container img {
    border-radius: 50%;
    overflow: hidden;
    width: 100px;
    height: 100px;
    float: left;
 
    border: 2px solid #333333;
}

.small-contentbar .main-navigation ul li {
    list-style: none;
	text-align: center;
	
}
.small-contentbar .main-navigation ul li a h4 {
   color: #333333;
    
}
.small-contentbar .main-navigation ul li a {
	text-decoration:none;
}

.small-contentbar .main-navigation ul li a h4:hover {
    background-color:#808080;
	text-decoration:none;
}
 ul {
   -webkit-padding-start: 0px;
 }
 .small-contentbar h4{
	text-align:center;
	
}
.big-contentbar h1{
	margin-bottom:40px;
}
.big-contentbar h3, .big-contentbar h4{
		font-family:Cardo;
}
.hidden {
	display:none;
}
.formular{
	margin-top:20px;
	margin-bottom:20px;
}


</style>
<body>
	<div class="my-container">
		<div class="row">
			<div class="col-lg-4">
				<div class="small-contentbar">
	             <h1> About </h1>
					<div class="image-container">
					<img src="elena.jpg">
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
					</div>
					
					<h1> Menu </h1>
			
					<div class="main-navigation">
					<ul class="nav-list">
					<li class="first-item"><a class="item1" href="Echipa/index"><h4>Echipa<h4></a> </li>
					<li class="second-item"><a class="item2" href="Lista_servicii/index"><h4>Servicii si preturi<h4></a> </li>
					<li class="third-item"> <a class="item3" href="#"><h4>Formular comanda</h4></a> </li>
					</ul>
					</div>
					<h1> Important !</h1>
					<h4> Pentru a putea apela la serviciile noastre trebuie sa aveti cont de client.  </h2>
		       <h4>Click <a href="Login/create_member"> aici </a> pentru a va crea cont </h2>
		    <h4>Click <a href="log_in_existing"> aici </a> pentru a va loga </h2>
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

