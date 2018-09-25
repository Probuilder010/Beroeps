<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inlog</title>
<link rel="stylesheet" href="../PHP/logo.css">
</head>

<body>
	<?php
	// Als het formulier is verstuurd
	if (isset($_POST['inlog']))
	{
		//Voeg de databaseconnectie toe
		require 'config.inc.php';
//		// Beveiling van het gegevens!
//		
		//Lees de gegevens uit
		$Gebruikersnaam = $_POST['Name'];
		$Wachtwoord = $_POST['Wachtwoord'];
		
		//Maak de querry
		$opdracht = "SELECT * FROM Admin
		WHERE Name = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";
		//Voer de querry uit en van het resultaat op
		$resultaat = mysqli_query($mysqli, $opdracht);
		//Controleer of het resultaat een rij (user) heeft opgeleverd
		if (mysqli_num_rows($resultaat) > 0)
		{
			//Haal de user het resultaat 
			$user = mysqli_fetch_array($resultaat);
			//Zet de gebruikersnaam en Level in 2 verschillende sessions
			$_SESSION['Name'] = $user['Name'];
			
//			
			
			echo "<p>Hallo $Gebruikersnaam, u bent ingelogd.</p>";
		}
		
				
		// Anders:
	else
	{
		echo "<p> Naam en/of wachtwoord zijn onjuist.</p>";
		echo "<p><a href='inlog.php'> Probeer opnieuw</a></p>";
				

		echo mysqli_error($mysqli);  // tijdelijk
	}	
	
			
			
	
	}
	//Als het formulier niet is verstuurd:
	else
	{
		?>
		
	
	
		
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<a href="index.html"><img class="boven" src="../PHP/Image/Logo.png" alt="Logo" height="150" width="250"></a>
			
		</div>
		<br>
		
<form method="post" action="login.php">
		<div class="login">
				<input type="text" placeholder="username" name="Name"><br>
				<input type="password" placeholder="password" name="Wachtwoord"><br>
				<input type=submit name="inlog" value="LOG IN">
				<button><a href="registreer_lid.php">Registreren</a></button>
		</div>
		</form>

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

.body{
	position: absolute;
	top: -10px;
	left: -10px;
	right: -20px;
	bottom: -20px;
	width: 100%;
	height: 100%;
	background-image: url(../PHP/Image/restaurant-in-omgeving.jpg);
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
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}
			
			
button{
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

button:hover{
	opacity: 0.8;
}

button:active{
	opacity: 0.6;
}

button:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

button:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

button:focus{
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
	}
	?>
</body>
</html>
	