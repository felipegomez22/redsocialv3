<?php



require_once 'index.php';

echo <<<_END
</br>
</br>
<form class="center" name="form1" method="get" action="editarobjeto2.php">
<p>producto</p>
<p> escribe el nombre correctamente y cambia los demas valores</p>
  <input type="text" name="producto1">
  <p>categoria</p>
  <input type="text" name="categoria1">
  <p>precio</p>
  <input type="text" name="precio1">
  <p>cantidad</p>
  <input type="text" name="cantidad1">
  </br>
  </br>
  <button type="submit" class="btn btn-primary">añadir</button>
</form>
_END;

 
  
  ?>