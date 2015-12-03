<html>
<head>
	<title> Welcomem to Home Serv </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	
	
<style>
.content{
  margin-top:250px;
  margin-left: 190px;
  margin-top:15px;
  position: absolute;
  background-color:#F5F4F0;
}
body {
    background-color: #8fd2f0;
}
.welcome{
	text-align:center;
}
hr{
	border-width:4px;
	color:black;
}
.navigation_menu {
	width:150px;
	display:inline-block;
	
}
.page_content{
	width:780px;
	display:inline-block;
	text-align:center;
	margin-left:30px;
	margin-top:0px;
	padding-top:0px;
	
}
.menu_title{
	text-align:center;
}
.second-content {
	height:500px;
}
#lista_servicii{
list-style-type:none;
}

</style>
</head>

<body>
	<div class="content container">
		<img src="http://i65.tinypic.com/sp7m7n.jpg" alt="Banner">
		<hr>
	    <h1 class="welcome"> Bine ati venit la Home Serv! </h1>
		<div class="second-content">
		 <div class="navigation_menu">
            <h3 class="menu_title">Menu</h3>
            <ul id="main_menu">
                <li class="menu_item menu_item_one activ">
                  <h5>  <a href="" target="_blank" title="menu link 1">Servicii</a> </h5>
                </li>
                <li class="menu_item menu_item_two">
                 <h5>   <a href="" target="_blank" title="menu link 2">Echipa</a> </h5>
                </li>
                <li class="menu_item menu_item_three">
                 <h5>   <a href="" target="_blank" title="menu link 3">Completati formular</a> </h5>
                </li>
            </ul>
        </div>
		<div class="page_content">
		<h3> Home Serv SRL va sta la dispozitie cu urmatoarele servicii: </h3>
		 <ul id="lista_servicii">
                <li class="menu_item menu_item_one activ">
                 <h4> Curatenie </h4>
                </li>
                <li class="menu_item menu_item_two">
                <h4> Ingrijire bolnavi/copii </h4>
                </li>
                <li class="menu_item menu_item_three">
                <h4> Meditatii </h4>
                </li>
            </ul>
	       <h2>Welcome <?php echo $username; ?>!</h2>
		    <a href="private_home/logout">Logout</a>
		</div>
	</div>
	</div>

	</div>
	</div>



</body>
</html>