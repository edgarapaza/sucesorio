<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busqueda</title>
</head>
<body>
    <div id="search">
        <H2>BUSQUEDA</H2>
        <form action="../controller/buscar.php" method="get" accept-charset="utf-8">
            <input type="radio" name="search" value="2" placeholder="">Fecha de Fallecimiento <br/>
            <input type="radio" name="search" value="1" placeholder="">Fecha de Inicio <br/>
            <input type="radio" name="search" value="3" placeholder="">Nombre <br/>
            <input type="radio" name="search" value="5" placeholder="">Apellidos <br/>
            <input type="radio" name="search" value="4" placeholder="">Numero de Legajo <br/>
            <input type="radio" name="search" value="6" placeholder="">Numero de Expediente <br/>
            <input type="text" name="valor" value="" placeholder="Escriba Busqueda">
            <input type="submit" name="btnEnviar" value="Buscar">
        </form>
    </div>
    <div id="resultado">
        <?php
            include '../controller/buscar.php';

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
        ?>

    </div>
</body>
</html>