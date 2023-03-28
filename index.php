<?php

session_start();
if(isset($_SESSION['login_usuario'])) {
?>

<!DOCTYPE html>
<html>
<body>

    <div id="principal">

      <?php
        header("location: php/componentes/inicio.php");
      ?>

    </div>
 
</body>
</html>

<?php

} else {

  header("location: login.php");

}

?>
