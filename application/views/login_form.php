<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Log in</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </head>
 
 <style>
 
 .formular{
	margin-top:50px;
	text-align:center;
	height:300px;
	width:300px;
	margin-left:auto;
	margin-right:auto;
	
}
.title{
	margin-bottom:20px;
}

.buton{
	margin-top:10px;
}

 
 </style>
 <body>
 <div class="formular">
   <h1 class="title">Log in </h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text"  class="form-control" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password"  class="form-control" size="20" id="passowrd" name="password"/>
     <br/>
	 <div class="buton">
  	<button type="submit" name="submit" value="login" class="btn btn-primary" > Login</button> 
	</div>
   </form>
  </div>
 </body>
</html>