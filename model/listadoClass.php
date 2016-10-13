<?php

	class Listado{

		private $conn;

		function __construct(){
			require_once "../coreapp/conection.php";
			$link = new Conection();
			$this->conn = $link->Conectar();
			return $this->conn;
		}

		public function ListarTodo(){
			$sql = "SELECT * FROM sunat";
			$data = $this->conn->query($sql);
			return $data;
		}
	}

	/*$listado = new Listado();
	$resultado = $listado->ListarTodo('apellidos');
	while ($row = $resultado->fetch_array(MYSQLI_NUM)) {
		printf("%s %s %s %s %s %s %s %s %s",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
		echo "<br>";
	}
	*/
?>