<?php
$hostname_cn = "localhost";
$database_cn = "inventario_forema";
$username_cn = "root";
$password_cn = "";

$db = mysqli_connect($hostname_cn,$username_cn,$password_cn,$database_cn);
mysqli_set_charset($db, "utf8");
