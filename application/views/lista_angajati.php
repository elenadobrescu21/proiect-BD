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
</style>

<body>
<h1 class="title"> Lista angajatilor firmei </h1>
<table class="table table-striped">
<thead>
<th> Nume </th>
<th> Prenume </th>
<th> Update </th>
<th> Delete </th>
</thead>


<?php foreach ($dt as $row) {
	?>
	 <tr>										
	<td> <?php echo $row->Nume ?></td>
	<td> <?php echo  $row->Prenume ?> </td>
	<td> <button type="button" class="btn btn-info"> <a href="<?php echo base_url() . "update_ctrl/show_angajat_id/" . $row->idAngajat; ?>">Update</a> </button></td>
	<td> <button type="button" class="btn btn-warning">  <a href="<?php echo base_url() . "update_ctrl/delete/" . $row->idAngajat; ?>">Delete</a> </button> </td>
   </tr> 
 <?php  
} 

?>

</table>
</body>

</html>