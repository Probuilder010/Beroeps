


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Gerechten l Gerechten</title>
<link href="../css/table.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

<header>
      <div class="container">
        <div id="branding">
          <a href="../index.html"><img src="../php/images/Logo.png" alt="Logo" height="50" width="150"></a>
        </div>
        <nav>
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li class="current"><a href="gerechten.html">Gerechten</a></li>
			<li ><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


	<?php

require_once 'config.inc.php';


	$query = "SELECT * FROM Gerechten WHERE Categorie = Voorgerecht";


	$result = mysqli_query($mysqli,$query);


	//echo $query;

	echo "<table border= '1'>";
	echo "<tr>";
	echo "<th> ID </th>";
	echo "<th> Name </th>";
	echo "<th> Categorie </th>";
	echo "<th> Bereiding</th>";
	echo "<th>bew</th>";
	echo "<th>verw</th>";
	echo "<th>foto</th>";

	echo "</tr>";




	while ($row = mysqli_fetch_array($result))
	{
		echo "<tr>";

		echo "<td>" . $row['ID']."</td>";
		echo "<td>" . $row['Name']."</td>";
		echo "<td>" . $row['Categorie']."</td>";
		echo "<td>" . $row['Beschrijving']."</td>";
		echo "<td align='center'> <a href='gerechtenaanpas.php?id=". $row['ID']."'><img src='../php/images/edit.png' width='20px' height='20px'></a></td>";
		echo "<td align='center'> <a href='gerechtenverwijder.php?id=". $row['ID']."'><img src='../php/images/Delete.png' width='20px' height='20px'></a></td>";
		echo "<td align='center'> <a href='foto.php?id=". $row['ID']."'><img src='../php/images/camera.png' width='20px' height='20px'></a></td>";


		echo "</tr>";
	}
	echo "</table> <br>";


?>

<a href="gerechten_toevoeg.php">voeg gerechten toe</a>
	<footer>
      <p>pollepel, Copyright 2018 &copy; Gemaakt door: YT PS RG</p>
    </footer>


</body>
</html>
