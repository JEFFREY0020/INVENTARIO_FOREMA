<?php 

include_once 'componentes/header.php';
include_once 'componentes/barras.php';
include_once 'modales/cate.modal.php';

 ?>



 <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4">Administrar categorias</h3>

               <br>

                <div class="card mb-4">
                    <div class="card-header">
                      <span  class="btn btn-primary btn-sm" id="btnagregar" data-bs-toggle="modal" data-bs-target="#modalAgregaCate" >Agregar registro 
                        <i class="fa-solid fa-plus"></i>
                      </span>
                  </div>
                  <div class="card-body" > 
                      <div id="tabla_categoria">
                        <!-- TABLA -->
                        </div>

                        <hr class="dropdown-divider" />

                  </div>
              </div>
          </div>
      </main>
      <?php include_once 'componentes/pie.php'; ?>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
       $('#tabla_categoria').load('tablas/cate.tabla.php');
   });

</script>

<?php include 'componentes/scripts.php'; ?>

</body>
</html>