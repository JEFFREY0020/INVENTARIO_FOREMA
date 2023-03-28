<?php  

include("../../cn/conexion.php");

$datos=array(
   
    $db->real_escape_string(html_entity_decode($_POST['Enombre'])),
    $db->real_escape_string(html_entity_decode($_POST['Edescripcion'])),
    $db->real_escape_string(htmlentities($_POST['idCate']))
    
);

$sql="UPDATE categorias SET nombre=?, descripcion=? WHERE id=?";

$query=$db->prepare($sql);
$query->bind_param('ssi', $datos[0],$datos[1],$datos[2]);

echo $query->execute();
$query->close();


?>