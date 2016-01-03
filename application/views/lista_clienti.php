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

.tabel-clienti{
	margin-left:20px;
	margin-right:20px;
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
.second-content{
	padding-left:20px;
	padding-right:20px;
	text-align: center;
}
ul {
 list-style: none; 
}

.x-comenzi{
	margin-top:30px;
}

.tabel-max-comenzi {
	margin-top:63px;
}

.back{
	margin-top:30px;
	text-align:center;
}


</style>

<script>

jQuery(document).ready(function(){
	  
      $("#afiseaza").click(function(event) {
		 event.preventDefault();
		var numar_comenzi = parseInt($('#numar_comenzi').val());
		console.log(numar_comenzi);
         $.ajax({
          type: "POST",
          data: numar_comenzi,
          url: "<?= base_url() ?>Clienti/get_clienti/" + numar_comenzi ,

          success: function(data){
			  $('#dynamictable').empty();
			   $('#dynamictable').append('<table class='+ 'table' + ' ' + 'table-striped' +'></table>');
			 var table = $('#dynamictable').children(); 
			table.append("<thead><th> Nume </th>  <th> Prenume </th> </thead>")
            $.each(data, function(key1, val1){
				
			table.append("<tr><td>" + key1 + "</td><td>" +val1+  "</td></tr>");
			table.addClass('table table-striped');
			console.log(key1);
			console.log(val1);
          
            }); 
           }
        
         }); 
	   
	   
	   
	   
		});
	   
    });
	




</script>

<body>
<h1 class="title"> Lista clientilor firmei </h1>

<div class="tabel-clienti">
<table class="table table-striped">
<thead>
<th> Nume client </th>
<th> Prenume   </th>
<th> Username</th>
<th> Email  </th>
<th> Telefon </th>
</thead>


<?php foreach ($clients as $r) {
	?>
	 <tr>										
	<td> <?php echo $r->Nume?> </td>
	<td> <?php echo  $r->Prenume ?> </td>
	<td> <?php echo $r->username ?> </td>	
	<td> <?php echo $r->user_email ?> </td>
	<td> <?php echo $r->telephone ?> </td>
   </tr> 
 <?php  
} 

?>

</table>
</div>

		<div class="second-content">
		<div class="row">
			<div class="max-comenzi col-lg-6">
				<h2> Clienti cu cele mai multe comenzi </h2>
				<table class="tabel-max-comenzi table table-striped">
				<thead>
					<th> Nume client </th>
					<th> Numar comenzi  </th>
				
					</thead>
				<?php foreach ($MaxComenzi as $r) {
						?>
						<tr>
						<td> <?php echo $r->Nume . " " . $r->Prenume ?> </td>
						<td> <?php echo $r->Numar_comenzi ?> </td>
				        </tr>
					 <?php  
					} 

					?>
				
				
			</table>
				
	
			</div>
			
			<div class="col-lg-6">
			<h2> Useri cu x comenzi</h2>
			<div class="x-comenzi">
			<label for="Numar comenzi" class="control-label"> Numar comenzi </label>
				<input type="text" id="numar_comenzi" name="numar_comenzi" /> <span>
			
			<button  name="display"  class="btn btn-primary"  id="afiseaza"> Afiseaza</button> 
			
			</span>
			
			</div>
			
			<div id="dynamictable">
		
		   </div>
		
			</div>
		</div>
		</div>
		
<div class="back">
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>'>Back to admin panel</a>  </button> 
</div>
	

 
 

</body>

</html>