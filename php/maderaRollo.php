<?php

include_once 'componentes/header.php';
include_once 'componentes/barras.php';
include_once 'modales/rollo.modal.php';

 ?>

 <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h3 class="text-center mt-4">ENTRADA DE TROZAS SEGUN DIÁMETRO Y LONGITUD</h3>

                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4">
                          One of two columns
                      </div>
                      <div class="col-4 text-end">
                          One of two columns
                      </div>
                  </div>
               </div>

               <br>

                <div class="card mb-4">
                    <div class="card-header">
                      <span  class="btn btn-primary btn-sm" id="btnagregar" data-bs-toggle="modal" data-bs-target="#modalAgregaMadera">Agregar registro
                        <!-- <i class="bi bi-plus-circle"></i> -->
                        <!-- <i class="fa-solid fa-circle-plus"></i> -->
                        <i class="fa-solid fa-plus"></i>
                      </span>
                  </div>
                  <div class="card-body">
                      <div id="tabla_maderaRollo" style="align-content: center;">
                        <!-- TABLA -->
                        </div>

                  </div>
              </div>
          </div>
      </main>
      <?php include_once 'componentes/pie.php'; ?>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
       $('#tabla_maderaRollo').load('tablas/rollo.tabla.php');
   });

</script>

<?php include 'componentes/scripts.php'; ?>

</body>
</html>
