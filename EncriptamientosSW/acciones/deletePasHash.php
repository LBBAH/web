<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

include_once "connection.php";

$sentencia = $base_de_datos->prepare("DELETE FROM users WHERE id = ?;");
$resultado = $sentencia->execute([$id]);

if($resultado === TRUE){
    header("Location: ../tablePswdHash.php");
    die();
} else{
    echo "Algo salió mal";
} 
?>