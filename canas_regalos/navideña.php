<?php



require_once 'index.php';

$gg="";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()){
    echo "fatal error (connection)";
    exit();
  }

  mysqli_select_db($conexion, $dbname) or die ("no se encuentra la base de datos");

  mysqli_set_charset($conexion,"utf8");

  $consulta="SELECT * FROM productos WHERE categoria LIKE 'canstas'";

  $resultados=mysqli_query($conexion,$consulta);

  while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){
  
    echo "<table class='tables' width='60%' border='1'><tr><td>";
    

  echo $fila['producto'] . "</td><td>";
  echo $fila['categoria'] . "</td><td>";
  echo $fila['precio'] . "</td><td>";
  echo $fila['cantidad'] . "</td>";
  $gg=$fila['producto'];
  
  echo "<td><a href='comprar.php?Id=$gg'><input type='button' value='comprar'></td></table>";
  }

  mysqli_close($conexion);
  require_once 'dise.php';
?>