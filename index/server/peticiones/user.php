<?php
include '../../modelo/usuario.php';
$json = json_decode(file_get_contents('php://input'), true);
if ($json['solicitud']) {
    $idPro = $json['solicitud'];
    $respuesta = getHorario($idPro);
}
echo json_encode($respuesta, true);
?>