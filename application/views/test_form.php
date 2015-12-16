<html>
<head>
<title> Test form </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>


<script>
jQuery(document).ready(function(){
      $("#departament").change(function() {
        var departament_id = $('#departament').val();
        console.log(departament_id);

        $.ajax({
          type: "POST",
          data: departament_id,
          url: "<?= base_url() ?>control_form/get_services/" + departament_id ,

          success: function(data){
			  $('#serviciu').empty();
            $.each(data, function(i, val){
		 
            $('#serviciu').append("<option value='"+i+"'>"+val+"</option>");
			 console.log(data.name);
            console.log(data.id_type)
            });
           }
        
         });
       });
     });

</script>
<body>
<?php echo form_open('control_form/add_all'); ?>
	<label for="f_dep">Departament<span class="red">*</span></label> 
        <select id="departament" name="departament">
            <option value=""></option>
            <?php
            foreach($deps as $d){
                echo '<option value="' . $d->id_departament . '">' . $d->Nume_dep . '</option>';
            }
            ?>
        </select>
    <label for="f_serviciu">Serviciu<span class="red">*</span></label> 
		<select id="serviciu" name="f_serviciu" id="f_serviciu_label"> 
            <option value=""></option>
        </select>  
<?php echo form_close(); ?> 
</body>
</html>