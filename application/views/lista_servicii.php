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

.tabel-serviciu{
	margin-left:20px;
	margin-right:20px;
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

</style>

<body>
<h1 class="title"> Lista serviciilor firmei </h1>

<div class="tabel-serviciu">
<table class="table table-striped">
<thead>
<th> Nume serviciu </th>
<th> Pret   </th>
<th> Nume departament</th>
<th> Update  </th>
<th>Delete </th>
</thead>


<?php foreach ($serv as $r) {
	?>
	 <tr>										
	<td> <?php echo $r->Nume_serviciu ?> </td>
	<td> <?php echo  $r->Pret ?> </td>
	<td> <?php echo $r->Nume_dep ?> </td>	
	<td> <button type="button" class="btn btn-info"> <a href="<?php echo base_url() . "update_ctrl/show_serviciu_id/" . $r->Id_serviciu; ?>">Update</a> </button></td>
	<td> <button type="button" class="btn btn-warning">  <a href="<?php echo base_url() . "update_ctrl/delete_serviciu/" . $r->Id_serviciu; ?>">Delete</a> </button> </td>
   </tr> 
 <?php  
} 

?>

</table>
</div>

 <div class="adauga">          
	<button class="buton btn btn-default  btn-lg"> <a href="index">Adauga serviciu  </a>  </button>
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>'>Back to admin panel</a>  </button> 
 </div>
 

</body>

</html>