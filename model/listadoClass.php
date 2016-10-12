<?php
function lista(){
    include '../coreapp/conection.php';

    $sql = "SELECT num_orden, num_exp, fec_inicio, fec_fallecio, apellidos, nombres, num_leg, num_folios, obs FROM sunat";
    $listado = $mysqli->query($sql);

    return $listado;
}
?>