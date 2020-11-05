
<?php 
 

 echo <<<_INIT
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
 <link rel='stylesheet' href='estilo.css' type='text/css'>
 <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
 <script src='node_modules/jquery/dist/jquery.min.js'></script>
 <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
 <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
 <script src='javascript.js'></script>
_INIT;

 require_once 'functions.php';
 

 
 echo <<<_END
 <title>Canastas de regalo</title>
 
 
     <div id='logo' class='center'>
      <img id='robin' src='3_1_5.jpg' height="200px" width="200px"> Canastas de regalo
     </div>
     <body background="fondo.jpg">
     
 </head>
 <body>
_END;
 session_start();
 if(!isset($_SESSION["usuario"]))
 {
    echo <<<_S
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
    <a class="navbar-brand" href="inicio.php">INICIO</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="casuales.php">Casuales <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="navideña.php">Navideña <span class="sr-only">(current)</span></a>
       </li>
     <li class="nav-item active">
     <a class="nav-link" href="infatil.php">Infantil <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active">
     <a class="nav-link" href="login.php">login <span class="sr-only">(current)</span></a>
   </li>
     </ul>
     <form action="pagina_busqueda.php" method="get"class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="text" placeholder="escribe" aria-label="Search" name="buscar">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
     </form>
   </div>
  </nav>
_S;

 }else{
   echo <<<_LOGGEDIN
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
     <a class="navbar-brand" href="inicio.php">INICIO</a> 
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item active">
           <a class="nav-link" href="todos.php">todos <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
           <a class="nav-link" href="herramientas.php">herramientas <span class="sr-only">(current)</span></a>
         </li>
       <a class="nav-link" href="electricos.php">electricos <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
       <a class="nav-link" href="crearobjetopart1.php">agregar <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
       <a class="nav-link" href="destruirobjeto1.php">eliminar <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
       <a class="nav-link" href="editarobjeto1.php">editar <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
       <a class="nav-link" href="login1.php">login <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item active">
       <a class="nav-link" href="logout.php">log out <span class="sr-only">(current)</span></a>
     </li>
       </ul>
       <form action="pagina_busqueda.php" method="get"class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="text" placeholder="escribe" aria-label="Search" name="buscar">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
       </form>
     </div>
   </nav>
_LOGGEDIN;
 }
 
 
 
 
 
 echo <<<_END2
 
 <script src='bootstrap/jquery-3.4.1.slim.min.js'></script>
 <script src='bootstrap/popper.min.js'></script>
 <script src='bootstrap/bootstrap.min.js'></script>
 </body>
 </html>
 
_END2;
   
?>
