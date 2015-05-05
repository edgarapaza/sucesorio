<?php include 'header.php';

?>

		<link rel="stylesheet" href="../css/principal.css" />
		<link rel="stylesheet" href="../css/tablas.css" />
<br>

<form action="" method="get">
	Ordenar por:
	<select name="ordenar">
		<option value="idSunat" selected="selected">Numero</option>
		<option value="numExp">Expediente</option>
		<option value="fecIni">Fecha de Inicio</option>
		<option value="fecFal">Fecha Fallecimiento</option>
		<option value="apelli">Apellidos</option>
		<option value="nombre">Nombres</option>
		<option value="numLeg">Numero de Legajo</option>
		<option value="numFol">Numero de Folios</option>
	</select>
	<input type="submit" name="btnOrdenar" value="Mostrar / Ordenar">
</form>


<?php
include('../coreapp/paginator.class.php');



$orden = $_REQUEST['ordenar'];

$numeroTotal ="SELECT COUNT(*) FROM sunat";
$consulta = "SELECT * FROM sunat ORDER BY $orden ASC";

try {
	$conn = new PDO('mysql:host=;dbname=imp_sucesorio', 'root', 'admin');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$num_rows = $conn->query($numeroTotal)->fetchColumn();
	$pages = new Paginator($num_rows,9,array(15,3,6,9,12,25,50,100,250,'All'));
	echo $pages->display_pages();
	echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
	$stmt = $conn->prepare($consulta.' LIMIT :start,:end');
	$stmt->bindParam(':start', $pages->limit_start, PDO::PARAM_INT);
	$stmt->bindParam(':end', $pages->limit_end, PDO::PARAM_INT);
	$stmt->execute();
	$result = $stmt->fetchAll();
	echo "<table border=1><tr><th>Num</th><th>Num Expediente</th><th>Fecha Inicio</th><th>Fecha Fallecimiento</th><th>Apellidos</th><th>Nombres</th><th>Num Legajo</th><th>Folios</th><th>Observaciones</th></tr>\n";
	foreach($result as $row) {
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>\n";
	}
	echo "</table>\n";
	echo $pages->display_pages();

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
</body>
</html>
