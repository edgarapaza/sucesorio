<?php include 'header.php'; 

$cantidad_resultados_pagina = 10;

//Comprueba si está seteado el GET de HTTP
if (isset($_GET["pagina"])) {

	//Si el GET de HTTP SÍ es una string / cadena, procede
	if (is_string($_GET["pagina"])) {

		//Si la string es numérica, define la variable 'pagina'
		 if (is_numeric($_GET["pagina"])) {

			 //Si la petición desde la paginación es la página uno
			 //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
			 if ($_GET["pagina"] == 1) {
				 header("Location: index.php");
				 die();
			 } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
				 $pagina = $_GET["pagina"];
			};

		 } else { //Si la string no es numérica, redirige al index (por ejemplo: index.php?pagina=AAA)
			 header("Location: index.php");
			die();
		 };
	};

} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
	$pagina = 1;
};

//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
$empezar_desde = ($pagina-1) * $cantidad_resultados_pagina;

require_once "../coreapp/conection.php";

$consulta = $conn->query($sql2);


while ($row = $consulta->fetch_array(MYSQLI_NUM)) {
		printf("%s %s %s %s %s %s\t %s\t %s\t %s ",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
		echo "<br>";
}
?>

<?php
//Obtiene TODO de la tabla
$obtener_todo_BD = "SELECT * FROM mmv004";

//Realiza la consulta
$consulta_todo = mysqli_query($conexion, $obtener_todo_BD);

//Cuenta el número total de registros
$total_registros = mysqli_num_rows($consulta_todo);

//Obtiene el total de páginas existentes
$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina); 

//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
//Limitada por la cantidad de cantidad por página
$consulta_resultados = mysqli_query($conexion, "
SELECT * FROM `mmv004` 
ORDER BY `mmv004`.`id` ASC 
LIMIT $empezar_desde, $cantidad_resultados_por_pagina");

//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
//que mostrará los resultados por nombre
while($datos = mysqli_fetch_array($consulta_resultados)) {
?>

<span class="persona">
<p><strong><?php echo $datos['nombre']; ?></strong> <br>
<?php echo $datos['edad']; ?></p>
</span>

<?php
};
?>

<?php
//Obtiene TODO de la tabla
$obtener_todo_BD = "SELECT * FROM mmv004";

//Realiza la consulta
$consulta_todo = mysqli_query($conexion, $obtener_todo_BD);

//Cuenta el número total de registros
$total_registros = mysqli_num_rows($consulta_todo);

//Obtiene el total de páginas existentes
$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina); 

//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
//Limitada por la cantidad de cantidad por página
$consulta_resultados = mysqli_query($conexion, "
SELECT * FROM `mmv004` 
ORDER BY `mmv004`.`id` ASC 
LIMIT $empezar_desde, $cantidad_resultados_por_pagina");

//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
//que mostrará los resultados por nombre
while($datos = mysqli_fetch_array($consulta_resultados)) {
?>

<span class="persona">
<p><strong><?php echo $datos['nombre']; ?></strong> <br>
<?php echo $datos['edad']; ?></p>
</span>

<?php
};
?>

<hr><!----------------------------------------------->

| <?php
//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
//Nota: X = $total_paginas
for ($i=1; $i<=$total_paginas; $i++) {
	//En el bucle, muestra la paginación
	echo "<a href='?pagina=".$i."'>".$i."</a> | ";
}; ?>

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
