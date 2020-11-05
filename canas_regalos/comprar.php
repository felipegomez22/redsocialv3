<?php
include("index.php");

$we="";
$we1="";
$we2="";
$we3="";


$Id=$_GET["Id"];

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()){
    echo "fatal error (connection)";
    exit();
  }

  mysqli_select_db($conexion, $dbname) or die ("no se encuentra la base de datos");

  mysqli_set_charset($conexion,"utf8");

  

  $consulta="SELECT * FROM productos WHERE producto='$Id'";
  
  $resultados=mysqli_query($conexion,$consulta);
  
  while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){
    


    
echo "<table class='comprastitulo'><tr><td>";

  echo $fila['producto'] . "</br>";
  echo $fila['categoria'] . "</br>";
  echo $fila['precio'] . "</br>";
  echo $fila['cantidad'] . "</br>";

  $we=$fila['producto'];
  $we1=$fila['categoria'];
  $we2=$fila['precio'];
  $we3=$fila['cantidad'];
  echo "</td></table></tr>";
} 



echo <<<_END
</br>
</br>
<form class="center" name="form1" method="get" action="compra2.php">
<p>Cantidad a pagar</p>
  <input type="text" name="pago">
  <p>Dirección del paquete</p>
  <input type="text">
  <p>Confirma el nombre del producto a pagar</p>
  <input type="text" name="identifica">
  
  </br>
  </br>
  <button type="submit" class="btn btn-primary">comprar</button>
</form>
_END;


?>