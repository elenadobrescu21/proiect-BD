<html>
<head>
	<title> Welcome to Home Serv </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	  <link rel="stylesheet" type="text/css" href="/ci/css/homepage.css" />

</head>
	

<body>
	<div class="my-container">
		<div class="row">
			<div class="col-lg-4">
				<div class="small-contentbar">
	             <h1> Despre noi </h1>
					<div class="image-container">
					<img src="http://i66.tinypic.com/xfu87o.jpg">
					<p>Firma Home Serv SRL este activa pe piata inca din <b>2010 </b>, initial avand reprezentanta numai in Bucuresti. </p>
					<p>Pe parcursul timpului am reusit sa ne extindem,iar acum pot beneficia de serviciile noastre clienti din
					<b>Craiova, Sibiu, Constanta si Iasi. </b> </p>
					</div>
					
					<h1> Meniu </h1>
			
					<div class="main-navigation">
					<ul class="nav-list">
					<li class="first-item"><a class="item1" href="Echipa/index"><h4>Echipa<h4></a> </li>
					<li class="second-item"><a class="item2" href="Lista_servicii/index"><h4>Servicii si preturi<h4></a> </li>
					<li class="third-item"> <a class="item3" href="Login/register_form"><h4>Register</h4></a> </li>
					</ul>
					</div>
					<h1> Important !</h1>
					<h4> Pentru a putea apela la serviciile noastre trebuie sa aveti cont de client.  </h2>
		       <h4>Click <a href="Login/register_form"> aici </a> pentru a va crea cont </h2>
		    <h4>Click <a href="log_in_existing"> aici </a> pentru a va loga </h2>
					</div>
				</div>
	       
			
			<div class="col-lg-8">
			 <div class="big-contentbar">
			 	<img src="http://i65.tinypic.com/sp7m7n.jpg" alt="Banner"> 
			<h1> Bine ati venit la Home Serv !</h1>
			
			<h3> Home Serv SRL va sta la dispozitie cu urmatoarele servicii: </h3>
		         <ul id="lista_servicii">
	<?php foreach($deps as $d) { 
             ?>   <li class="menu_item menu_item_one activ">
                 <h4> <?php echo $d->Nume_dep ?></h4>
                </li>
	<?php }
  ?>	
            </ul>
				


			 </div>
			</div>
			 </div>
			 </div>
	</div>
	
			


</body>
</html>