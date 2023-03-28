
<!-- Modal agregar-->
<div class="modal fade" id="modalAgregaCate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="formAgregaCate">
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off" onkeyup="saltar(event,'descripcion')">

            <label>Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" autocomplete="off" onkeyup="saltar(event,'agregaCate')">

            <!-- <input type="date" hidden="" name="fecha" id="fecha"> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="agregaCate" >Agregar datos</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="modalEditaCate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEditaCate">
          <input type="text" hidden="" name="idCate" id="idCate">

          <label> Nombre</label>
          <input type="text" name="Enombre" id="Enombre" class="form-control" onkeyup="saltar(event,'Edescripcion')">

          <label> Descripción</label>
          <input type="text" name="Edescripcion" id="Edescripcion" class="form-control" onkeyup="saltar(event,'editaCate')">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="editaCate">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<div id="sicate" align="center"></div>

<script type="text/javascript">

  $(document).ready(function() {
          $('#agregaCate').click(function() {
          agregaDatosCate();
          // hola();
        });
  });


  $(document).ready(function() {
          $('#editaCate').click(function() {
          editaDatosCate();
        });
  });

  $(function() {
      $('#modalAgregaCate').on('shown.bs.modal', function (e) {
        $('input[name=nombre]').focus();
      })
  });

  $(function() {
      $('#modalEditaMadera').on('shown.bs.modal', function (e) {
        $('input[name=Enombre]').focus();
      })
  });

</script>
