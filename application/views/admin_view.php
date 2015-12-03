<html>
<head>
<title> Admin Panel </title>

<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
.header1{
	text-align:center;
}
.main-container{
	margin-top:30px;
	margin-left:auto;
	margin-right:auto;
	border:1px solid black;
}
.angajati, .departamente, .servicii{
	text-align:center;
	
}
.buton {
	margin-top:10px;
	margin-bottom:10px;
	margin-left:auto;
	margin-right:auto;
}
.buton-main{
	width:150px;
}


</style>
<body>
	 <div class="row">
		<div class="col-md-12"></div>
		<h1 class="header1">Admin Panel </h1>
		<br> </br>

	</div>
	<div class = "main-container container">
	<div class="row">
	<div class="angajati col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Angajati">Angajati </a>  </button>
	 </div>
	</div>
	<div class="departamente col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Departament/lista_departamente">Departamente </a>  </button>
	 </div>
    </div>
	<div class="servicii col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Serviciu/lista_servicii">Servicii</a>  </button>
	 </div>
	</div>

    </div>
	<div class="row">
		<div class="angajati col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Angajati">Clienti </a>  </button>
	 </div>
	</div>
	<div class="departamente col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Departament/lista_departamente">Comenzi </a>  </button>
	 </div>
    </div>
	<div class="servicii col-md-4">
	<div class="buton">
	 <button class="buton-main btn btn-default  btn-lg"> <a href="Serviciu/lista_servicii">Statistici</a>  </button>
	 </div>
	</div>
	
	</div>
    </div>

</body>
</html>