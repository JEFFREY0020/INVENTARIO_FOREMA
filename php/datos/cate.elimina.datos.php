<?php

include("../../cn/conexion.php");
   
$id=$db->real_escape_string(htmlentities($_POST['id']));

$sql="DELETE FROM categorias WHERE id=?";

$query=$db->prepare($sql);
$query->bind_param('i', $id);
echo $query->execute();
$query->close();


?>