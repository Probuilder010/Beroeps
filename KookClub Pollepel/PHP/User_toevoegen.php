<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registeren</title>
</head>

<body>
	<h1>Voeg een gebruiker</h1>
	
	<form name="form1" method="post" action= "User_toevoeg_verwerk.php">
<!--	Naam van de gebruiker	-->
	<label for="Name">Naam</label><br>
    <input type="text" name="Naam" min="1"  max="40"required><br>
<!--	Gebruikersnaam	-->
    <label for="Gebruikersnaam">Gebruikersnaam</label><br>
    <input type="text" max="40" min="1"  name="Gebruikersnaam" required><br>
<!--	Geboortedatum van gebruiker-->
	<label for="Geboortedatum">Geboortedatum</label><br>
    <input type="date" name="Geboortedatum"   required><br>
<!--	Email van de gebruiker-->
	<label for="E-mail">E-mail</label><br>
    <input type="text" max="40" name="E-mail" required><br>
<!--	Wachtwoord van gebruiker-->
	<label for="Wachtwoord">Wachtwoord</label><br>
    <input type="password" max="40" name="Wachtwoord" required><br>
<!--	Verzenden en aanmaken van een nieuwe gebruiker-->
    <input type="submit" name="submit" max="40" value="verzenden">		

	</body>
</html>