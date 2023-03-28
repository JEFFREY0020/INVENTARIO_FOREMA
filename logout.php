<?php 
    session_start(); 
    include('cn/conexion.php');

    if(isset($_SESSION['nombre'])) { 

        session_destroy(); 
        header("Location: login.php"); 

    } else { 

	   echo "Operación incorrecta."; 
       
    }
