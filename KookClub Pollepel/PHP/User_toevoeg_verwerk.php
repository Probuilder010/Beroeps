<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>verwerk</title>
</head>
 
<body>
    <?php
if (isset ($_POST['submit']))
{
    require('config.inc.php');
    // Lees het formulier uit
    $Naam = $_POST['Naam'];
	$Gebruikersnaam = $_POST['Gebruikersnaam'];
    $Email = $_POST['E-mail'];
	$Wachtwoord = $_POST['Wachtwoord'];
	$Geboortedatum = $_POST['Geboortedatum'];
	
    
     
     
         
    
        $query = "INSERT INTO Gerechten
        VALUE (NULL, '$Naam', '$Gebruikersnaam','$Email', '$Wachtwoord' '$Geboortedatum')";
    echo $query;
     
     
}
    if (mysqli_query($mysqli, $query))
    {
        echo "$Naam is toegevoegd.<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen $Naam!<br/>";
        //echo "Query: $opdracht <br/>";
        echo "Foutmelding: ". mysqli_error($mysqli);
    }
    echo "<a href='=" . $rij['ID_Gerechten'] . "'> overzicht</a>";
 
     
     
    ?>
     