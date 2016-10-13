<?php
    class ListadoControllers
    {

        public function Listar(){

            require_once "../model/listadoClass.php";

            $listado = new Listado();
            $resultado = $listado->ListarTodo();

            return $resultado;
        }
    }

?>