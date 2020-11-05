<?php



require_once 'index.php';

echo <<<_END
</br>
</br>
<p>Esta sección es espesificamente para empleados</p>
</br>
</br>
<form class="center" name="form1" method="post" action="login2.php">
<p>nombre</p>
  <input type="text" name="login">
  <p>contraseña</p>
  <input type="password" name="password">
  </br>
  </br>
  <button type="submit" class="btn btn-primary">login</button>
</form>
_END;

 
  
  ?>















 