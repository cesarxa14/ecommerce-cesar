<?php

$nombre= $_POST["nombrereg"];
$correo =$_POST["emailreg"];
$password= $_POST["passwordreg"];

try{
    
$conexion = new PDO('mysql:host=localhost;dbname=pruebas', 'root','');

$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$conexion->exec("set charset utf8");

$sql="insert into tienda (nombre,correo,contraseña) values (:nombre,:correo, :password)";

$resultado = $conexion->prepare($sql);

$resultado->execute(array(":nombre"=>$nombre, ":correo"=>$correo,":password"=>$password));


header("location:registrado.php");

$resultado->closeCursor();

}catch(Exception $e)
{
    echo "Error : " . $e->getMessage();
    echo "Error : " . $e->getLine();
    echo "No se registro";
}



?>