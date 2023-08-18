<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css1.css">

	<title>Crud basico - eliminar</title>
</head>
<body>

	<div class="container">

	<div class="box-center">

	<h2>Eliminar</h2>
	<h3>Autos</h3>

<?php



include("conexion.php");

$query_autos="select * from tb_autos;";

$result_query_autos=mysqli_query($conn,$query_autos);


$query_autos_columnas="SHOW COLUMNS FROM tb_autos;";

$result_query_autos_columnas=mysqli_query($conn,$query_autos_columnas);


if (isset($result_query_autos)) {
echo "<table class='tabla-datos'>";
echo "<caption><h2>Listado Autos</h2></caption>";
        

echo "<thead>";
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Marca</th>";
		echo "<th>Modelo</th>";
		echo "<th>Color</th>";
		echo "<th>Año</th>";
		echo "<th>Motor</th>";
		echo "<th>Accion</th>";
	echo "</tr>";
echo "</thead>";

echo "<tbody>";

while($row=mysqli_fetch_assoc($result_query_autos))

{

echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["marca"]."</td>";
	echo "<td>".$row["modelo"]."</td>";
	echo "<td>".$row["color"]."</td>";
	echo "<td>".$row["agno"]."</td>";
	echo "<td>".$row["motor"]."</td>";
	echo "<td>"."<a href='?id=".$row["id"]."'>Eliminar</a>"."</td>";
echo "</tr>";


}

echo "</tbody>";

echo "<tfoot>";
echo "</tfoot>";


echo "</table>";

}

?>

<a href="crud-basico.php">Indice</a>
<a href="eliminar.php">Recargar</a>


<?php


	if (isset($_GET['id'])) {
		
         include("conexion.php");

         $query_elimina_auto="DELETE FROM tb_autos WHERE id=".$_GET['id'];

         $result_query_elimina_auto = mysqli_query($conn,$query_elimina_auto);

         if (!$result_query_elimina_auto) {
         	echo "Error al eliminar datos: ".mysqli_error($conn);
         }else{
         	
         	echo "Registro eliminado correctamente!";
         	
         }
   
       	}

?>


</div>
</div>

</body>
</html>


