<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
	
<div class="container">


<div class="box-center">
	<title>Crud basico - insertar</title>

<body>



<form action="" method="post">
<h2>Insertar:</h2>
<h3>Auto:</h3>
<label class="lbl">marca:</label>
<input type="text" name="marca" value="" class="txt" required><br>
<label class="lbl">modelo:</label>
<input type="text" name="modelo" value="" class="txt" required><br>
<label class="lbl">color:</label>
<input type="text" name="color" value="" class="txt" required><br>
<label class="lbl">agno:</label>
<input type="text" name="agno" value="" class="txt" required><br>
<label class="lbl">motor:</label>
<input type="text" name="motor" value="" class="txt" required><br>

<input type="submit" name="insertar" value="insertar" class="btn"><br>

<a href="crud-basico.php">Inicio</a>

</form>


<?php


if (isset($_POST['insertar'])) {

include("conexion.php");

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$agno=$_POST['agno'];
$motor=$_POST['motor'];


	$query_insert_auto="INSERT INTO tb_autos (
	    id,
	    marca,
	    modelo,
	    color,
	    agno,
	    motor)

	VALUES(null,'$marca','$modelo','$color','$agno','$motor')";


$result_query_insert_auto = mysqli_query($conn,$query_insert_auto);

if (!$result_query_insert_auto) {
	echo "Error al insertar datos: ".mysqli_error($conn);
}else{
	echo "Registro insertado correctamente!";
}

}

?>

</div>
</div>


</body>
</html>