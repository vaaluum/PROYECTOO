<?php
function mostrarprofesional() {
    $conexion = include ("conexion.php");
    $consulta = "select * from profesional";
    $resultado = mysqli_query($conexion, $consulta);
    $html = "<select onchange='horarios(event)' class='select' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='userName'><option value=''selected='true' disabled>Seleccione una opcion</option>";
;
    while ($registro = mysqli_fetch_row($resultado)) {
    $html = $html . "<option value=" . $registro[0] . ">" . $registro[1] . " " . $registro[2] . " " . $registro[3] . " </option>";
}
    $html = $html . "</select>";
    return $html;

}
?>