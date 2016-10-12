<?php
class BuscarClass
{
   
    public function FechaInicio($fecha)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE fecIni LIKE '$fecha%';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
    public function FechaFallecimiento($fecha)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE fecFal LIKE '$fecha%';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
    public function NumeroExpediente($numero)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE numExp = '$numero';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
    public function Apellidos($apellidos)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE apelli = '$apellidos';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
    public function Nombre($nombre)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE nombre = '$nombre';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
    public function NumeroLegajo($numleg)
    {
        include '../coreapp/conection.php';

        $sql = "SELECT numExp, fecIni, fecFal, apelli, nombre, numLeg, numFol, obs FROM sunat WHERE numLeg ='$numLeg';";
        $resp = $mysqli->query($sql);
        return $resp;
    }
}

/*
$mio = new Buscar();
$res = $mio->Apellidos("Apaza");

    while($row = $res->fetch_assoc())
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