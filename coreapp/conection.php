<?php

class Conection {

	public function Conectar() {
		#require_once ("config.php");
		$mysqli = new mysqli("localhost","root", "admin", "imp_sucesorio");
		$mysqli->set_charset("utf8");

		if ($mysqli->connect_errno) {
			echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.")";
			exit();
		}

		#echo $mysqli->host_info. "Dentro de la clase";
		return $mysqli;
	}
}

?>