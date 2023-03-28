<?php  

include("../../cn/conexion.php");

$datos=array(
   
    $db->real_escape_string(html_entity_decode($_POST['Ecantidad'])), 
    $db->real_escape_string(html_entity_decode($_POST['Ediametro'])),
    $db->real_escape_string(html_entity_decode($_POST['Elargo'])), 
    $db->real_escape_string(htmlentities($_POST['idMadera']))
    
);

$sql="UPDATE madera_rollo SET cantidad=?, diametro=?, largo=? WHERE id=?";

$query=$db->prepare($sql);
$query->bind_param('iiii', $datos[0],$datos[1],$datos[2],$datos[3]);

echo $query->execute();
$query->close();


?>