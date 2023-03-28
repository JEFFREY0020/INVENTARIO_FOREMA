<?php

include("../../cn/conexion.php");

$id=$db->real_escape_string(htmlentities($_POST['id']));

$sql="SELECT * FROM madera_rollo WHERE id=?";

$query=$db->prepare($sql);
$query->bind_param('i', $id);
$query->execute();
$datos = $query->get_result()->fetch_assoc();

echo json_encode($datos);
 
?>