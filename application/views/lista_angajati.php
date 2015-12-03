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

.tabel-angajati{
	margin-left:20px;
	margin-right:20px;
}
.adauga{
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
<h1 class="title"> Lista angajatilor firmei </h1>

<h4> In firma se gasesc 
<?php foreach( $ang as $row) {
	echo $row->TotalAngajati;
}
?> angajati  </h4>
<div class="tabel-angajati">
<table class="table table-striped">
<thead>
<th> Nume </th>
<th> Prenume </th>
<th>Departament </th>
<th> Update </th>
<th> Info aditionale </th>
<th> Delete </th>
</thead>


<?php foreach ($ang_dep as $r) {
	?>
	 <tr>										
	<td> <?php echo $r->Nume ?> </td>
	<td> <?php echo  $r->Prenume ?> </td>
	<td> <?php echo $r->Nume_dep ?> </td>
	<td> <button type="button" class="btn btn-info"> <a href="<?php echo base_url() . "update_ctrl/show_angajat_id/" . $r->idAngajat; ?>">Update</a> </button></td>
	<td> <button type="button" class="btn btn-info">  <a href="<?php echo base_url() . "Angajati/show_angajat_id/" . $r->idAngajat; ?>">Adauga info</a> </button> </td>
	<td> <button type="button" class="btn btn-warning">  <a href="<?php echo base_url() . "update_ctrl/delete/" . $r->idAngajat; ?>">Delete</a> </button> </td>
	
   </tr> 
 <?php  
} 

?>

</table>
</div>

 <div class="adauga">          
	<button class="buton btn btn-default  btn-lg"> <a href="Register">Adauga angajat </a>  </button>
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>''>Back to admin panel</a>  </button> 
 </div>

</body>

</html>