<?php
include("index.php");

$we="";
$we1="";
$we2="";
$we3="";



$Id=$_GET["identifica"];
$pago=$_GET["pago"];

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()){
    echo "fatal error (connection)";
    exit();
  }

  mysqli_select_db($conexion, $dbname) or die ("no se encuentra la base de datos");

  mysqli_set_charset($conexion,"utf8");


$consulta='SELECT * FROM productos WHERE producto="' . $Id. '"';

$resultados=mysqli_query($conexion,$consulta);


while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

    $we=$fila['producto'];
    $we1=$fila['categoria'];
    $we2=$fila['precio'];
    $we3=$fila['cantidad'];

}



if ($pago==$sedaces2)
{
  echo "la compra ha sido realizada";

  $sedaces4=$sedaces3-1;
  echo $sedaces4;
  
  $resultados="UPDATE productos SET producto=$sedaces, categoria=$sedaces1, precio=$sedaces2, cantidad=$sedaces4 WHERE producto='$sedaces'";
  
  $resultados=mysqli_query($conexion,$consulta);
  
}else{
  echo "ocurrio un error, </br> verifique que el nombre del producto es correcto,</br> y que el pago sea el requerido";
}
?>