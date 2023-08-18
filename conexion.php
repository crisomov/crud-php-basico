<?php

//archivo de conexion a base de datos

$db_name="db_autos";
$server="127.0.0.1";
$user="root";
$password="";

$conn=mysqli_connect($server,$user,$password,$db_name) or die('xxx!!!');
mysqli_set_charset($conn,"utf8");

?>