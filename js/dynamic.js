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
			 table.append("<tr><td> Nume client </td> <td> Serviciu </td> <td> Nume angajat </td> </tr>")
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
			table.addClass('table table-striped');
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
			 var dep_salariu= nume_dep + '_' + salariu;
			   $.ajax({
					type: "POST",
					data: dep_salariu ,
					url: "<?= base_url() ?>Statistici/get_angajati/" + dep_salariu,

          success: function(dep_salariu){
		
			    $('#dynamictable2').empty();
			 
			 $('#dynamictable2').append('<table></table>');
			 var table = $('#dynamictable2').children(); 
			 table.append("<tr><td> Nume angajat </td> <td> Salariu </td> </tr>")
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
			 table.append("<tr><td> Nume client </td> <td>Serviciu </td> <td> Data </td> <td> Ora </td> </tr>")
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
			 table.append("<tr><td> Nume angajat</td>  <td> Numar comenzi </td> </tr>")
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
			 table.append("<tr><td> Nume departament</td>  <td> Numar angajati </td> </tr>")
            $.each(nume_departament, function(key,item){
				table.append("<tr><td>" + key + "</td><td>" +item+  "</td></tr>");
				table.addClass('table table-striped');
            }); 
           }
        
         }); 	   
		});
	   
    });