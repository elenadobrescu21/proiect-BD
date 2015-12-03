<html>

<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
.title {
	text-align: center;
	margin-bottom:30px;
}

.tabel-angajati{
	margin-left:100px;
	margin-right:100px;
	text-align: center;
}
.adauga{
	text-align:center;
}
h1{
	margin-bottom:10px;
	margin-top:30px;
}
h4{
	margin-top:20px;
	margin-bottom:20px;
	margin-left:20px;
}
.buton {
	margin-left:20px;
}
th, td{
  text-align:center;
}
</style>

<body>
<h1 class="title"> Lista departamentelor firmei </h1>

<div class="tabel-angajati">
<table class="table table-striped">
<thead>
<th> Nume departament </th>
<th> Nume manager  </th>

</thead>


<?php foreach ($dt as $r) {
	?>
	 <tr>										
	<td> <?php echo $r->Nume_dep ?> </td>
	<td> <?php echo  $r->Nume . " " . $r->Prenume ?> </td>
	
	
   </tr> 
 <?php  
} 

?>

</table>
</div>

 <div class="adauga">          
	<button class="buton btn btn-default  btn-lg"> <a href="index">Adauga departament </a>  </button>
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>''>Back to admin panel</a>  </button> 
 </div>

</body>

</html>