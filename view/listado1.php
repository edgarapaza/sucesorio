<?php include 'header.php';
$cantidad_resultados_por_pagina = 20;

//Comprueba si está seteado el GET de HTTP
if (isset($_GET['pagina'])) {

	//Si el GET de HTTP SÍ es una string / cadena, procede
	if (is_string($_GET['pagina'])) {

		//Si la string es numérica, define la variable 'pagina'
		 if (is_numeric($_GET['pagina'])) {

			 //Si la petición desde la paginación es la página uno
			 //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
			 if ($_GET['pagina'] == 1) {
				 header("Location: listado1.php");
				 die();
			 } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
				 $pagina = $_GET['pagina'];
			}

		 } else { //Si la string no es numérica, redirige al index (por ejemplo: listado1.php?pagina=AAA)
			 header("Location: listado1.php");
			die();
		 }
	}

} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
	$pagina = 1;
}

//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
$empezar_desde = ($pagina-1) * $cantidad_resultados_por_pagina;

	#Conexion a la base de datos
	require_once "../coreapp/conection.php";
	require_once "../controller/listado.php";




	$conn = new Conection();
	$link = $conn->Conectar();

    $list = new ListadoControllers();
    $resultado = $list->Listar($opcion);



//Obtiene TODO de la tabla
$obtener_todo_BD = "SELECT * FROM sunat";

//Realiza la consulta
$consulta_todo = $list->Listar($opcion);

//Cuenta el número total de registros
$total_registros = $resultado->num_rows;

//Obtiene el total de páginas existentes
$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina);

//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
//Limitada por la cantidad de cantidad por página
$sql = "SELECT * FROM sunat ORDER BY sunat.num_orden ASC LIMIT $empezar_desde, $cantidad_resultados_por_pagina";

$consulta_resultados = $link->query($sql);

//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
//que mostrará los resultados por nombre

?>

<span class="persona">
	<table class="table">
		<tr>
			<th>Num</th>
			<th>Num Expediente</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fallecido</th>
			<th>Apellidos</th>
			<th>Nombres</th>
			<th>Legajo</th>
			<th>Num Folios</th>
			<th>Observaciones</th>
		</tr>
		<?php
		while($datos = $consulta_resultados->fetch_array(MYSQLI_ASSOC)) {
		 ?>
		<tr>
			<td><?php printf("%s",$datos['num_orden']); ?></td>
			<td><?php printf("%s",$datos['num_exp']); ?></td>
			<td><?php printf("%s",$datos['fec_inicio']); ?></td>
			<td><?php printf("%s",$datos['fec_fallecio']); ?></td>
			<td><?php printf("%s",$datos['apellidos']); ?></td>
			<td><?php printf("%s",$datos['nombres']); ?></td>
			<td><?php printf("%s",$datos['num_leg']); ?></td>
			<td><?php printf("%s",$datos['num_folios']); ?></td>
			<td><?php printf("%s",$datos['obs']); ?></td>
		</tr>
		<?php
		}
		?>
	</table>

</span>


<hr>

<?php
//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
//Nota: X = $total_paginas
for ($i=1; $i<=$total_paginas; $i++) {
	//En el bucle, muestra la paginación
	echo "<a href='?pagina=".$i."'>".$i."</a> | ";
}
?>