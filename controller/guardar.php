<?php
    require_once "../model/guardar.php";
    /*
       Recibiendo las variables de la pagina Nuevo.php
     */
    $expediente         = $_REQUEST['expediente'];
    $fechaInicio        = $_REQUEST['fechaInicio'];
    $fechaFallecimiento = $_REQUEST['fechaFallecimiento'];
    $apellidos          = $_REQUEST['apellidos'];
    $nombres            = $_REQUEST['nombres'];
    $legajo             = $_REQUEST['legajo'];
    $folios             = $_REQUEST['folios'];
    $observaciones      = $_REQUEST['observaciones'];

    $veo = new Expediente($expediente,$fechaInicio,$fechaFallecimiento,$apellidos,$nombres,$legajo,$folios,$observaciones);
    $veo->Guardar();
?>