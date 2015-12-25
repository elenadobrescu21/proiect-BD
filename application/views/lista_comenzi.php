<html>

<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
.title {
	text-align: center;
}

.tabel-comenzi{
	margin-left:20px;
	margin-right:20px;
}
.back{
	margin-top:30px;
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

</style>

<body>
<h1 class="title"> Lista comenzi </h1>


<div class="tabel-comenzi">
<table class="table table-striped">
<thead>
<th> Nume client </th>
<th> Serviciu </th>
<th> Nume angajat </th>
<th> Data </th>
<th> Ora </th>

</thead>


<?php foreach ($comenzi as $r) {
	?>
	 <tr>										
	<td> <?php echo $r->Nume_client . " " . $r->Prenume_client; ?> </td>
	<td> <?php echo  $r->Nume_serviciu ?> </td>
	<td> <?php echo $r->Nume_angajat . " " . $r->Prenume_angajat;  ?> </td>
	<td> <?php echo $r->Data; ?> </td>
	<td> <?php echo $r->Ora; ?> </td>
	
	
   </tr> 
 <?php  
} 

?>

</table>
<div class="back">
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>'>Back to admin panel</a>  </button> 
</div>
</body>

</html>