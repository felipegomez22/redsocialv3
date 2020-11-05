<?php



require_once 'index.php';

echo <<<_END
</br>
</br>
<form class="center" name="form1" method="get" action="crearobjetopart2.php">
<p>producto</p>
  <input type="text" name="producto">
  <p>categoria</p>
  <input type="text" name="categoria">
  <p>precio</p>
  <input type="text" name="precio">
  <p>cantidad</p>
  <input type="text" name="cantidad">
  </br>
  </br>
  <button type="submit" class="btn btn-primary">añadir</button>
</form>
_END;

 
  
  ?>
