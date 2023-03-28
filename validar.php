<style type="text/css">
    #incorrecto {
        color: red;
        font-weight: bold;
    }

    #correcto {
        color: green;
        font-weight: bold;
    }
</style>

<?php
session_start();
include('cn/conexion.php');

$input_usuario = $_POST['usuario'];
$input_contrasena = $_POST['contrasena'];

$sql = mysqli_query($db, "SELECT * FROM usuarios WHERE nombre_usuario ='$input_usuario'") or die(mysqli_error());
$num = mysqli_num_rows($sql);

if ($num > 0) {

    $row = mysqli_fetch_assoc($sql);
    $password_bd = $row['contrasenia'];
    $pass_c = sha1($input_contrasena);

    if ($password_bd == $pass_c) {

        $_SESSION['idusuario'] = $row["id"];
        $_SESSION['usuario'] = $row["nombre_usuario"];
        $_SESSION['contrasena'] = $row["contrasenia"];
        $_SESSION['nombre'] = $row["nombre"];
        $_SESSION['apellido'] = $row["apellido"];

?>
        <script type="text/javascript">
            alertify.success("Acceso concedido, redireccionando...");
        </script>

        <script language="javascript">
            window.setTimeout('location.href="php/inicio.php"', 2000);
        </script>
<?php
    } else {
        echo '<span id="incorrecto">La contraseña no coincide</span>';
    }
} else {

    echo '<span id="incorrecto">Usuario no encontrado</span>';
}
