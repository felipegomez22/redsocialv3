<!DOCTYPE html>
<html>
  <head>
    <title>Setting up data base</title>
  </head>
  <body>
     
    <h3>setting up...</h3>
    
<?php
  require_once 'functions.php';
    
  createTable('productos',
              'producto VARCHAR(16),
              categoria VARCHAR(16),
              cantidad INT(6),
              precio INT(6)');

  createTable('empleados',
              'nombre VARCHAR(16),
              pass VARCHAR(16)');

                   
?>

    <br>...done.
  </body>
</html>  



