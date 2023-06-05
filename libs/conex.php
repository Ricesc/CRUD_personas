<?php 
error_reporting(E_ALL ^ E_NOTICE);
$servidor="localhost";
$usuario="dw2_user";
$password="dw2_user";
$base="dw2_user";
$conn=mysqli_connect($servidor,$usuario,$password,$base);
if($conn->connect_error)
{
    die("fallo la conexion");
} 

?>