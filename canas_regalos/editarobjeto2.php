<?php

$input11=$_GET["producto1"];
$input12=$_GET["categoria1"];
$input13=$_GET["precio1"];
$input14=$_GET["cantidad1"];

require_once 'index.php';

$contador=0;

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()){
    echo "fatal error (connection)";
    exit();
  }

  mysqli_select_db($conexion, $dbname) or die ("no se encuentra la base de datos");

  mysqli_set_charset($conexion,"utf8");

  
 
$consulta="UPDATE productos SET producto='$input11', categoria='$input12', precio=$input13, cantidad=$input14 WHERE producto='$input11'";

$resultados=mysqli_query($conexion,$consulta);

$consulta="SELECT * FROM productos";

$resultados=mysqli_query($conexion,$consulta);

while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){
  
    echo "<table class='tables' width='50%' border='1'><tr><td>";

  echo $fila['producto'] . "</td><td>";
  echo $fila['categoria'] . "</td><td>";
  echo $fila['precio'] . "</td><td>";
  echo $fila['cantidad'] . "</td><td></td></table>";
  }



  mysqli_close($conexion);
  ?>