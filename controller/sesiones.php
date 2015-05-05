<?php
session_start();
require_once '../coreapp/conection.php';

$user = $_REQUEST['user'];
$pas  = $_REQUEST['clave'];

echo $user."<br>";
echo $pas;

$sql = "SELECT codiusu, niveusu FROM usuarios WHERE logiusu= '$user' AND passusu=md5('$pas') LIMIT 0,1";

$result = $mysqli->query($sql);
$fila = $result->fetch_assoc();
if($fila["niveusu"] == 1){
    $_SESSION['history'] = $fila['cod_usu'];
    header("Location: ../view/listado.php");
}
else
{
    header("Location: ../index.html");
}
?>