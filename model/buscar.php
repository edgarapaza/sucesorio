<?php
function FechaInicio($fecha)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE fecIni LIKE '$fecha%';";
    $resp = $mysqli->query($sql);
    return $resp;
}
function FechaFallecimiento($fecha)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE fecFal LIKE '$fecha%';";
    $resp = $mysqli->query($sql);
    return $resp;
}
function NumeroExpediente($numero)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE numExp = '$numero';";
    $resp = $mysqli->query($sql);
    return $resp;
}
function Apellidos($apellidos)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE apelli = '$apellidos';";
    $resp = $mysqli->query($sql);
    return $resp;
}
function Nombre($nombre)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE nombre = '$nombre';";
    $resp = $mysqli->query($sql);
    return $resp;
}
function NumeroLegajo($numleg)
{
    include '../coreapp/conection.php';

    $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE numLeg ='$numLeg';";
    $resp = $mysqli->query($sql);
    return $resp;
}

/*
$mio = FechaInicio('1951-01-2');

    while($row = $mio->fetch_assoc())
    {
        echo $row['numExp']."<br>";
        echo $row['fecIni']."<br>";
        echo $row['fecFal']."<br>";
        echo $row['apelli']."<br>";
        echo $row['nombre']."<br>";
        echo $row['numLeg']."<br>";
        echo $row['numFol']."<br>";
        echo $row['obs']."<br>";
    }
*/
?>