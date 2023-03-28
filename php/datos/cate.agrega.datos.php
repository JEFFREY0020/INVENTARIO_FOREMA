<?php

include("../../cn/conexion.php");

$datos=array(

    $db->real_escape_string(html_entity_decode($_POST['nombre'])),
    $db->real_escape_string(html_entity_decode($_POST['descripcion']))

);

$sql="INSERT INTO categorias (nombre, descripcion) VALUES (?,?)";
$query=$db->prepare($sql);
$query->bind_param('ss',$datos[0],$datos[1]);
echo $query->execute();
$query->close();
    ?>
<script type="text/javascript">
      alertify.success("Agregado correctamente!");
</script>
