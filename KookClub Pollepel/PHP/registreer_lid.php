<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>lid_toevoeg</title> 
</head>

<body>
	<form method="post" action="registreer_lid_verwerk.php">
		
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<a href="index.html"> <img class="boven" src="Logo.png" alt="Logo" height="150" width="250"></a>
			
		</div>
		<br>
		
		<div class="login">
				<input type="text" placeholder="Naam" name="Naam"><br>
				<input type="text" placeholder="Gebruikersnaam" name="Gebruikersnaam"><br>
				<input type="text" placeholder="email" name="Email"><br>
				<input type="password" placeholder="Wachtwoord" name="Wachtwoord"><br>
				<input type="date" placeholder="Geboortedatum" name="Geboortedatum"><br>
				
				
				<input  onClick="myFunction()"type=submit  name="verzenden" value="Verzenden">
				
		</div>
		</form>
<script>
function myFunction() {
	alert("Je account is aangemaakt en klaar voor gebruik!");
}	
	 
	
	
</script>
		<style>
@charset "UTF-8";
/* CSS Document */
@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

			.boven
{
	margin-top: -100px;
	position: relative;
	top: -50px;
	right: -150px;
}
.body{
	position: absolute;
	top: -10px;
	left: -10px;
	right: -20px;
	bottom: -20px;
	width: 100%;
	height: 100%;
	background-image: url(../PHP/Image/vishaal.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(60% - 75px);
	left: calc(47% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;

	
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}
			
.login input[type=date]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}
.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px thick rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px thick rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}	
			
	</style>
	<?php
	
	?>
</body>
</html>
	
	<?php
		if (isset($_POST[‘verzenden’]))
	?>
</body>
</html>
