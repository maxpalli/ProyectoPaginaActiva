<?php
$respuesta = new stdClass();
$respuesta->mensaje = "Hola ".$_POST['nombreProcesada'];
echo json_encode($respuesta);
?>