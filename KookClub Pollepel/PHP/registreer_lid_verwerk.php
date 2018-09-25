<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
if (isset ($_POST['verzenden']))
{

	require('config.inc.php');
	// Lees het formulier uit
	$Name = $_POST['Naam'];
	$gebruikersnaam= $_POST['Gebruikersnaam'];
	$email = $_POST['Email'];
	$Wachtwoord = $_POST['Wachtwoord'];
	$Geboortedatum = $_POST['Geboortedatum'];
	
	
	//
		if (strlen($Name)				>0 &&
			strlen($gebruikersnaam)		>0 &&
			strlen($email)				>0 &&
			strlen($Wachtwoord)			>0 &&
			strlen($Geboortedatum)		>0)	{
			
			//
			
			$check1 = strtotime($Geboortedatum);
			if (date('Y-m-d', $check1) == $Geboortedatum)
			{
				
	   
			// HALLO
				$query = "INSERT INTO Klanten
				VALUE (NULL, '$Name', '$gebruikersnaam','$email', '$Wachtwoord', '$Geboortedatum')";

				$result = mysqli_query($mysqli, $query);

				if($result) 
				{
					 
					header("Location:inlog.php");
					exit;
				} else {
					echo 'Er ging wat mis met het toevoegen!';
					echo"<p>" . $query . "</p>";
					echo"<p>" . mysqli_error($mysqli) . "</p>";

				}
			} else {
				echo 'Een van de ingevulde data was ongeldig!';
				echo "geboortedatum: " . $Geboortedatum . "<br/>";

			}
			
		}
	else 
	{
	
		echo'Niet alle velden waren ingevuld!';
	}
	
	
}	

	?>
</body>
</html>