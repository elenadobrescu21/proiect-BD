<html>

<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>

body {
     background-image: url("http://i68.tinypic.com/2ztbrk6.png");
}

.title{
	text-align:center;
	font-family:Cardo;
	padding-top:20px;
	padding-bottom:30px;
}

.main-content{
	margin-left:150px;
	margin-right:150px;
	background-color: #F5F4F0;
	border-radius:25px;
}
 h3{ 
	margin-left:20px;
}
.image-container {
	display:inline-block;
	margin-bottom:20px;
	
}
.image-container img {

	margin-left:10px;
    border-radius: 50%;
    overflow: hidden;
    width: 100px;
    height: 100px;
    float: left;

    border: 2px solid #333333;
}

.image-container p {
	margin-left:5px;
	
}

.meditatii{
	margin-left:40px;
}
.facebook{
	text-align:center;
}
h3{	
	text-align:center;
}




</style>

<body>
	<div class="main-content">
	<h1 class="title"> Afla cine sunt angajatii nostri  </h1>
	<h3> Meditatii </h3>
<div class= "meditatii">
  <?php  $i = 0; ?>
	<?php foreach ($ang as $r) {
	?>
	<div class="image-container">									
	 <img src="<?php echo site_url('images/'.$r->Poza) ?>" width="175" height="200" />
	
	<p> <b> Nume: </b> <?php echo $r->Nume . " " . $r->Prenume ?>   </p>
    <p> <b> Studii: </b><?php echo $r->Studii ?>   </p>	
	<p> <b> Descriere:</b> <?php echo $r->Descriere ?> </p>
	<p class="facebook"> <a href="<?php echo $r->Link_facebook ?>">  <b> Facebook </b></a> </p>
     </div>
 <?php  
} 

?>


	</div>
	
</div>
   
	
	
	


</body>

</html>