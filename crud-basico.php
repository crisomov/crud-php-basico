<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1.css">
	<title>Crud basico</title>
</head>
<body>


<div class="container">

<div class="box-center">
<h1>Crud Basico</h1>


<?php

include("conexion.php");

		$q5="select * from tb_menu;";

		$r_q5=mysqli_query($conn,$q5);

		echo "<ol>";

				while($row=mysqli_fetch_assoc($r_q5)){

					if ($row['estado']==1) {				

						echo "<li><a href=".$row['url'].">".$row["nombre"]."</a></li>";
						
					}
        }
        echo "</ol>";

		?>


<a href="readme.php">Readme</a>

</div>

</div>

</body>
</html>