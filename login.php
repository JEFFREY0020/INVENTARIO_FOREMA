
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="librerias/jquery-3.6.0.min.js"></script>

  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/master.css"/>
  <title>FOREMA - Inventario</title>
  <link rel="shortcut icon" href="assets/img/favicon.ico"/>
  <!-- <script src="librerias/sweetalert.js"></script>
  <script src="librerias/sweetalert.min.js"></script> -->
  <script src="librerias/alertifyjs/alertify.js"></script>
</head>

<body>
  <div class="login-box">
    <img src="assets/img/usuario.jpg" class="avatar" alt="Avatar"/>
    <h1>Iniciar Sesión</h1>

    <form action="validar.php" method="post">

      <!-- USERNAME INPUT -->
      <label for="usuario">Usuario</label>
      <input autofocus type="text" placeholder="nombre de usuario" name="usuario" id="usuario" autocomplete="off"/>

      <!-- PASSWORD INPUT -->
      <label for="contrasena">Contraseña</label>
      <input type="text" placeholder="contraseña" name="contrasena" id="contrasena" autocomplete="off"/>

      <input type="submit" value="Ingresar" name="ingresar" id="ingresar"/>

      <a href="#">Olvide la contraseña</a><br/>
      <a href="#">¿No tienes cuenta?</a>

    </form>

    <div id="resultado" align="center"></div>

  </div>
<script src="librerias/jquery-3.6.0.min.js"></script>
<script src="assets/js/registro.js"></script>
</body>

</html>
