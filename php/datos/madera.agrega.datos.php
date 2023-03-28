<?php

include("../../cn/conexion.php");

$datos = array (

    $db->real_escape_string(html_entity_decode($_POST['cantidad'])),
    $db->real_escape_string(html_entity_decode($_POST['diametro'])),
    $db->real_escape_string(html_entity_decode($_POST['largo']))
);

$sql="INSERT INTO madera_rollo (cantidad, diametro, largo) VALUES (?,?,?)";
//agregar a la tabla un codigo

//buscar en la madera_rollo_stock por codigo para obetener la cantidad en existencia, luego a esa cantidad sumarle la cantidad que se esta ingresando y despues actualizar la madera_rollo conla nueva cantidad

$query=$db->prepare($sql);
$query->bind_param('iii',$datos[0],$datos[1],$datos[2]);
echo $query->execute();
$query->close();

    //sonsultar a la base de datos en la nueva tabla madera_rollo_stock la cantidad y sumarle la cantidad que se este agregando
    ?>

<script type="text/javascript">
      alertify.success("Agregado correctamente!");
</script>
