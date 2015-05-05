<?php
include '../model/buscar.php';
include '../coreapp/conection.php';

$opcion = $_REQUEST['search'];
$valor = $_REQUEST['valor'];
echo $opt."<br>";
echo $valor."<br>";

echo "Opcion Seleccionada:".$opcion."<br>";

function Visualizar($opcion,$valor)
{
    if ($opcion == 1)
    {
        $mio = FechaInicio('1951-02-1');

    }
    if ($opcion == 2)
    {
        $mio = FechaFallecimiento('1951-01-2');

    }
    if ($opcion == 3)
    {
        $mio = Nombre($valor);

    }
    if ($opcion == 4)
    {
        $mio = NumeroLegajo(9);

    }
    if ($opcion == 5)
    {
        $mio = Apellidos($valor);

    }
    if ($opcion == 6)
    {
        $mio = NumeroExpediente(6);

    }

    return $mio;
}
/*
$mio = Visualizar(3,'Susana');

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