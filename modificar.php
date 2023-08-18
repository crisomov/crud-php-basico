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



	<h2>Modificar</h2>
	<h3>Autos</h3>

<?php



include("conexion.php");

$query_autos="select * from tb_autos;";

$result_query_autos=mysqli_query($conn,$query_autos);

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
						echo "<td>"."<a href='?id=".$row["id"]."'>Modificar/Editar</a>"."</td>";
					echo "</tr>";


					}

					echo "</tbody>";

					echo "<tfoot>";
					echo "</tfoot>";


					echo "</table>";

					}

					?>

<a href="crud-basico.php">Indice</a>
<a href="modificar.php">Recargar</a>






<?php

    if (isset($_GET['id'])) {

         include("conexion.php");

		 $auto="SELECT * FROM tb_autos WHERE id=" . $_GET['id'];
		 /*echo "<h2><u>".$auto."</h2></u>";*/

		 $auto_found=mysqli_query($conn,$auto);
		
        if (!$auto_found) {
         	echo "Error al buscar datos o dato no encontrado: ".mysqli_error($conn);
         }else{
         	
                 
   
            echo "<h2>Auto para modificar</h2>";

         	  while($auto=mysqli_fetch_assoc($auto_found)){

         	  	?>

                        <form method="POST" action="">

						 <label class="lbl">id</label>
						 <input type='text' name='id' value=' <?php echo $auto['id'] ?> ' class='txt' readonly='readonly' />
						 <br>

						<label class='lbl'>marca</label>
						<input type='text' name='marca' value=' <?php echo $auto['marca'] ?> ' class='txt' />
						<br>


						<label class='lbl'>modelo</label>
						<input type='text' name='modelo' value=' <?php echo $auto['modelo'] ?> ' class='txt' />
						<br>

						<label class='lbl'>color</label>
						<input type='text' name='color' value=' <?php echo $auto['color'] ?> ' class='txt' />
						<br>

						<label class='lbl'>año</label>
						<input type='text' name='agno' value=' <?php echo $auto['agno'] ?> ' class='txt' />
						<br>

					    <label class='lbl'>motor</label>
						<input type='text' name='motor' value=' <?php echo $auto['motor'] ?> ' class='txt' />
						<br>

                        <input type='submit' name='actualizar' value='actualizar!' class='btn'/>

                        </form>
         	  <?php
         	  }                   
                      
      
        }
   
       	}

  if (isset($_POST['actualizar'])) {
  	
  	include("conexion.php");
 
  	$id    =$_POST['id'];
  	$marca =$_POST['marca'];
  	$modelo=$_POST['modelo'];
  	$color =$_POST['color'];
  	$agno  =$_POST['agno'];
  	$motor =$_POST['motor']; 


   $q4="UPDATE tb_autos SET    marca='$marca',
	                           modelo='$modelo',
	                           color='$color',
	                           agno='$agno',
	                           motor='$motor'

                            WHERE

                            id=$id";


    $result_q4=mysqli_query($conn,$q4);

    if (!$result_q4) {
    	echo "error al actualizar";
    }else{
        echo "Registro actualizado exitosamente!";

    }

  }



?>




</div>

</div>



</body>
</html>