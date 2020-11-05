<?php

require_once "index.php";
try{

    $base=new PDO("mysql:host=localhost; dbname=cansatas_404", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM empleados WHERE nombre= :login AND pass= :password";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){

        session_start();
        $_SESSION["usuario"]=$_POST ["login"];
        $ln=true;

        echo "<h2> Listo </h2>";
        header("location:inicio.php");

    }else{

        header("location:login.php");
        echo "<h2> No se puede abrir</h2>";

    }



}catch(Exception $e){
die ("error: " . $e->getMessage());
}
?>