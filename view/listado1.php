<?php include 'header.php'; ?>

		<link rel="stylesheet" href="../css/principal.css" />
		<link rel="stylesheet" href="../css/tablas.css" />
<br>

<form action="" method="get">
	Ordenar por:
	<select name="ordenar">
		<option value="num_orden" selected="selected">Numero</option>
		<option value="num_exp">Expediente</option>
		<option value="fec_inicio">Fecha de Inicio</option>
		<option value="fec_fallecio">Fecha Fallecimiento</option>
		<option value="apellidos">Apellidos</option>
		<option value="nombres">Nombres</option>
		<option value="num_leg">Numero de Legajo</option>
		<option value="num_folios">Numero de Folios</option>
	</select>
	<input type="submit" name="btnOrdenar" value="Mostrar / Ordenar">
</form>


<?php
require_once "../coreapp/conection.php";
	// source inclusion
	
    require_once 'Pagination.class.php';
    
    // determine page (based on <_GET>)
    $page = isset($_GET['page']) ? ((int) $_GET['page']) : 1;
    
    // instantiate with page and records as constructor parameters
    $pagination = (new Pagination($page, 200));
    $markup = $pagination->parse();

$conection = new Conection();
$conn = $conection->Conectar();


$orden = $_REQUEST['ordenar'];
echo $orden;
$sql1 ="SELECT COUNT(*) FROM sunat ";
$sql2 = "SELECT * FROM sunat ORDER BY $orden ASC";
$consulta = $conn->query($sql2);


while ($row = $consulta->fetch_array(MYSQLI_NUM)) {
		printf("%s %s %s %s %s %s\t %s\t %s\t %s ",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
		echo "<br>";
}
?>