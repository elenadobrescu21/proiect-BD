<html>
<head> 
	<title> Statistici </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	  <link rel="stylesheet" type="text/css" href="/ci/css/statistici.css" />
	 
</head>
<script>


jQuery(document).ready(function(){
	  
      $("#afiseaza").click(function(event) {
		 event.preventDefault();
		var an = '2016';
		var data = $('#data2').val();
		var luna = $('#luna').val();
		var data_completa = an + '-' + luna + '-' + data;
         $.ajax({
          type: "POST",
          data: data_completa,
          url: "<?= base_url() ?>Statistici/get_comenzi/" + data_completa ,

          success: function(data){
			  console.log(data); 
			     $('#dynamictable').empty();
			 $('#dynamictable').append('<table></table>');
			 var table = $('#dynamictable').children(); 
			 table.append("<thead><th> Nume client </th> <th> Serviciu </th> <th> Nume angajat </th> </thead>")
            $.each(data, function(key,item){
			str = item;
			var res = str.split(" ");
			console.log(res[0]);
			var i;
			var serviciu = [];
			for(i = 0; i<res.length-2; i++) {
				serviciu[i] = res[i+2];	
			}
			var serv = serviciu.join(" ");
			table.append("<tr><td>" + key + "</td><td>" + serv + "</td><td>" +res[0]+ ' ' + res[1]+ "</td></tr>");
			table.addClass('table table-striped table-centered');
            }); 
           }       
         }); 
       });	   
     });
	 
	 //buton 2 
	jQuery(document).ready(function(){ 
	  $("#afiseaza2").click(function(event) {
			 event.preventDefault();
			 var nume_dep = $('#departament').val();
			 var salariu = $('#salariu').val();
			 var hasSpace = $('#departament').val().indexOf(' ')>=0;
			 if(hasSpace) {
				 nume_dep = nume_dep.split(' ').join('_');
			 }
			 var dep_salariu= nume_dep + '_' + salariu;
			   $.ajax({
					type: "POST",
					data: dep_salariu ,
					url: "<?= base_url() ?>Statistici/get_angajati/" + dep_salariu,

          success: function(dep_salariu){
		
			    $('#dynamictable2').empty();
			 
			 $('#dynamictable2').append('<table></table>');
			 var table = $('#dynamictable2').children(); 
			 table.append("<thead><th> Nume angajat </th> <th> Salariu </th> </th>")
            $.each(dep_salariu, function(key,item){
				table.append("<tr><td>" + key + "</td><td>" +item+ "</td></tr>");
				table.addClass('table table-striped');
            }); 
           }
        
         });    
		});
	   
    });
	
	//buton 3
	
	jQuery(document).ready(function(){ 
	  $("#afiseaza3").click(function(event) {
			 event.preventDefault();
			 var nume_angajat = $('#nume').val();
			 var prenume_angajat = $('#prenume').val();
			 var nume_complet = nume_angajat + '_' + prenume_angajat;
			   $.ajax({
					type: "POST",
					data: nume_complet ,
					url: "<?= base_url() ?>Statistici/get_comenzi_by_angajat/" + nume_complet,

          success: function(nume_complet){
			  console.log(nume_complet); 
			     $('#dynamictable3').empty();
			 $('#dynamictable3').append('<table></table>');
			 var table = $('#dynamictable3').children(); 
			 table.append("<thead><th> Nume client </th> <td>Serviciu </th> <th> Data </th> <th> Ora </th> </thead>")
            $.each(nume_complet, function(key,item){
			str = key;
			var res = str.split(" ");
		  	table.append("<tr><td>" + res[0]+ ' ' + res[1] + "</td><td>" +item+  "</td><td>" + res[2]+ "</td><td>" + res[3] + "</td></tr>");
			table.addClass('table table-striped');
            }); 
           }      
         });    
		});
	   
    });

	//buton 4
	
	jQuery(document).ready(function(){ 
	  $("#afiseaza4").click(function(event) {
			 event.preventDefault();
			 var nume_departament = $('#departament2').val();
			 var hasSpace = $('#departament2').val().indexOf(' ')>=0;
			 if(hasSpace) {
				 nume_departament = nume_departament.split(' ').join('_');
			 }
			 console.log(nume_departament);
			   $.ajax({
					type: "POST",
					data: nume_departament ,
					url: "<?= base_url() ?>Statistici/comenzi_by_departament/" + nume_departament,

          success: function(nume_departament){
			   $('#dynamictable4').empty();
			  console.log(nume_departament); 
			 $('#dynamictable4').append('<table></table>');
			 var table = $('#dynamictable4').children(); 
			 table.append("<thead><th> Nume angajat</th>  <th> Numar comenzi </th> </th>")
            $.each(nume_departament, function(key,item){
				table.append("<tr><td>" + key + "</td><td>" +item+  "</td></tr>");
				table.addClass('table table-striped');
            }); 
           }
        
         }); 	   
		});
	   
    });
	
	//buton 5
	
	
	jQuery(document).ready(function(){ 
	  $("#afiseaza5").click(function(event) {
			 event.preventDefault();
			 var nume_departament = $('#departament3').val();
			 var hasSpace = $('#departament3').val().indexOf(' ')>=0;
			 if(hasSpace) {
				 nume_departament = nume_departament.split(' ').join('_');
			 }
			 console.log(nume_departament);
			   $.ajax({
					type: "POST",
					data: nume_departament ,
					url: "<?= base_url() ?>Statistici/numar_angajati_in_departament/" + nume_departament,

          success: function(nume_departament){
			   $('#dynamictable5').empty();
			  console.log(nume_departament); 
			 $('#dynamictable5').append('<table></table>');
			 var table = $('#dynamictable5').children(); 
			 table.append("<thead><th> Nume departament</th>  <th> Numar angajati </th> </thead>")
            $.each(nume_departament, function(key,item){
				table.append("<tr><td>" + key + "</td><td>" +item+  "</td></tr>");
				table.addClass('table table-striped');
            }); 
           }
        
         }); 	   
		});
	   
    });

	
</script>



<body>

<h1> Statistici </h1>

    <div class ="content">
		<div class="select">
		<h3> Toate comenzile de la o anumita data </h3>
			<label for="angajat">Alegeti data</label> 
			<select name="luna" class="input-select" id ="luna">
				<option value="">Luna</option>
				<?php for ($i = 1; $i <= 12; $i++) : ?>
				<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
				</select>
			<select name="data2" class="input-select" id="data2">
					<option value="">Zi</option>
					<?php for ($i = 1; $i <= 31; $i++) : ?>
					<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
					<?php endfor; ?>
			</select>
				
			<button  name="display"  class="btn btn-primary"  id="afiseaza"> Afiseaza</button>
		</div>
		

		<div id="dynamictable">
			
		</div>
			
		<div class="select">
			<h3> Angajatii din departamentul Xcu salariul mai mare decat Y</h3>
			<label for="angajat">Alegeti departamentul</label> 
			<select id="departament" name="departament">
				<option></option>
					<?php
					foreach($deps as $d){ ?>
							<option> <?php echo $d->Nume_dep ?> </option>
					
					<?php }
					?>
				</select>
						
			<label for="Salariu" class="control-label"> Salariu mai mare decat: </label>
				<input type="text" id="salariu" name="salariu" /> <span>
				<button  name="display"  class="btn btn-primary"  id="afiseaza2"> Afiseaza</button> </span>
	    </div>
		
		<div id="dynamictable2">
			
		</div>
			
		<div class="select">
			<h3> Toate comenzile pe care le are un anumit angajat </h3>
					<label for="Nume angajat">Nume angajat</label> 
					<input type="text" id="nume" name="nume" />
					<label for="Prenume angajat"> Prenume </label>
					<input type="text" id="prenume" name="prenume" />  
					
					<button  name="display"  class="btn btn-primary"  id="afiseaza3"> Afiseaza</button>
			
			  <div id="dynamictable3">
			
			  </div>
			
			
		</div>
			
		<div class="select">
			<h3> Angajatii dintr-un anumit departament si numarul de comenzi al acestora</h3>
				<label for="angajat">Alegeti departamentul</label> 
				<select id="departament2" name="departament2">
					<option></option>
					<?php
					foreach($deps as $d){ ?>
						
						<option> <?php echo $d->Nume_dep ?> </option>
			
					<?php }
					?>
				</select>
				
				<button  name="display"  class="btn btn-primary"  id="afiseaza4"> Afiseaza</button>
			
			      <div id="dynamictable4">
			
					</div>
			
			
		</div>
			
			<div class="select">
			
			<h3> Numarul de angajati dintr-un departament </h3>
			<label for="angajat">Alegeti departamentul</label> 
				<select id="departament3" name="departament2">
					<option></option>
					<?php
					foreach($deps as $d){ ?>
						
						<option> <?php echo $d->Nume_dep ?> </option>
			
					<?php }
					?>
				</select>
				
				<button  name="display"  class="btn btn-primary"  id="afiseaza5"> Afiseaza</button>
				
				 <div id="dynamictable5">
			
					</div>
					
			</div>
	</div>
	
	<div class="back">
	<button class="buton btn btn-default btn-lg"> <a href='<?php echo site_url('Admin') ?>'>Back to admin panel</a>  </button> 
	</div>

</body>
</html>