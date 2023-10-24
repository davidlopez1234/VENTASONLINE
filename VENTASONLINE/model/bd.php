<?php 
$servidor="localhost";
$baseDeDatos="ventasonline";
$usuario="root";
$contrasenia="";
try{
    $conexion=new PDO("myl:host=$servidor;dname=$baseDeDatos",$usuario,$contrasenia);
    echo "coneccion realizada...";
}catch(Exception $error){
    echo $error->getMessage();
}
?>