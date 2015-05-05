<?php
require_once '../model/listadoClass.php';
require_once '../coreapp/app/Pagination.php';

$Pagination = new Pagination(100, 10, array(5, 10, 25, “All”), “comments”, “pageOff”, “pageOn”, “pageSelect”, “pageErrors”);

$num = lista();

echo "<table border='1'>
    <caption>Listado de Expedientes</caption>
    <thead>
        <tr>
            <th>Num Orden</th>
            <th>Numero de Expediente</th>
            <th>Fecha de inicio</th>
            <th>Fecha de Fallecimiento</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Numero de Legago</th>
            <th>Folios</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
    ";
    while ($row = $num->fetch_assoc())
    {
        echo "<tr>
             <td>".$row['idSunat']."</td>";
        echo "<td>".$row['numExp']."</td>";
        echo "<td>".$row['fecIni']."</td>";
        echo "<td>".$row['fecFal']."</td>";
        echo "<td>".$row['apelli']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['numLeg']."</td>";
        echo "<td>".$row['numFol']."</td>";
        echo "<td>".$row['obs']."</td>";
        echo "</tr>";
    }
    echo "</tbody>
</table>";
?>