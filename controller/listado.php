<?php

    /**
    * 
    */
    class ListadoControllers
    {
        
        public function Listar(){
            
            $orden = $_GET['ordenado'];
            $listado = new Listado();
            $resultado = $listado->ListarTodo($orden);
            while ($row = $resultado->fetch_array(MYSQLI_NUM)) {
                printf("%s %s %s %s %s %s %s %s %s",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
                echo "<br>";
            }
        }
    }
?>