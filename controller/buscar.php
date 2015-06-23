<?php
include '../model/BuscarClass.php';

$mio = new BuscarClass();

//$opcion = $_REQUEST['search'];
$opcion = 6;
$valor = $_REQUEST['valor'];

echo $opt."<br>";
echo $valor."<br>";

echo "Opcion Seleccionada:".$opcion."<br>";
function Visualizar($codigo, $valor)
{
    if ($opcion == 1)
    {
        $res = $mio->FechaInicio('1951-02-1');
       
    }
    if ($opcion == 2)
    {
        $res = $mio->FechaFallecimiento('1951-01-2');

    }
    if ($opcion == 3)
    {
        $res = $mio->Nombre("Juan");

    }
    if ($opcion == 4)
    {
        $res = $mio->NumeroLegajo("001"); //Error

    }
    if ($opcion == 5)
    {
        $res = $mio->Apellidos("Quispe");

    }
    if ($opcion == 6)
    {
        $res = $mio->NumeroExpediente('7'); //Error

    }
}

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

?>